<?php
	header("Content-Type: text/html;cahrset=utf-8");
?>

<meta http-equiv="Content-Type" content="text/html;charset=utf-8">

<?php
	session_start();
	require_once('database.php');
	
	class Adminpanel {
		public function __construct() {

		}
	}
	

	class Posts extends Aminpanel {
		public function __construct() {
			parent::__construct();
			$this->ksdb = new Database;
			$this->base = (object) '';
			$this->base->url = "http://".$_SERVER['SERVER_NAME'];
		}

		public function listPosts() {
			$posts = $return = array();
			$query = $this->ksdb->db->prepare("SELECT * FROM posts");

			try {
				$query->execute();
				for($i = 0; $row = $query->fetch(); $i++) {
					$return[$i] = array();
					foreach ($row as $key => $rowitem) {
						$return[$i][$key] = $rowitem;
					}
				}
			} 
			catch(PDOException $e) {
				echo $e->getMessage();
			}

			$posts = $return;
			require_once 'templates/manageposts.php';
		}

		public function editPosts() {

		}

		public function addPost() {
			require_once 'templates/newposts.php';
		}

		public function savePost() {
			$array = $format = $return = array();
			if(!empty($_POST['post'])) {
				$post = $_POST['post'];
			}

			if(!empty($post['content'])) {
				$array['content'] = $post['content'];
				$format[] = ':content';
			}

			$cols = $values = '';
			$i = 0;
			foreach($array as $col => $data) {
				if($i == 0) {
					$cols .= $col;
					$values .= $format[$i];
				}
				else {
					$cols .= ',' . $col;
					$values .= ',' . $format[$i];
				}
				$i++;
			}

			try {
				$query = $this->ksdb->db->prepare("INSERT INTO posts(".$cols.") VALUES (".$values.")");
				for($c = 0; $c < $i ; $c++) {
					$query->bindParam($format[$c], ${'var'.$c});
				}
				$z = 0;
				foreach($array as $col => $data) {
					${'var'. $z} = $data;
					$z++;
				}
				$result = $query->execute();
				$add = $query->rowCount();
			}
			catch(PDOException $e) {
				echo $e->getMessage();
			}

			$query->closeCursor();
			$this->db = null;
			if(!empty($add)) {
				$status = array('success' => "Ваше сообщение успешно сохранено.");
			}
			else {
				$status = array('error' => 'В процессе сохранения вашего сообщения возникла ошибка. Пожалуйста, повторите попытку позднее.');
			}

			header("Location: http://localhost/php-fast-start/kickstart/admin/posts.php");
		}

		public function deletePost() {

		}
	}

	$admin = new Aminpanel();
?>










