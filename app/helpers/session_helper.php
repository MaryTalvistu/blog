<?php
session_start();

function message($name = '', $msg = '', $class = 'alert alert-success')
{
    if (!empty($name)) {
        if (!empty($msg)) {
            if (!empty($_SESSION[$name])) {
                unset($_SESSION[$name]);
            }
            if (!empty($_SESSION[$name . '_class'])) {
                unset($_SESSION[$name . '_class']);
            }
            $_SESSION[$name] = $msg;
            $_SESSION[$name . '_class'] = $class;
        } else if (empty($msg) and !empty($name)) {
            $class = !empty($_SESSION[$name . '_class']) ? $_SESSION[$name . '_class'] : '';
            echo '<div class="' . $class . '" id="msg">' . $_SESSION[$name] . '</div>';
            unset($_SESSION[$name]);
            unset($_SESSION[$name . '_class']);
        }
    }
}