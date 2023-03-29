<?php

require_once('system/bootstrap.php');

/** 
 * Assignment Action
 */
if (isset($_GET['assignment'])) {
    $assignmentId = $_GET['assignment'];

    if (isset($_GET['action']) && $assignmentId == 0) {
        if ($_GET['action'] == 'create') {


            /** 
             * Menghapus data assignment
             */
        }
    }



    /** 
     * Practice Acion
     */
} else {
    header('Location:admin.php');
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
            $assignmentStmt->bindParam(1, $_POST['id']);

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
            $title = validation($_POST['title'], false);
            $subject = validation($_POST['subject'], false);
            $path = validation($_POST['path'], false);

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
            $title = validation($_POST['title'], false);
            $subject = validation($_POST['subject'], false);
            $path = validation($_POST['path'], false);

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
