<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <script type="text/javascript">
            var oa = document.createElement('script');
            oa.type = 'text/javascript';
            oa.async = true;
            oa.src = '//proyectofinal.api.oneall.com/socialize/library.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(oa, s);

            /* This is an event */
            var my_on_login_redirect = function (args) {
//                alert("Has iniciado sesi\u00f3n desde " + args.provider.name);

                /* As this is a demo return false to cancel the redirection to the callback_uri */
                //return false;
            };

            /* Initialise the asynchronous queue */
            var _oneall = _oneall || [];

            /* Social Login Example */
            _oneall.push(['social_login', 'set_providers', ['facebook', 'twitter', 'linkedin', 'google', 'yahoo', 'foursquare', 'blogger', 'github']]);
            _oneall.push(['social_login', 'set_grid_sizes', [4, 4]]);
//            _oneall.push(['social_login', 'set_callback_uri', 'http://www.oneall.com/callback/']);
            _oneall.push(['social_login', 'set_callback_uri', 'http://proyectofinal.6te.net/callback_handler.php']);
            _oneall.push(['social_login', 'set_event', 'on_login_redirect', my_on_login_redirect]);
            _oneall.push(['social_login', 'do_render_ui', 'social_login_demo']);
        </script>

        <?php 
//            include_once './application/views/master/head.php';
            $this->load->view('master/head');
        ?>


        <script>
//            $(document).ready($(".badge").val(args.provider.name); );
        </script>
    </head>
    <body>

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Inicio de sesión</h4>
                    </div>
                    <div class="modal-body">
                        <p class="text-center">Inicia sesión con la red social que quieras:</p>
                        <!--The plugin will be embedded into this div-->         
                        <!--<div id="oa_social_login_container" class="col-xs-3 navbar-right"></div>-->
                        <div id="oa_social_login_container" class="social_btn"></div>
                    </div>
                    <div class="modal-footer">
                        <p/>
                        <!--<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>-->
                        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript">
            var _oneall = _oneall || [];
//            _oneall.push(['social_login', 'set_callback_uri', window.location.href]);
            _oneall.push(['social_login', 'set_callback_uri', 'http://proyectofinal.6te.net/callback_handler.php']);
            _oneall.push(['social_login', 'set_providers', ['facebook', 'twitter', 'google']]);
//            _oneall.push(['social_login', 'set_providers', ['facebook', 'google', 'twitter', 'windowslive']]);
//            _oneall.push(['social_login', 'set_custom_css_uri', 'https://secure.oneallcdn.com/css/api/themes/beveled_w35_h35_wc_v1.css']);
            _oneall.push(['social_login', 'set_custom_css_uri', 'https://secure.oneallcdn.com/css/api/themes/beveled_w35_h35_wc_v1.css']);
            _oneall.push(['social_login', 'do_render_ui', 'oa_social_login_container']);
        </script>

        <div class="wrapper">
            <div class="box">
                <div class="row row-offcanvas row-offcanvas-left">

                    <!--sidebar -->
                    <?php 
                        //include_once './application/views/master/sidebar.php';
                    $this->load->view("master/sidebar");
                    ?>
                    <!--sidebar -->

                    <!-- main right col -->
                    <div class="column col-sm-10 col-xs-11 main-div" id="main">

                        <?php include_once './application/views/master/top-nav.php'; ?>

                        <div class="padding">
                            <div class="full col-sm-9">

                                <!-- content -->                      
                                <div class="row">

                                    <!-- main col left --> 
                                    <div class="col-sm-5">

                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail"><img src="/img/bg_5.jpg" class="img-responsive"></div>
                                            <div class="panel-body">
                                                <p class="lead">Usuarios recientes</p>
                                                <p> 

                                                    <?php
                                                    $link = mysqli_connect("localhost", "1018246", "qwerpoiu1", "1018246");
                                                    $results = mysqli_query($link, "SELECT name FROM usuarios");
                                                    while ($datos = mysqli_fetch_array($results)) {
                                                        echo $datos["name"] . "<br>";
                                                    }
