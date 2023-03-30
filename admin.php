<?php
require_once('system/bootstrap.php');
require_once('system/operator.php');
?>

<?php template('admin/header', $pageData); ?>

<!-- Page Wrapper -->
<div id="wrapper">
    <?php template('admin/menu', ['assignments' => $assignments]); ?>



    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <?php template('admin/topbar', ['user' => getUserSession()]); ?>
            <?php if (!isset($_GET['page'])) : ?>
                <?php require_once('pages/dashboard/index.php'); ?>
            <?php else : ?>
                <div class="container-fluid">
                    <?php echo getFlashMessage(); ?>
                    <div class="row">

                        <!-- Operation Page -->
                        <?php if ($_GET['page'] == 'operation') : ?>

                            <!-- Assignment -->
                            <?php if (isset($_GET['sub']) && $_GET['sub'] == 'assignment') : ?>
                                <?php require_once('pages/assignment/index.php'); ?>

                                <!-- Practice -->
                            <?php elseif (isset($_GET['sub']) && $_GET['sub'] == 'practice') : ?>
                                <div class="col-md-12">
                                    <h1>Practice Page</h1>
                                </div>

                                <!-- Clouds -->
                            <?php elseif (isset($_GET['sub']) && $_GET['sub'] == 'cloud') : ?>
                                <div class="col-md-12">
                                    <h1>Cloud Page</h1>
                                </div>

                                <!-- Users Pages -->
                            <?php elseif (isset($_GET['sub']) && $_GET['sub'] == 'users') : ?>
                                <?php require_once('pages/users/index.php') ?>
                            <?php else : ?>
                                <div class="col-md-4">
                                    <a href="admin.php?page=operation&sub=assignment" class="card border-left-primary shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-lg font-weight-bold text-primary text-uppercase mb-1">
                                                        Tugas
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-folder fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="admin.php?page=operation&sub=practice" class="card border-left-secondary shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-lg font-weight-bold text-secondary text-uppercase mb-1">
                                                        Praktikum
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-tools fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="admin.php?page=operation&sub=cloud" class="card border-left-success shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-lg font-weight-bold text-success text-uppercase mb-1">
                                                        Cloud
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-cloud fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4 mt-4">
                                    <a href="admin.php?page=operation&sub=users" class="card border-left-info shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-lg font-weight-bold text-info text-uppercase mb-1">
                                                        Users
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-users fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php endif; ?>


                            <!-- Action Data -->
                        <?php elseif ($_GET['page'] == 'action') : ?>

                            <!-- Create Assignment Page -->
                            <?php if ($_GET['data'] == 'create_assignment') : ?>
                                <?php require_once('pages/assignment/create.php'); ?>

                                <!-- Update Assignment Page -->
                            <?php elseif ($_GET['data'] == 'update_assignment') : ?>
                                <?php require_once('pages/assignment/update.php'); ?>


                                <!-- Create User Page -->
                            <?php elseif ($_GET['data'] == 'create_user') : ?>
                                <?php require_once('pages/users/create.php'); ?>

                                <!-- Update User Page -->
                            <?php elseif ($_GET['data'] == 'update_user') : ?>
                                <?php require_once('pages/users/update.php'); ?>

                            <?php endif; ?>

                            <!-- View Assignment Page -->
                        <?php elseif ($_GET['page'] == 'view_assignment') : ?>
                            <div class="col-md-12">
                                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                    <div class="d-flex align-items-center">
                                        <a href="admin.php?page=operation&sub=assignment" class="btn btn-primary mr-3"><i class="fas fa-arrow-left text-white"></i></a>
                                        <h1 class="h3 mb-0 text-gray-800"><?php echo $assignmentViewProject->title ?></h1>
                                    </div>
                                </div>
                            </div>
                            <iframe src="sources/<?php echo $assignmentViewProject->path ?>" frameborder="0" style="width:100%;height:100vh"></iframe>
                        <?php endif; ?>
                    </div>
                </div>

            <?php endif; ?>
        </div>
        <!-- End of Main Content -->



        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <!-- Do not remove this Copyright -->
                    <span>Created by <a href="https://github.com/billiyagi">Febry Billiyagi</a> Copyright &copy; Billy System <?php echo date('Y') ?></span>
                    <!-- Do not remove this Copyright -->
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->



<!-- Confirmation modal -->
<div class="modal fade" id="deleteDataModal" tabindex="-1" role="dialog" aria-labelledby="deleteDataModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content border-0 bg-transparent">
            <div class="modal-body bg-light rounded-top">
                <h5 class="text-center">Hapus data? data tidak akan bisa dipulihkan kembali.</h5>
            </div>
            <div class="btn-group" role="group">
                <button class="btn btn-secondary w-100" type="button" data-dismiss="modal" style="border-bottom-left-radius: 5px;border-top-left-radius: 0px;">Tidak</button>
                <button type="submit" name="submit" class="btn btn-primary w-100 font-weight-bold" id="deleteDataButton" form="" style="border-bottom-right-radius: 5px;border-top-right-radius: 0px;">Hapus</button>
            </div>
        </div>
    </div>
</div>
<?php template('admin/footer'); ?>