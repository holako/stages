<?
class View {
	function __construct($view)
	{
	}
	function render($view, $edges = true)
	{
		if ($edges)
			require "{$_SERVER['DOCUMENT_ROOT']}/views/shared/_header.php";
		require "{$_SERVER['DOCUMENT_ROOT']}/views/{$view}.php";
	}
};
