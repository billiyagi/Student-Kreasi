<?php require_once('system/bootstrap.php'); ?>
<div class="col-md-12">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div class="d-flex align-items-center">
            <a href="admin.php?page=operation&sub=assignment" class="btn btn-primary mr-3"><i class="fas fa-arrow-left text-white"></i></a>
            <h1 class="h3 mb-0 text-gray-800">Ubah data tugas</h1>
        </div>
    </div>
</div>
<div class="col-md-12">
    <div class="container-fluid px-0">
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
                        <button type="submit" name="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>