<?php
require_once('system/bootstrap.php');


/** 
 * Login Request
 */

if (isset($_POST['login'])) {

    // User Login Credentials
    $usernameUserLogin = $antiXSS->xss_clean($_POST['username']);
    $passwordUserLogin = $antiXSS->xss_clean($_POST['password']);

    // Temukan Akun pengguna
    $user = $db->query("SELECT * FROM users WHERE username=:usernameLogin");
    $user->bindParam(':usernameLogin', $usernameUserLogin);
    $user->execute();
    $userLogin = $user->fetch(PDO::FETCH_OBJ);

    // Feedback ketika pengguna tidak ditemukan
    if ($userLogin == false) {
        setFlashMessage('Username / password salah', 'danger');
        header('Location:index.php');
        die();
    }

    // Periksa password dan alihkan ketika password pengguna salah
    if (password_verify($passwordUserLogin, $userLogin->password)) {
        // Buat session pengguna
        setUserSession($userLogin);
        header('Location:admin.php');
    } else {
        setFlashMessage('Username / password salah', 'danger');
        header('Location:index.php');
    }
} elseif (isset($_GET['session']) && $_GET['session'] == 'logout') {
    removeUserSession();
    header('Location:index.php');
}


/** 
 * POST Request Method Assignments
 */

if (isset($_POST['assignment'])) {
    /** 
     * Assignment Delete data
     */
    if ($_POST['assignment'] == 'delete') {
        if (isset($_POST['submit'])) {

            $assignmentStmt = $db->query('DELETE FROM assignment WHERE id=?');
            $assignmentStmt->bindParam(1, $antiXSS->xss_clean($_POST['id']));

            if ($assignmentStmt->execute()) {
                setFlashMessage('Tugas berhasil dihapus', 'success');
                header('Location: admin.php?page=operation&sub=assignment');
            } else {
                setFlashMessage('Tugas gagal dihapus', 'danger');
                header('Location: admin.php?page=operation&sub=assignment');
            }
        }

        /** 
         * Assignment Update data
         */
    } elseif ($_POST['assignment'] == 'update') {
        if (isset($_POST['submit'])) {
            $id = $_POST['id'];
            $title = validation($antiXSS->xss_clean($_POST['title']), false);
            $subject = validation($antiXSS->xss_clean($_POST['subject']), false);
            $path = validation($antiXSS->xss_clean($_POST['path']), false);

            // Validation
            if (($title && $subject && $path) == false) {
                setFlashMessage('Tugas gagal ditambahkan, mohon periksa semua kolom.', 'danger');
                header('Location: admin.php?page=operation&sub=assignment');
            }

            // Binding request parameters
            $assignmentStmt = $db->query('UPDATE assignment SET title=:assignmentTitle, subject=:assignmentSubject, path=:assignmentPath WHERE id=:id');
            $assignmentStmt->bindParam(':id', $id);
            $assignmentStmt->bindParam(':assignmentTitle', $title);
            $assignmentStmt->bindParam(':assignmentSubject', $subject);
            $assignmentStmt->bindParam(':assignmentPath', $path);


            // Feedback 
            if ($assignmentStmt->execute()) {
                setFlashMessage('Tugas berhasil diperbarui', 'success');
                header('Location: admin.php?page=operation&sub=assignment');
            } else {
                setFlashMessage('Tugas gagal diperbarui', 'danger');
                header('Location: admin.php?page=operation&sub=assignment');
            }
        }

        /** 
         * Assignment Create data
         */
    } else if ($_POST['assignment'] == 'create') {
        if (isset($_POST['submit'])) {
            $title = validation($antiXSS->xss_clean($_POST['title']), false);
            $subject = validation($antiXSS->xss_clean($_POST['subject']), false);
            $path = validation($antiXSS->xss_clean($_POST['path']), false);

            // Validation
            if (($title && $subject && $path) == false) {
                setFlashMessage('Tugas gagal ditambahkan, mohon periksa semua kolom.', 'danger');
                header('Location: admin.php?page=operation&sub=assignment');
            }


            // Binding request parameters
            $assignmentStmt = $db->query("INSERT INTO assignment (title,subject,path) VALUES (:assignmentTitle,:assignmentSubject,:assignmentPath)");
            $assignmentStmt->bindParam(':assignmentTitle', $title);
            $assignmentStmt->bindParam(':assignmentSubject', $subject);
            $assignmentStmt->bindParam(':assignmentPath', $path);


            // Feedback
            if ($assignmentStmt->execute()) {
                setFlashMessage('Tugas berhasil ditambahkan', 'success');
                header('Location: admin.php?page=operation&sub=assignment');
            } else {
                setFlashMessage('Tugas gagal ditambahkan', 'danger');
                header('Location: admin.php?page=operation&sub=assignment');
            }
        }
    }
}
