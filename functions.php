<?php
function getUsersList()
{
    $users_arr = [
        'admin' => [
            'password' => 'admin',
            'name' => 'Vasiliy'
        ],
        'user' => [
            'password' => 'user',
        ],
    ];
    return $users_arr;
}

function existsUser($login)
{
    $users_arr = getUsersList();
    if (isset($users_arr[$login])) {
        return true;
    }
    return false;
}

function сheckPassword($login, $password)
{
    $users_arr = getUsersList();
    if ($users_arr[$login]['password'] === $password) {
        return true;
    }
    return false;
}

function getCurrentUser($login)
{
    $users_arr = getUsersList();
    if ($users_arr[$login]['name']) {
        $name = $users_arr[$login]['name'];
        setcookie("name", $name);
        return $name;
    }
    return null;
}

function checkUser($login, $password)
{
    if ($login) {
        if (existsUser($login)) {
            if (сheckPassword($login, $password)) {
                 getCurrentUser($login);
                return true;
            }
        }
    }
    return false;
}