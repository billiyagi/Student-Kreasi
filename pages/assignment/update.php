<?php require_once('system/bootstrap.php'); ?>
<form action="progress.php?assignment=<?php echo $assignment->id; ?>&action=update" method="post">
    <input type="hidden" name="assignment" value="update">
    <input type="hidden" name="id" value="<?php echo $assignment->id ?>">
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="container-fluid px-0">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="title">Judul Tugas</label>
                            <input type="text" class="form-control" id="title" name="title" value="<?php echo $assignment->title ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="subject">Mata Kuliah</label>
                            <input type="text" class="form-control" id="subject" name="subject" value="<?php echo $assignment->subject; ?>">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="path">Path Project</label>
                <input type="text" class="form-control" id="path" name="path" value="<?php echo $assignment->path; ?>">
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" name="submit" class="btn btn-primary">Ubah</button>
            </div>
        </div>
    </div>
</form>