<?php
/**
 * Created by PhpStorm.
 * User: seryogin
 * Date: 07.07.16
 * Time: 21:16
 */

session_start();

$_SESSION['test'] = 'car';
$_SESSION['foo'] = 'bmw';

$_SESSION[] = array();
session_destroy();