<?
require "{$_SERVER['DOCUMENT_ROOT']}/lib/controller.php";
$app = new Controller(rtrim($_GET['url'], '/'));
?>
