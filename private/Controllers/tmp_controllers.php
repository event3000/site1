<?php

// ГЛАВНАЯ
function indexAction() {
    $title = 'Главная';
    $view_filename = 'index_view.php'; // вид
    generateResponse($view_filename, [
        'title' => $title
    ]);
}

// БЛОГ
function blogAction() {
    $title = 'Блог';
    $view_filename = 'blog_view.php'; // вид
    generateResponse($view_filename, [
        'title' => $title
    ]);
}

// МАГАЗИН
function shopAction() {
    $title = 'Магазин';
    $view_filename = 'shop_view.php'; // вид
    generateResponse($view_filename, [
        'title' => $title
    ]);
}

// КОНТАКТЫ
function contAction() {
    $title = 'Контакты';
    $view_filename = 'cont_view.php'; // вид
    generateResponse($view_filename, [
        'title' => $title
    ]);
}







function showsAction() {
    include "../private/Models/shows_model.php";
    $title = 'Афиша';
    $view_filename = 'shows_view.php';
    $shows = getAllShows();
    generateResponse($view_filename, [
        'title' => $title,
        'shows' => $shows
    ]);
}

function showAction() {
    include "../private/Models/shows_model.php";
    $get = $_GET;
    if (isset($get['id'])) {
        // получаем массив с show по id из GET запроса
        $show_by_id = getShowById($get['id']);
        $title = $show_by_id['title'];
        $view_filename = 'show_view.php';
        generateResponse($view_filename, [
            'title' => $title,
            'show' => $show_by_id
        ]);
    }
}

function account_authAction() {
    include "../private/Models/account_model.php";
    include "../private/Models/validator_model.php";
    $post = $_POST;
    $user_data = check_array_data(json_decode($post['auth_data'], true));
    $all_users = getAllUsers();

    foreach ($all_users as $value) {
        if ($value['login'] == $user_data['login']) {
            if ($value['pwd'] == $user_data['pwd']) {
                $_SESSION['auth'] = true;
                $_SESSION['login'] = $user_data['login'];
//                $_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
                echo $value['state'];
                return true;
            }
            echo 'pwd is wrong';
            return false;
        }
    }
    echo 'user not found';
    return false;
}

function generateResponse($view, $data=[]) {
    if(is_array($data)) {
        extract($data);
    }
    require_once "../private/Views/template_view.php";
}