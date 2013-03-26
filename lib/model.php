<?
class Model extends PDO {
		function __construct() {
			$this->host = 'localhost'; 
			$this->engine = 'mysql'; 
			$this->db = 'stages'; 
			$this->user = 'root'; 
			$this->pass = '1234'; 
			$dns = "{$this->engine}:dbname={$this->db};host={$this->host}"; 
			parent::__construct($dns, $this->user, $this->pass);
		}
};
