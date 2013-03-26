<?
class StudentModel extends Model {
	function find($id)
	{
	}
	function findAll()
	{
		$users = [];
		foreach(query('SELECT * FORM students') as $r)
			$users[] = $r;
		return $users;
	}
};
