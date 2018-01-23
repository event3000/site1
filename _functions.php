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

?>