<?php
include_once '../includes/header.php';
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Page Header

        </h1>

    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <form class="form-horizontal" action="view/admin/about/store.php" method= "post" enctype="multipart/form-data" >
                    <div class="box box-info">



                    <div class="box-header with-border">
                        <h3 class="box-title">Horizontal Form</h3>
                    </div>
                    <div class="col-md-6">

                            <div class="box-body">
                                <div class="form-group">
                                    <label for="inputName3" class="col-sm-2 control-label">Name:</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputName3" name="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputAge3" class="col-sm-2 control-label">Age:</label>

                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="inputAge3" name="age" placeholder="Age">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPhone3" class="col-sm-2 control-label">Phone:</label>

                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="inputPhone3" name="phone" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Email:</label>

                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputEmail3" name="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress3" class="col-sm-2 control-label">Address:</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputAddress3" name="address" placeholder="Address">
                                    </div>
                                </div>


                            </div>




                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Textarea</label>
                                <textarea class="form-control" rows="5" name="story" placeholder="Enter ..."></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-3">
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="btn btn-default btn-file">
                                                <i class="fa fa-paperclip"></i> Attachment
                                                <input type="file" name="image">
                                            </div>
                                            <p class="help-block">Your Image</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="btn btn-default btn-file">
                                                <i class="fa fa-paperclip"></i> Attachment
                                                <input type="file" name="resume">
                                            </div>
                                            <p class="help-block">Your CV File</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12">

                            <div class="col-md-4">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-facebook"></i></span>
                                    <input type="url" class="form-control" name="facebook_url" placeholder="https://">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-twitter"></i></span>
                                    <input type="url" class="form-control" name="twitter_url" placeholder="https://">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-linkedin"></i></span>
                                    <input type="url" class="form-control" name="linkedin_url" placeholder="https://">
                                </div>
                            </div></div></div><br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-4">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-google-plus"></i></span>
                                    <input type="url" class="form-control" name="google_plus_url" placeholder="https://">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-pinterest"></i></span>
                                    <input type="url" class="form-control" name="pinterest_url" placeholder="https://">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-skype"></i></span>
                                    <input type="url" class="form-control" name="skype_url" placeholder="https://">
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="box-footer">
                        <button type="submit"  class="btn btn-success pull-right">Success</button>
                        <a  type="submit" href="view/admin/about/index.php" class="btn btn-info pull-right">Profile</a>
                    </div>
                </div>
                </form>
            </div>

    </section>
</div>




<?php
include_once '../includes/footer.php';
?>


