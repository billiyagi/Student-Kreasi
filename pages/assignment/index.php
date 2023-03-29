<?php require_once('system/bootstrap.php'); ?>
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
                            <td><?= $assignment->title; ?></td>
                            <td><?= $assignment->subject; ?></td>
                            <td><?= $assignment->created_at; ?></td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <a href="admin.php?page=action&data=update_assignment&id=<?= $assignment->id; ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                    <a href="admin.php?page=view_assignment&id=<?= $assignment->id; ?>" class="btn btn-warning mx-2"><i class="fas fa-eye"></i></a>
                                    <form action="progress.php?assignment=<?= $assignment->id; ?>&action=delete" method="post">
                                        <input type="hidden" name="assignment" value="delete">
                                        <input type="hidden" name="id" value="<?= $assignment->id; ?>">
                                        <button type="submit" name="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
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