<?php

/** 
 * @param string $filename Nama file template
 * @param string $options data yang dikirim ke file tujuan
 * 
 * * Menampilkan pecahan template
 */
function template($fileName, $options = array())
{
    $options;
    return require_once('template/' . $fileName . '.php');
}

/** 
 * @param string $menu
 * @return string
 * * Membuat menu aktif dengan menambahkan class css active
 */
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


/** 
 * @param string $menu
 * @return string
 * * Membuat sub menu aktif dengan menambahkan class css active
 */
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


/** 
 * @param string $message Isi pesan untuk notifikasi
 * @param string $status Kondisi pesan notifikasi
 * * Membuat session untuk menyimpan data notifikasi pesan
 */
function setFlashMessage($message, $status = 'success')
{
    $_SESSION['flash_message'] = ['message' => $message, 'status' => $status];
}


/** 
 * * Menampilkan Pesan notification dari session flash message
 */
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


/** 
 * @param string $input Data inputan yang diberikan
 * @param string $format kondisi yang akan dicek untuk data inputan
 * * Memvalidasi data yang masuk dari $input dan memeriksanya sesuai dari $format
 */
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


/** 
 * @param object $user Data full Object pengguna
 * * Membuat session untuk pengguna yang berhasil login
 */
function setUserSession($user)
{
    $_SESSION['userKreasi'] = [
        'id'   => $user->id,
        'name'  => $user->name,
        'username'  => $user->username,
        'email'  => $user->email,
        'created_at'  => $user->created_at
    ];
}



/** 
 * * Menghapus semua session pengguna
 */
function removeUserSession()
{
    unset($_SESSION['userKreasi']);
    session_unset();
    session_destroy();
}


/** 
 * * Menampilkan session pengguna
 * @return void false | User Session
 */
function getUserSession()
{
    if (empty($_SESSION['userKreasi'])) {
        return false;
    } else {
        return $_SESSION['userKreasi'];
    }
}
