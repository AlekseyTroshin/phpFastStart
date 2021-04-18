<?php
	header("Content-Type: text/html;charset=utf-8");
?>

<meta http-equiv="Content-Type" content="text/html;charset=utf-8">

<?php
	class Database{
		public $dbserver = '';
		public $username = '';
		public $password = '';
		public $database = '';
		public $db = '';

		public function __construct() {
			$this->dbserver = 'localhost:8888';
			$this->username = 'roott';
			$this->password = 'root';
			$this->database = 'kickstartapp';
			$this->db = new PDO("mysql:host=" . $this->dbserver . ";dbname=" $this->database, $this->username, $this->password);
		}

		publick function dbselect($table, $select, $where = NULL) {

		}

		publick function dbadd($tablename, $insert, $format) {

		}

		publick function dbupdate($tablename, $insert, $where) {

		}
	}
?>