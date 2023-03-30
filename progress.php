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

        // Periksa tombol submit form
        if (isset($_POST['submit'])) {

            $assignmentStmtDelete = $db->query('DELETE FROM assignment WHERE id=?');
            $assignmentStmtDelete->bindParam(1, $antiXSS->xss_clean($_POST['id']));

            if ($assignmentStmtDelete->execute()) {
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

        // Periksa tombol submit form
        if (isset($_POST['submit'])) {
            $id = $_POST['id'];
            $title = validation($antiXSS->xss_clean($_POST['title']), false);
            $subject = validation($antiXSS->xss_clean($_POST['subject']), false);
            $path = validation($antiXSS->xss_clean($_POST['path']), false);

            // Validation
            if (($title && $subject && $path) == false) {
                setFlashMessage('Tugas gagal ditambahkan, mohon periksa semua kolom.', 'danger');
                header('Location: admin.php?page=operation&sub=assignment');
                die();
            }

            // Binding request parameters
            $assignmentStmtUpdate = $db->query('UPDATE assignment SET title=:assignmentTitle, subject=:assignmentSubject, path=:assignmentPath WHERE id=:id');
            $assignmentStmtUpdate->bindParam(':id', $id);
            $assignmentStmtUpdate->bindParam(':assignmentTitle', $title);
            $assignmentStmtUpdate->bindParam(':assignmentSubject', $subject);
            $assignmentStmtUpdate->bindParam(':assignmentPath', $path);


            // Feedback 
            if ($assignmentStmtUpdate->execute()) {
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

        // Periksa tombol submit form
        if (isset($_POST['submit'])) {
            $title = validation($antiXSS->xss_clean($_POST['title']), false);
            $subject = validation($antiXSS->xss_clean($_POST['subject']), false);
            $path = validation($antiXSS->xss_clean($_POST['path']), false);

            // Validation
            if (($title && $subject && $path) == false) {
                setFlashMessage('Tugas gagal ditambahkan, mohon periksa semua kolom.', 'danger');
                header('Location: admin.php?page=operation&sub=assignment');
                die();
            }


            // Binding request parameters
            $assignmentStmtCreate = $db->query("INSERT INTO assignment (title,subject,path) VALUES (:assignmentTitle,:assignmentSubject,:assignmentPath)");
            $assignmentStmtCreate->bindParam(':assignmentTitle', $title);
            $assignmentStmtCreate->bindParam(':assignmentSubject', $subject);
            $assignmentStmtCreate->bindParam(':assignmentPath', $path);


            // Feedback
            if ($assignmentStmtCreate->execute()) {
                setFlashMessage('Tugas berhasil ditambahkan', 'success');
                header('Location: admin.php?page=operation&sub=assignment');
            } else {
                setFlashMessage('Tugas gagal ditambahkan', 'danger');
                header('Location: admin.php?page=operation&sub=assignment');
            }
        }
    }
}


/** 
 * POST Request Method Users
 */

if (isset($_POST['user'])) {

    /** 
     * User Delete
     */
    if ($_POST['user'] == 'delete') {

        // Periksa tombol submit form
        if (isset($_POST['submit'])) {

            // Binding request parameters
            $userStmtDelete = $db->query("DELETE FROM users WHERE id=:id");
            $userStmtDelete->bindParam(':id', $antiXSS->xss_clean($_POST['id']));

            /** 
             * * Periksa user yang akan dihapus
             * Cegah ketika pengguna ingin menghapus pengguna 
             * saat ini yang sedang ia gunakan untuk login
             */
            if (getUserSession()['id'] != $_POST['id']) {
                if ($userStmtDelete->execute()) {
                    setFlashMessage('Pengguna berhasil dihapus', 'success');
                    header('Location: admin.php?page=operation&sub=users');
                } else {
                    setFlashMessage('Pengguna gagal dihapus', 'danger');
                    header('Location: admin.php?page=operation&sub=users');
                }
            } else {
                setFlashMessage('Pengguna gagal dihapus', 'danger');
                header('Location: admin.php?page=operation&sub=users');
            }
        }


        /** 
         * User Update
         */
    } elseif ($_POST['user'] == 'update') {
        $id = $antiXSS->xss_clean($_POST['id']);
        $name = validation($antiXSS->xss_clean($_POST['name']), false);
        $email = validation($antiXSS->xss_clean($_POST['email']), false);
        $password = validation($antiXSS->xss_clean($_POST['password']), false);


        // Validation
        if (($name && $email) == false) {
            setFlashMessage('Pengguna gagal diubah, mohon periksa semua kolom', 'danger');
            header('Location: admin.php?page=operation&sub=users');
            die();
        }

        /** 
         * * Kondisi ketika password pengguna ingin diganti
         * Jika pengguna tidak mengganti password maka gunakan password lama
         * namun jika password diganti buat password hash baru
         */
        if ($password == false) {
            $user = $db->query('SELECT * FROM users WHERE id =' . $id);
            $user->execute();
            $user = $user->fetchObject();

            // Simpan kembali password lama
            $password = $user->password;
        } else {
            // Buat password baru
            $password = password_hash($password, PASSWORD_DEFAULT);
        }

        // Binding request parameters
        $userStmtUpdate = $db->query('UPDATE users SET name=:userName, email=:userEmail, password=:userPassword WHERE id=:id');
        $userStmtUpdate->bindParam(':id', $id);
        $userStmtUpdate->bindParam(':userName', $name);
        $userStmtUpdate->bindParam(':userEmail', $email);
        $userStmtUpdate->bindParam(':userPassword', $password);

        // Feedback
        if ($userStmtUpdate->execute()) {
            setFlashMessage('Pengguna berhasil diubah', 'success');
            header('Location: admin.php?page=operation&sub=users');
        } else {
            setFlashMessage('Pengguna gagal diubah', 'danger');
            header('Location: admin.php?page=operation&sub=users');
        }


        /** 
         * User Create
         */
    } elseif ($_POST['user'] == 'create') {

        // Periksa tombol submit form
        if (isset($_POST['submit'])) {

            // User data input
            $name = validation($antiXSS->xss_clean($_POST['name']), false);
            $username = validation($antiXSS->xss_clean($_POST['username']), false);
            $email = validation($antiXSS->xss_clean($_POST['email']), false);
            $password = validation(htmlspecialchars($_POST['password']), false);

            // Validation
            if (($name && $username && $email && $password) == false) {
                setFlashMessage('Pengguna gagal ditambahkan, mohon periksa semua kolom', 'danger');
                header('Location: admin.php?page=operation&sub=users');
                die();
            }

            // Passwrod hashing
            $password = password_hash($password, PASSWORD_DEFAULT);

            // Binding request parameters
            $userStmtCreate = $db->query("INSERT INTO users (name,username,email,password) VALUES (:userName,:userUsername,:userEmail,:userPassword)");
            $userStmtCreate->bindParam(':userName', $name);
            $userStmtCreate->bindParam(':userUsername', $username);
            $userStmtCreate->bindParam(':userEmail', $email);
            $userStmtCreate->bindParam(':userPassword', $password);

            // Feedback
            if ($userStmtCreate->execute()) {
                setFlashMessage('Pengguna berhasil ditambahkan', 'success');
                header('Location: admin.php?page=operation&sub=users');
            } else {
                setFlashMessage('Pengguna gagal ditambahkan', 'success');
                header('Location: admin.php?page=operation&sub=users');
            }
        }
    }
}
