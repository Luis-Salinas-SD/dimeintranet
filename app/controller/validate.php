<?php
//! Validacion ambiente local
if (isset($_POST['email']) and isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (($email === 'luis@dime.pro') and ($password === 'impresora1')) {
        header('Location:  https://dime-intranet/app/views/pages/dashboard.php');
        exit;
    } elseif (($email === 'roberto@dime.pro') and ($password === 'impresora2')) {
        header('Location:  https://dime-intranet/app/views/pages/elegir.php');
        exit;
    } else {
        echo 'Datos incorrectos';
    }
}

//! Validacion para el servidor
/*
if (isset($_POST['email']) and isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (($email === 'luis@dime.pro') and ($password === 'impresora1')
    ) {
        header('Location:  https://suwebexpress.com.mx/dimetest/app/views/pages/dashboard.php');
        exit;
    } elseif (($email === 'roberto@dime.pro') and ($password === 'impresora2')) {
        header('Location:  https://suwebexpress.com.mx/dimetest/app/views/pages/elegir.php');
        exit;
    } else {
        echo 'Datos incorrectos';
    }
}
*/