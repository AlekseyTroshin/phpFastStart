<?php
	header("Content-Type: text/html;charset=utf-8");
?>

<meta http-equiv="Content-Type" content="text/html;charset=utf-8">

<?php
	require_once('database.php');
	class Login {
		public function __construct() {
			$this->ksdb = new database;
			$this->base = (object) '';
			$this->base->url = "http://".$_SERVER['SERVER_NAME'];
			$this->index();
		}

		public function index() {
			if($_SERVER['REQUEST_METHOD'] === 'POST') {
				$this->validateDetaild();
			}
			elseif(!empty($_GET['status']) && $_GET['status'] == 'inactive') {
				$error = 'Сеанс завершён в связи с отсутствием активоности. Пожалуйста, авторизуйтесь снова.';
			}

			require_once 'admin/templates/loginform.php';
		}

		public function loginSuccess() {
			header('Location: http://' . $_SERVER['SERVER_NAME'] . '/admin/posts.php');
			return;
		}

		public function loginFail() {
			return 'Неверное имя пользователя/пароль';
		}

		public function validateDetails() {
			if(!empty($_POST['username']) && !empty($_POST['password'])) {
				$salt = '$2a$07$R.gjb2U2N.FmZ4hPply2CN$';
				$password = crypt($_POST['password'], $salt);
				$return = [];
				$query = $this->ksdb->db->prepare("SELECT * FROM users WHERE username = ? AND password = ?");

				try {
					$query->execute(array($_POST['username'],$password));
					for($i = 0; $row = $query->fetch(); $i++) {
						$return[$i] = array();
						foreach($row as $key => $rowitem) {
							$return[$i][$key] = $rowitem;
						}
					}
				} 
				catch(PDOException $e) {
					echi $e->getMessage();
				}

				if(!empty($return) && !empty($return[0])) {
					$this->loginSuccess();
				}
				else {
					echi $error = $this->loginFail();
				}
			}
		}
	}
?>