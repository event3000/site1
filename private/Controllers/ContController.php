<?php
namespace Web\Concert\Controllers;

use Web\Concert\Models\ShowsModel;
use Web\Engine\Controller;

class ContController extends Controller
{
    private $template = 'template_view.php';
    

    function contAction()
    {
        $title = 'Магазин';
        $view_filename = 'cont_view.php';
        return $this->generateResponse($view_filename, $this->template,
            [
                'title' => $title,
            ]);
    }

}