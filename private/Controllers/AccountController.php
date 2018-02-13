<?php
namespace Web\Concert\Controllers;

use Web\Concert\Models\AccountModel;
use Web\Engine\Controller;

class AccountController extends Controller
{
    private $model;
    private $template = 'template_view.php';

    function __construct()
    {
        $this->model = new AccountModel();
    }

    public function registrationAction()
    {
        $post = $_POST;
        return $this->generateAjaxRespons($this->model->regUser(json_decode($post['user_data'], true)));
    }

    public function loginAction()
    {
        $post = $_POST;
        return $this->generateAjaxRespons($this->model->authUser(json_decode($post['auth_data'], true)));
    }

    public function accountAction()
    {
        $title = "Личный кабинет";
        $view_filename = 'account_view.php';
        return $this->generateResponse($view_filename, $this->template,
            [
                'title' => $title
            ]);
    }

}