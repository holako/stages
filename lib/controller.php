<?
/* bits[0] = controller
 * bits[1] = action
 */
class Controller {
	protected $controller;
	protected $model;
	protected $view;
	function __construct($url)
	{
		if (empty($url)) {
			$this->controller = new IndexController();
			$this->view = new View('static_pages/index');
			$this->view->render("");
		} else {
			$bits = explode('/', $url);
			require_once "{$_SERVER['DOCUMENT_ROOT']}/controllers/{$bits[0]}.php";
			$name = 
			require_once "{$_SERVER['DOCUMENT_ROOT']}/models/{$bits[0]}.php";
			$name = "{$bits[0]}Controller";
			$controller = new $name();
			if (isset($bits[1])) {
				if (preg_match('/\d+/', $bits[1]))
					if (isset($bits[2])) {
						if ($bits[2] == 'edit')
							$controller->edit($bits[1]);
					}
					else
						$controller->show($bits[1]);
				else if ($bits[1] == 'new')
					$controller->add();
				else {
					$action = $bits[1];
					$controller->$action();
				}
			}	else
				$controller->index();
		}
	}
};
