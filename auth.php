<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Authenticate
{
    public $login = 'taras';
    public $pass = 123;
    public $error = false;

    /**
     * @return bool
     */
    public function isAuth()
    {
        if (isset($_SESSION['is_auth'])) {
            return $_SESSION['is_auth'];
        }
        return false;
    }

    /**
     * @param string $login
     * @param string $pass
     * @return bool
     */
    public function auth($login, $pass)
    {
        if ($login == $this->login && $pass == $this->pass) {
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
            $_SESSION['is_auth'] = true;
            $_SESSION['login'] = $login;
            return true;
        } else {
            $_SESSION['is_auth'] = false;
            $this->error = true;
            return false;
        }
    }

    /**
     * @return string|bool
     */
    public function getLogin()
    {
        if ($this->isAuth()) {
            return $_SESSION['login'];
        }
        return false;
    }

    /**
     * @return void
     */
    public function logOut()
    {
        session_destroy();
    }
}


if (isset($_COOKIE[session_name()])) {
    session_start();
}

$auth = new Authenticate();

if (isset($_POST['login']) && isset($_POST['pass'])) {
    $auth->auth($_POST['login'], $_POST['pass']);
}

if (isset($_GET['log_out'])) {
    if ($_GET['log_out'] == 1) {
        $auth->logOut();
        header('Location: /auth.php');
    }
}
?>

<?php
require_once ('auth-view.phtml');
