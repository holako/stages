<?
class StudentsController {
	function __construct()
	{
		require "{$_SERVER['DOCUMENT_ROOT']}/models/student.php";
		$this->model = new StudentModel();
	}
	function index()
	{
		$r = $this->model->query('SELECT * FROM students');
		print_r($r);
	}
	function show($id)
	{
		echo "show $id";
	}
	function edit($id)
	{
		echo "edit $id";
	}
	function add()
	{
		echo 'add';
	}
};
