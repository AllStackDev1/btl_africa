<nav class="navbar navbar-default top-navbar" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="dashboard">
            <img src="<?php echo BASE_URL?>src/assets/images/logo.png" alt="BTL - Africa">
        </a>
    </div>

    <ul class="nav navbar-top-links navbar-right">

        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                Welcome, <?php echo  $_SESSION['name'];?> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                </li>
                <li class="divider"></li>
                <li><a href="logoutUser.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
</nav>
<!--/. NAV TOP  -->
<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">

            <li>
                <a class="<?php echo getActiveRoute('dashboard'); ?>" href="dashboard"><i class="fa fa-dashboard"></i> Dashboard</a>
            </li>
            <li>
                <a class="<?php echo getActiveRoute('add-image'); ?>" href="add-image"><i class="fa fa-qrcode"></i>Add Image</a>
            </li>
            <li>
                <a class="<?php echo getActiveRoute('add-admin'); ?>" href="add-admin"><i class="fa fa-user-plus"></i> Add Admin</a>
            </li>
            <li>
                <a class="<?php echo getActiveRoute('add-team-member'); ?>" href="add-team-member"><i class="fa fa-user-plus"></i> Add Team Member</a>
            </li>   
        </ul>

    </div>

</nav>