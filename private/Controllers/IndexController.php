<?php
namespace Web\Concert\Controllers;

use Web\Concert\Models\ShowsModel;
use Web\Engine\Controller;

class IndexController extends Controller{
    private $template = 'template_view.php';
    private $shows_model;
    function __construct()
    {
        $this->shows_model = new ShowsModel();
    }

    function indexAction()
    {
        if(isset($_POST[''])) {

        } else {

        $title = 'Главная';
        $view_filename = 'index_view.php';
        $shows = $this->shows_model->getShows(3);
        return $this->generateResponse($view_filename, $this->template,
            [
                'title' => $title,
                'shows' => $shows
            ]);
        }
    }

}