<?php require_once('system/bootstrap.php'); ?>
<div class="col-md-12">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div class="d-flex align-items-center">
            <a href="admin.php?page=operation" class="btn btn-primary mr-3"><i class="fas fa-arrow-left text-white"></i></a>
            <h1 class="h3 mb-0 text-gray-800">Tambah Pengguna</h1>
        </div>
    </div>
</div>
<div class="col-md-12">
    <div class="container-fluid px-0">
        <form action="progress.php?user=0&action=create" method="post">
            <input type="hidden" name="user" value="create">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="container-fluid px-0">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Nama</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" id="username" name="username">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid px-0">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>