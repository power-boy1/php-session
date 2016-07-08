<?php
/**
 * Created by PhpStorm.
 * User: seryogin
 * Date: 07.07.16
 * Time: 20:35
 */

session_start();
if (!isset($_SESSION['time'])) {
    $_SESSION['time'] = date("H:i:s");
}
echo $_SESSION['time'];