//                                                    // Frees the memory associated with a result
//                                                    $results->free();
//                                                    // close connection 
//                                                    $mysqli->close();
                                                    ?>

                                                </p>

                                                <p>
                                                    <img src="https://lh3.googleusercontent.com/uFp_tsTJboUY7kue5XAsGA=s28" width="28px" height="28px">
                                                </p>
                                            </div>
                                        </div>


                                        <div class="panel panel-default">
                                            <div class="panel-heading"><a href="#" class="pull-right">View all</a> <h4>Bootstrap Examples</h4></div>
                                            <div class="panel-body">
                                                <div class="list-group">
                                                    <a href="http://bootply.com/tagged/modal" class="list-group-item">Modal / Dialog</a>
                                                    <a href="http://bootply.com/tagged/datetime" class="list-group-item">Datetime Examples</a>
                                                    <a href="http://bootply.com/tagged/datatable" class="list-group-item">Data Grids</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="well"> 
                                            <form class="form-horizontal" role="form">
                                                <h4>What's New</h4>
                                                <div class="form-group" style="padding:14px;">
                                                    <textarea class="form-control" placeholder="Update your status"></textarea>
                                                </div>
                                                <button class="btn btn-primary pull-right" type="button">Post</button><ul class="list-inline"><li><a href=""><i class="glyphicon glyphicon-upload"></i></a></li><li><a href=""><i class="glyphicon glyphicon-camera"></i></a></li><li><a href=""><i class="glyphicon glyphicon-map-marker"></i></a></li></ul>
                                            </form>
                                        </div>

                                        <div class="panel panel-default">
                                            <div class="panel-heading"><a href="#" class="pull-right">View all</a> <h4>More Templates</h4></div>
                                            <div class="panel-body">
                                                <img src="//placehold.it/150x150" class="img-circle pull-right"> <a href="#">Free @Bootply</a>
                                                <div class="clearfix"></div>
                                                There a load of new free Bootstrap 3 ready templates at Bootply. All of these templates are free and don't require extensive customization to the Bootstrap baseline.
                                                <hr>
                                                <ul class="list-unstyled"><li><a href="http://www.bootply.com/templates">Dashboard</a></li><li><a href="http://www.bootply.com/templates">Darkside</a></li><li><a href="http://www.bootply.com/templates">Greenfield</a></li></ul>
                                            </div>
                                        </div>

                                        <div class="panel panel-default">
                                            <div class="panel-heading"><h4>What Is Bootstrap?</h4></div>
                                            <div class="panel-body">
                                                Bootstrap is front end framework to build custom web applications that are fast, responsive &amp; intuitive. It consist of CSS and HTML for typography, forms, buttons, tables, grids, and navigation along with custom-built jQuery plug-ins and support for responsive layouts. With dozens of reusable components for navigation, pagination, labels, alerts etc..                          </div>
                                        </div>



                                    </div>

                                    <!-- main col right -->
                                    <div class="col-sm-7">

                                        <div class="well"> 
                                            <form class="form">
                                                <h4>Sign-up</h4>
                                                <div class="input-group text-center">
                                                    <input type="text" class="form-control input-lg" placeholder="Enter your email address">
                                                    <span class="input-group-btn"><button class="btn btn-lg btn-primary" type="button">OK</button></span>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="panel panel-default">
                                            <div class="panel-heading"><a href="#" class="pull-right">View all</a> <h4>Bootply Editor &amp; Code Library</h4></div>
                                            <div class="panel-body">
                                                <p><img src="//placehold.it/150x150" class="img-circle pull-right"> <a href="#">The Bootstrap Playground</a></p>
                                                <div class="clearfix"></div>
                                                <hr>
                                                Design, build, test, and prototype using Bootstrap in real-time from your Web browser. Bootply combines the power of hand-coded HTML, CSS and JavaScript with the benefits of responsive design using Bootstrap. Find and showcase Bootstrap-ready snippets in the 100% free Bootply.com code repository.
                                            </div>
                                        </div>

                                        <div class="panel panel-default">
                                            <div class="panel-heading"><a href="#" class="pull-right">View all</a> <h4>Stackoverflow</h4></div>
                                            <div class="panel-body">
                                                <img src="//placehold.it/150x150" class="img-circle pull-right"> <a href="#">Keyword: Bootstrap</a>
                                                <div class="clearfix"></div>
                                                <hr>

                                                <p>If you're looking for help with Bootstrap code, the <code>twitter-bootstrap</code> tag at <a href="http://stackoverflow.com/questions/tagged/twitter-bootstrap">Stackoverflow</a> is a good place to find answers.</p>

                                                <hr>
                                                <form>
                                                    <div class="input-group">
                                                        <div class="input-group-btn">
                                                            <button class="btn btn-default">+1</button><button class="btn btn-default"><i class="glyphicon glyphicon-share"></i></button>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="Add a comment..">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                        <div class="panel panel-default">
                                            <div class="panel-heading"><a href="#" class="pull-right">View all</a> <h4>Portlet Heading</h4></div>
                                            <div class="panel-body">
                                                <ul class="list-group">
                                                    <li class="list-group-item">Modals</li>
                                                    <li class="list-group-item">Sliders / Carousel</li>
                                                    <li class="list-group-item">Thumbnails</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail"><img src="/img/bg_4.jpg" class="img-responsive"></div>
                                            <div class="panel-body">
                                                <p class="lead">Social Good</p>
                                                <p>1,200 Followers, 83 Posts</p>
                                                <p>
                                                    <img src="https://lh6.googleusercontent.com/-5cTTMHjjnzs/AAAAAAAAAAI/AAAAAAAAAFk/vgza68M4p2s/s28-c-k-no/photo.jpg" width="28px" height="28px">
                                                    <img src="https://lh4.googleusercontent.com/-6aFMDiaLg5M/AAAAAAAAAAI/AAAAAAAABdM/XjnG8z60Ug0/s28-c-k-no/photo.jpg" width="28px" height="28px">
                                                    <img src="https://lh4.googleusercontent.com/-9Yw2jNffJlE/AAAAAAAAAAI/AAAAAAAAAAA/u3WcFXvK-g8/s28-c-k-no/photo.jpg" width="28px" height="28px">
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                </div><!--/row-->

                                <?php // include_once './master/footer.php';     ?>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <a href="#">Twitter</a> <small class="text-muted">|</small> <a href="#">Facebook</a> <small class="text-muted">|</small> <a href="#">Google+</a>
                                    </div>
                                </div>

                                <div class="row" id="footer">    
                                    <div class="col-sm-6">

                                    </div>
                                    <div class="col-sm-6">
                                        <p>
                                            <a href="#" class="pull-right">©Copyright 2013</a>
                                        </p>
                                    </div>
                                </div>
                                <hr>
                                <h4 class="text-center">
                                    <a href="http://bootply.com/96266" target="ext">Download this Template @Bootply</a>
                                </h4>
                                <hr>

                            </div><!-- /col-9 -->
                        </div><!-- /padding -->
                    </div>
                    <!-- /main -->

                </div>
            </div>
        </div><!--wrapper-->


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
<!--                            <input type="button" text="">-->
                            <ul class="pull-left list-inline"><li><a href=""><i class="glyphicon glyphicon-upload"></i></a></li><li><a href=""><i class="glyphicon glyphicon-camera"></i></a></li><li><a href=""><i class="glyphicon glyphicon-map-marker"></i></a></li></ul>
                        </div>	
                    </div>
                </div>
            </div>
        </div>
        <!-- script references -->
<!--        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>-->
        <!--<script src="js/scripts.js"></script>-->
        
<!--<script src="<?php // echo base_url("assets/js/scripts.js"); ?>"></script>-->
        <script src="<?php echo base_url("./js/scripts.js"); ?>"></script>
    </body>
</html>

<script>
//            function removeElement(el) {
//                el.parentNode.removeChild(el);
//            }
//
//            $(document).ready(setInterval(function () {
//                removeElement("branding");
//            }, 5000));
</script>