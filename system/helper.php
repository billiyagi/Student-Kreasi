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
