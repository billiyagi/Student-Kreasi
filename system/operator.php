<?php

/** 
 * Assignment Data
 */

// All assignment
$assignmentAll = $db->query('SELECT * FROM assignment');
$assignmentAll->execute();
$assignments = $assignmentAll->fetchAll(PDO::FETCH_OBJ);

// Single Assignment
if (isset($_GET['data']) && $_GET['data'] == 'update_assignment') {
    if (isset($_GET['id'])) {
        $assignmentSingle = $db->query('SELECT * FROM assignment WHERE id = ?');
        $assignmentSingle->execute([$_GET['id']]);
        $assignment = $assignmentSingle->fetchObject();
    }
}

// View Assignment Project
if ((isset($_GET['page']) && $_GET['page'] == 'view_assignment') && isset($_GET['id'])) {
    // Cari Id
    $assignmentView = $db->query('SELECT * FROM assignment WHERE id = :idViewAssignment');
    $assignmentView->bindParam('idViewAssignment', $_GET['id']);
    $assignmentView->execute();
    $assignmentViewProject = $assignmentView->fetchObject();
}



/** 
 * Users Data
 */

// All Users
$usersAll = $db->query("SELECT * FROM users");
$usersAll->execute();
$users = $usersAll->fetchAll(PDO::FETCH_OBJ);

// Single user
if (isset($_GET['data']) && $_GET['data'] == 'update_user') {
    if (isset($_GET['id'])) {
        $userSingle = $db->query('SELECT * FROM users WHERE id = ?');
        $userSingle->execute([$_GET['id']]);
        $user = $userSingle->fetchObject();
    }
}

/** 
 * Cek halaman yang di akses
 */
if (!isset($_GET['page'])) {
    $pageData = ['titlePage' => 'Dashboard'];
} else {
    $pageData = ['titlePage' => 'Operation'];
}
