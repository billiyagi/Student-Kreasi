<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-text mx-3">Billy Kreasi</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?php echo menuActive('dashboard') ?>">
        <a class="nav-link" href="admin.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <li class="nav-item <?php echo menuActive('operation') ?>">
        <a class="nav-link" href="admin.php?page=operation">
            <i class="fas fa-fw fa-suitcase"></i>
            <span>Operation</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Kuliah
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item <?php echo menuActive('view_assignment') ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-folder"></i>
            <span>Tugas</span>
        </a>
        <div id="collapseTwo" class="collapse <?php echo subMenuActive('view_assignment') ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <!-- <h6 class="collapse-header">Custom Components:</h6> -->
                <?php foreach ($options['assignments'] as $assignment) : ?>
                    <a class="collapse-item" href="<?php echo 'admin.php?page=view_assignment&id=' . $assignment->id ?>"><?php echo $assignment->title ?></a>
                <?php endforeach; ?>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-tools"></i>
            <span>Praktikum</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <!-- <h6 class="collapse-header">Custom Utilities:</h6> -->
                <a class="collapse-item" href="#">Pertemuan 1</a>
                <a class="collapse-item" href="#">Pertemuan 2</a>
                <a class="collapse-item" href="#">Pertemuan 3</a>
                <a class="collapse-item" href="#">Pertemuan 4</a>
            </div>
        </div>
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->