<?php
namespace Web\Concert\Controllers;

use Web\Concert\Models\ShowsModel;
use Web\Engine\Controller;

class BlogController extends Controller
{
    private $template = 'template_view.php';
    

    function blogAction()
    {
        $title = 'Блог';
        $view_filename = 'blog_view.php';
        return $this->generateResponse($view_filename, $this->template,
            [
                'title' => $title,
            ]);
    }

}