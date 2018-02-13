<?php
namespace Web\Concert\Controllers;

use Web\Engine\Controller;
use Web\Concert\Models\ShowsModel;

class ShowsController extends Controller
{
    private $template = 'template_view.php';
    private $model;
    function __construct()
    {
        $this->model = new ShowsModel();
    }

    public function showsAction()
    {
        $title = 'Афиша';
        $view_filename = 'shows_view.php';
        $shows = $this->model->getShows();
        return $this->generateResponse($view_filename, $this->template,
            [
                'title' => $title,
                'shows' => $shows
            ]);
    }

    function showAction($id)
    {
        if (isset($id)) {
            // получаем массив с show по id из GET запроса
            $show_by_id = $this->model->getShowById($id);
            $title = $show_by_id['title'];
            $view_filename = 'show_view.php';
            return $this->generateResponse($view_filename, $this->template,
                [
                    'title' => $title,
                    'show' => $show_by_id
                ]);
        }
    }
    function pastshowsAction() {
        $title = 'Архив';
        $view_filename = 'pastshows_view.php';
        $shows = $this->model->getPastShows();
        return $this->generateResponse($view_filename, $this->template,
            [
                'title' => $title,
                'shows' => $shows
            ]);
    }
}
