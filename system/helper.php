<?php

function template($fileName, $options = array())
{
    $options;
    return require_once('template/' . $fileName . '.php');
}

function menuActive($menu)
{
    if (isset($_GET['page'])) {
        if ($_GET['page'] == $menu) {
            return 'active';
        }
    } elseif ($menu == 'dashboard') {
        return 'active';
    }
}
function subMenuActive($menu)
{
    if (isset($_GET['page'])) {
        if ($_GET['page'] == $menu) {
            return 'show';
        }
    } elseif ($menu == 'dashboard') {
        return 'show';
    }
}
function setFlashMessage($message, $status = 'success')
{
    $_SESSION['flash_message'] = ['message' => $message, 'status' => $status];
}

function getFlashMessage()
{
    if (isset($_SESSION['flash_message'])) {
        $flashMessage = $_SESSION['flash_message'];
        unset($_SESSION['flash_message']);
        echo '<div class="alert alert-' . $flashMessage['status'] . ' alert-dismissible fade show" role="alert">
      ' . $flashMessage['message'] . '
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
    }
}


function validation($input, $format = 'empty')
{
    switch ($format) {
        case 'empty':
            return empty($input);
            break;

        default:
            return $input;
            break;
    }
}


function setUserSession($user)
{
    $_SESSION['userKreasi'] = [
        'name'  => $user->name,
        'username'  => $user->username,
        'email'  => $user->email,
        'created_at'  => $user->created_at
    ];
}

function removeUserSession()
{
    unset($_SESSION['userKreasi']);
    session_unset();
    session_destroy();
}

function getUserSession()
{
    if (empty($_SESSION['userKreasi'])) {
        return false;
    } else {
        return $_SESSION['userKreasi'];
    }
}
