<?php
/**
 * Created by PhpStorm.
 * User: seryogin
 * Date: 07.07.16
 * Time: 20:36
 */

//javascript:(function(){document.cookie='PHPSESSID=5e2sroilm4578mos3q424cmbg2;path=/;';window.location.reload();})()

session_start();

if (!isset($_SESSION['time'])) {
    $_SESSION['ua'] = $_SERVER['HTTP_USER_AGENT'];
    $_SESSION['time'] = date("H:i:s");
}

if ($_SESSION['ua'] != $_SERVER['HTTP_USER_AGENT']) {
    die('Wrong browser');
}

echo $_SESSION['time'];