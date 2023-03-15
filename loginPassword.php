<?php
if (!empty($_REQUEST['login']) && filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL)
    && !empty($_REQUEST['password']) && !empty($_REQUEST['doublePassword']) && isset($_POST['submit'])) {
    if ($_REQUEST['password'] == $_REQUEST['doublePassword']) {
        if ($_FILES && $_FILES["photo"]["error"] == UPLOAD_ERR_OK) {
            $name = "upload/" . $_FILES["photo"]["name"];
            move_uploaded_file($_FILES["photo"]["tmp_name"], $name);
            echo "Вы успешно зарегистрированы";
        } else {
            echo 'пароли не совпадают';
        }
    }
}