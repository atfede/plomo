<?php // include_once './master/conexion.php';    ?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <?php // include_once './master/head.php'; ?>
        <?php include_once './application/views/master/head.php'; ?>
    </head>
    <body>

        <div class="wrapper">
            <div class="box">
                <div class="row row-offcanvas row-offcanvas-left">

                    <?php // include_once 'master/sidebar.php'; ?>
                    <?php include_once './application/views/master/sidebar.php'; ?>

                    <!-- main right col -->
                    <div class="column col-sm-10 col-xs-11" id="main">

                        <?php //include_once 'master/top-nav.php'; ?>
                        <?php include_once './application/views/master/top-nav.php'; ?>

                        <div class="padding">
                            <div class="full col-sm-9">

                                <!-- content -->                      
                                <div class="row">

                                    <!-- main col left --> 
                                    <div class="col-sm-8">

                                        <?php
                                        $conexion = mysqli_connect("localhost", "1018246", "qwerpoiu1", "1018246");

                                        mysqli_set_charset($conexion, "utf8");

                                        $results = mysqli_query($conexion, "SELECT u.name, u.email, u.phone, u.picture, a.description, a.date FROM usuarios u, avisos a WHERE u.id = a.id_user");

                                        
                                        while ($fila = mysqli_fetch_array($results)) {
                                            ?>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <span style='font-size: 18px;'><?php echo $fila["name"] ?></span><span class="pull-right"><?php echo date('d/m/Y', strtotime($fila['date'])); ?></span>
                                                </div>
                                                <!--<img src="<?php // echo $row["picture"]           ?>" class="img-circle pull-right">-->

                                                <img src="img/profile/pro1.jpg" class="img-circle pull-right">

                                                <div class="panel-body"><?php echo $fila["description"] ?></div>
                                                <div class="panel-body"><?php echo "Email: " . $fila["email"] . " | Tel: " . $fila["phone"] ?></div>

                                            </div>   

                                        <?php } ?>


                                    </div><!-- /col-9 -->

                                    <div class="col-sm-4">
                                        <div class="well"> 
                                            <form class="form-horizontal" role="form">
                                                <h4>Publica tu anuncio</h4>
                                                <div class="form-group" style="padding:14px;">
                                                    <textarea class="form-control" placeholder="Update your status"></textarea>
                                                </div>
                                                <button class="btn btn-primary pull-right" type="button">Post</button><ul class="list-inline"><li><a href=""><i class="glyphicon glyphicon-upload"></i></a></li><li><a href=""><i class="glyphicon glyphicon-camera"></i></a></li><li><a href=""><i class="glyphicon glyphicon-map-marker"></i></a></li></ul>
                                            </form>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading"><a href="#" class="pull-right">View all</a> <h4>Encuesta</h4></div>
                                            <div class="panel-body">
                                                <div class="list-group">
                                                    <a href="http://bootply.com/tagged/modal" class="list-group-item">Modal / Dialog</a>
                                                    <a href="http://bootply.com/tagged/datetime" class="list-group-item">Datetime Examples</a>
                                                    <a href="http://bootply.com/tagged/datatable" class="list-group-item">Data Grids</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /padding -->
                            </div>
                            <!-- /main -->

                        </div>
                    </div>
                </div>


                <!--post modal-->
                <div id="postModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                Update Status
                            </div>
                            <div class="modal-body">
                                <form class="form center-block">
                                    <div class="form-group">
                                        <textarea class="form-control input-lg" autofocus="" placeholder="What do you want to share?"></textarea>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <div>
                                    <button class="btn btn-primary btn-sm" data-dismiss="modal" aria-hidden="true">Post</button>
                                    <ul class="pull-left list-inline"><li><a href=""><i class="glyphicon glyphicon-upload"></i></a></li><li><a href=""><i class="glyphicon glyphicon-camera"></i></a></li><li><a href=""><i class="glyphicon glyphicon-map-marker"></i></a></li></ul>
                                </div>	
                            </div>
                        </div>
                    </div>
                </div>
                <!-- script references -->
                <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<!--                <script src="js/bootstrap.min.js"></script>
                <script src="js/scripts.js"></script>-->
                </body>
                </html>