<?php
/**
 * Created by PhpStorm.
 * User: seryogin
 * Date: 07.07.16
 * Time: 22:17
 */

$lifeTime = 0;
session_set_cookie_params($lifeTime, null, null, false);
session_start();



//$lifetime=720;
//session_start();
//setcookie(session_name(),session_id(),time()+$lifetime);