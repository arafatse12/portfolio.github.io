<?php
include_once '../includes/header.php';
include_once '../../../vendor/autoload.php';
use App\admin\About\About;
$object = new About();
$user=$object->index();
?>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Page Header
                <small>Optional description</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                <li class="active">Here</li>
            </ol>
        </section>
        <section class="content">

            <div class="row">
                <div class="col-md-4">

                    <!-- Profile Image -->
                    <div class="box box-primary">
                        <div class="box-body box-profile">
                            <img class="profile-user-img img-responsive img-circle" src="assets/admin/dist/img/pic.jpg" alt="User profile picture">

                            <h3 class="profile-username text-center"><?= $user['name']?> </h3>
                            <p class="text-muted text-center">Software Engineer</p>

                            <ul class="list-group list-group-unbordered">
                                <li class="list-group-item">
                                    <b>Age:</b> <a class="pull-right"><?= $user['age']?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Phone:</b> <a class="pull-right"><?= $user['phone']?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Email:</b> <a class="pull-right"><?= $user['email']?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Address:</b> <a class="pull-right"><?= $user['address']?></a>
                                </li>
                            </ul>

                            <a href="view/admin/about/create.php" class="btn btn-primary btn-block"><b>Update Profile</b></a>
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>

                <!-- /.col -->
                <div class="col-md-8">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">About Me</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

                            <p class="text-muted">
                                B.S. in Computer Science and Engineering from the University of BUBT
                            </p>

                            <hr>

                            <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

                            <p class="text-muted">Rampura ,Dhaha</p>

                            <hr>

                            <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>

                            <p>
                                <span class="label label-danger">HTML5</span>
                                <span class="label label-success">CSS3</span>
                                <span class="label label-primary">BOOTSTRAP</span>
                                <span class="label label-info">OOP-PHP</span>
                                <span class="label label-warning">LARAVEL</span>
                            </p>

                            <hr>

                            <strong><i class="fa fa-file-text-o margin-r-5"></i>My Story</strong>

                            <p>Hello, I am a Web Designer & Developer Savvy Techmart,Dhaka. I hold a B.SC in CSE from BUBT.
                            </p>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>


                </div>
            <!-- /.row -->

        </section>
    </div>

<?php
include_once '../includes/footer.php';
?>