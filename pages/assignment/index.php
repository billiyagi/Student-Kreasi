<?php require_once('system/bootstrap.php'); ?>
<div class="col-md-12">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div class="d-flex align-items-center">
            <a href="admin.php?page=operation" class="btn btn-primary mr-3"><i class="fas fa-arrow-left text-white"></i></a>
            <h1 class="h3 mb-0 text-gray-800">Tugas</h1>
        </div>
        <a href="admin.php?page=action&data=create_assignment" class="d-none d-sm-inline-block btn btn btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50 mr-1"></i> Tambah data</a>
    </div>
</div>
<div class="col-md-12">
    <div class="container-fluid px-0">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Tugas</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Mata Kuliah</th>
                                <th scope="col">Create At</th>
                                <th scope="col" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $number = 1;
                            foreach ($assignments as $assignment) : ?>
                                <tr>
                                    <th scope="row"><?php echo $number ?></th>
                                    <td><?php echo $assignment->title; ?></td>
                                    <td><?php echo $assignment->subject; ?></td>
                                    <td><?php echo $assignment->created_at; ?></td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            <a href="admin.php?page=action&data=update_assignment&id=<?php echo $assignment->id; ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                            <a href="admin.php?page=view_assignment&id=<?php echo $assignment->id; ?>" class="btn btn-warning mx-2"><i class="fas fa-eye"></i></a>
                                            <form action="progress.php?assignment=<?php echo $assignment->id; ?>&action=delete" method="post" id="deleteForm<?php echo $assignment->id; ?>">
                                                <input type="hidden" name="assignment" value="delete">
                                                <input type="hidden" name="id" value="<?php echo $assignment->id; ?>">
                                                <button type="button" class="btn btn-danger delete-data-modal" data-toggle="modal" data-target="#deleteDataModal" data-id="<?php echo $assignment->id; ?>"><i class="fas fa-trash"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            <?php
                                $number++;
                            endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>