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
                        <th scope="col">Nama</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $number = 1;
                    foreach ($users as $user) : ?>
                        <tr>
                            <th scope="row"><?php echo $number ?></th>
                            <td><?php echo $user->name; ?></td>
                            <td><?php echo $user->username; ?></td>
                            <td><?php echo $user->email; ?></td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <a href="admin.php?page=action&data=update_user&id=<?php echo $user->id; ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                    <a href="admin.php?page=view_user&id=<?php echo $user->id; ?>" class="btn btn-warning mx-2"><i class="fas fa-eye"></i></a>
                                    <form action="progress.php?user=<?php echo $user->id; ?>&action=delete" method="post" id="deleteForm<?php echo $user->id; ?>">
                                        <input type="hidden" name="user" value="delete">
                                        <input type="hidden" name="id" value="<?php echo $user->id; ?>">
                                        <button type="button" class="btn btn-danger delete-data-modal" data-toggle="modal" data-target="#deleteDataModal" data-id="<?php echo $user->id; ?>"><i class="fas fa-trash"></i></button>
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