<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

function login($login, $password)
{
    $users = getUsers();
    foreach ($users as $user)
    {
        if ($user['login'] == $login && $user['password'] == $password)
        {
            unset($user['password']);
            $_SESSION['user'] = $user;
            return true;
        }
    }
    return false;
}
 
function getLoggedUserData()
{
    if (empty($_SESSION['user']))
    {
        return null;
    }
    return $_SESSION['user'];
}

function isAuth()
{
    return getLoggedUserData() !== null;
}

function userName()
{
    if (isAuth())
    {
        return getLoggedUserData()['name'];
    }
    return $_COOKIE['user_name'];
}

function getUsers()
{
    $path = 'user-login.json';
    $fileData = file_get_contents($path);
    $data = json_decode($fileData, true);
    if (!$data)
    {
        return [];
    }
    return $data;
}

function isPost()
{
    return $_SERVER['REQUEST_METHOD'] == 'POST';
}
function gerParam($name)
{
    filter_input(INPUT_POST, $name);
}
function location($path)
{
    header("Location: $path.php");
    die;
}
function logout()
{
    session_destroy();
    location('index');
}