<?php

// функция проверки на пустоту
function has_empt($value) {
    return isset($value) && $value !== "";
}

// макс длина строки
function has_max_length($value, $max) {
    return strlen($value) <= $max;
}


function validate_max_lengths($fields_with_max_lengths) {
    global $errors;
    
    foreach($fields_with_max_lengths as $field => $max) {
        $value = trim($_POST[$field]);
      if (!has_max_length($value, $max)) {
        $errors[$field] = ucfirst($field) . " очень длинный";
      }
    }
}

// функция принимает массив и отдает блок с ошибками
function form_errors($errors=array()) {
    $output = "";
    if (!empty($errors)) {
      $output .= "<div style='color: #f8822e;' >";
      $output .= "<p><strong>Пожалуйста исправьте ошибки:</strong></p>";
      $output .= "<ul>";
      foreach ($errors as $key => $error) {
        $output .= "<li><p>{$error}</p></li>";
      }
      $output .= "</ul>";
      $output .= "</div>";
    }

    return $output;
}


///////////////////

    $errors = array(); // создаем массив для ошибок
    $message = ""; // создаем массив для сообщений
    
    // если была отправка
    if (isset($_POST['submit'])) { 
 
        $username = strip_tags(trim($_POST["username"]));
        $password = strip_tags(trim($_POST["password"]));

        // Валидация
        $fields_required = array("username", "password");
        foreach($fields_required as $field) {
            $value = trim($_POST[$field]);
            if (!has_empt($value)) {
                $errors[$field] = ucfirst($field) . " нужно заполнить";
            }
        }
        
        $fields_with_max_lengths = array("username" => 28, "password" => 8);
        validate_max_lengths($fields_with_max_lengths);
        
        if (empty($errors)) {
            // попытка входа
            if ($username == "ben" && $password == "111") {
                $message = "<p style='color: #f8822e; font-size:20px;'>Вы успешно вошли как '{$username}'</p>";
            } else {
                $message = "<p style='color: #f8822e;'>Имя / пароль не совпадают</p>";
            }
        }

    } else {
        $username = "";
        $message = "Войдите под своим логином:";
    }
?>

