<?php
namespace Web\Concert\Controllers;

use Web\Concert\Models\ShowsModel;
use Web\Engine\Controller;

class ShopController extends Controller
{
    private $template = 'template_view.php';
    

    function shopAction()
    {
        $title = 'Магазин';
        $view_filename = 'shop_view.php';
        return $this->generateResponse($view_filename, $this->template,
            [
                'title' => $title,
            ]);
    }

}