<!DOCTYPE html>
<html lang="en">
    <head>
        <?php // include_once './master/head.php'; ?>
        <?php include_once './application/views/master/head.php'; ?>

        <style>
            /*#container { width: 100%; height: 100% }*/
            html, body { height:100%; width:100%;}
            #map {
                height : 100%; width : 100%; top : 0; left : 0; position : absolute; z-index : 200; 
            }
        </style>
        <!--<script src="https://maps.googleapis.com/maps/api/js"></script>-->
        <script src="http://maps.google.com/maps/api/js?libraries=places&sensor=false"></script>

        <!-- <link href="responsive-calendar/0.9/css/responsive-calendar.css" rel="stylesheet" media="screen">
        <script src="responsive-calendar/0.9/js/jquery.js" type="text/javascript"></script>
        <script src="responsive-calendar/0.9/js/responsive-calendar.js" type="text/javascript"></script>
        -->
        
        <link href="../assets/responsive-calendar/0.9/css/responsive-calendar.css" rel="stylesheet" media="screen">
        <!--<script src="responsive-calendar/0.9/js/jquery.js" type="text/javascript"></script>-->
        <script src="../assets/responsive-calendar/0.9/js/responsive-calendar.js" type="text/javascript"></script>

    </head>
    <body>
        <div class="wrapper">
            <div class="box">
                <div class="row row-offcanvas row-offcanvas-left">

                    <?php // include_once 'master/sidebar.php'; ?>
                    <?php include_once './application/views/master/sidebar.php'; ?>

                    <!-- main right col -->
                    <div class="column col-sm-10 col-xs-11" id="main">


                        <?php // include_once './master/top-nav.php'; ?>
                        <?php include_once './application/views/master/top-nav.php'; ?>
                        
                        <!-- top nav -->
                        <!--  <div class="navbar navbar-blue navbar-static-top">  
                                                    <div class="navbar-header">
                                                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                                                            <span class="sr-only">Toggle</span>
                                                            <span class="icon-bar"></span>
                                                            <span class="icon-bar"></span>
                                                            <span class="icon-bar"></span>
                                                        </button>
                                                        <a href="/" class="navbar-brand logo">bf</a>
                                                    </div>
                                                    <nav class="collapse navbar-collapse" role="navigation">
                                                        <form class="navbar-form navbar-left">
                                                            <div class="input-group input-group-sm" style="max-width:360px;">
                                                                <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
                                                                <input type="text" class="form-control" placeholder="Buscar" name="srch-term" id="srch-term">
                                                                <div class="input-group-btn">
                                                                    <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                        <ul class="nav navbar-nav">
                                                            <li>
                                                                <a href="#"><i class="glyphicon glyphicon-home"></i> Inicio</a>
                                                            </li>
                                                            <li>
                                                                <a href="#postModal" role="button" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i> Post</a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><span class="badge">badge</span></a>
                                                            </li>
                                                        </ul>
                                                        <ul class="nav navbar-nav navbar-right">
                                                            <li class="dropdown">
                                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i></a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a href="">More</a></li>
                                                                    <li><a href="">More</a></li>
                                                                    <li><a href="">More</a></li>
                                                                    <li><a href="">More</a></li>
                                                                    <li><a href="">More</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </nav>
                                                </div>-->
                        <!-- /top nav -->

                        <!--<div class="padding">-->

                        <!-- Responsive calendar - START -->
                        <div class="responsive-calendar" id="calendar">
                            <div class="controls">
                                <a class="pull-left" data-go="prev"><div class="btn"><i class="glyphicon glyphicon-chevron-left"></i>Anterior</div></a>
                                <h4><span data-head-year></span> <span data-head-month></span></h4>
                                <a class="pull-right" data-go="next"><div class="btn">Siguiente<i class="glyphicon glyphicon-chevron-right"></i></div></a>
                            </div><hr/>
                            <div class="day-headers">
                                <div class="day header">Lunes</div>
                                <div class="day header">Martes</div>
                                <div class="day header">Miércoles</div>
                                <div class="day header">Jueves</div>
                                <div class="day header">Viernes</div>
                                <div class="day header">Sábado</div>
                                <div class="day header">Domingo</div>
                            </div>
                            <div class="days" data-group="days">
                                <!-- the place where days will be generated -->
                            </div>
                        </div>
                        <!-- Responsive calendar - END -->

                        <!--</div> /padding -->
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
        <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>-->
<!--        <script src="js/bootstrap.min.js"></script>
        <script src="js/scripts.js"></script>-->
        <script>
            $(document).ready(function () {
                $('.responsive-calendar').responsiveCalendar();
                $('#calendar').responsiveCalendar('prev');
                $('#calendar').responsiveCalendar('next');
                $('#calendar').responsiveCalendar('edit', {
//                    onDayClick: function (events) {
//                        this.onDayClick(events);
//                        alert('click');

//                  "2015-12-04": {"number": count(*), "badgeClass": "badge-warning", "url": "verDiaPasandoObjetoEnVariableSession"},

                    "2015-10-04": {"number": 5, "badgeClass": "badge-warning", "url": "#"},
                    "2015-10-02": {"number": 3, "badgeClass": "badge-warning", "url": "#"},
                    "2015-10-05": {"number": 8, "badgeClass": "badge-warning", "url": "#"},
                    "2015-10-03": {"number": 5, "badgeClass": "badge-warning", "url": "#"},
                    "2015-10-06": {"number": 8, "badgeClass": "badge-warning", "url": "#"},
                    "2015-10-07": {"number": 8, "badgeClass": "badge-warning", "url": "#"},
                    "2015-10-08": {"number": 3, "badgeClass": "badge-warning", "url": "#"},
                    "2015-10-15": {"number": 2, "badgeClass": "badge-warning", "url": "#"},
                    "2015-10-12": {"number": 4, "badgeClass": "badge-warning", "url": "#"},
                    "2015-10-17": {"number": 7, "badgeClass": "badge-warning", "url": "#"},
                    "2015-10-18": {"number": 8, "badgeClass": "badge-warning", "url": "#"},
                    "2015-10-21": {"number": 10, "badgeClass": "badge-warning", "url": "#"},
                    "2015-10-30": {"number": 7, "badgeClass": "badge-warning", "url": "#"},
                    "2015-11-01": {"number": 8, "badgeClass": "badge-warning", "url": "#"},
                    "2015-11-02": {"number": 7, "badgeClass": "badge-warning", "url": "#"},
                    "2015-11-03": {"number": 4, "badgeClass": "badge-warning", "url": "#"},
                    "2015-11-05": {"number": 4, "badgeClass": "badge-warning", "url": "#"},
                    "2015-11-19": {"number": 6, "badgeClass": "badge-warning", "url": "#"},
                    "2015-11-14": {"number": 2, "badgeClass": "badge-warning", "url": "#"},
                    "2015-11-22": {"number": 8, "badgeClass": "badge-warning", "url": "#"},
                    "2015-11-23": {"number": 8, "badgeClass": "badge-warning", "url": "#"},
                    "2015-11-25": {"number": 8, "badgeClass": "badge-warning", "url": "#"},
                    "2015-11-28": {"number": 12, "badgeClass": "badge-warning", "url": "#"},
                    "2015-11-04": {"number": 8, "badgeClass": "badge-warning", "url": "#"},
                    "2015-11-11": {"number": 8, "badgeClass": "badge-warning", "url": "#"}
//                    }
//                    "2013-04-30": {"number": 5, "badgeClass": "badge-warning", "url": "#"},
//                    "2013-04-26": {"number": 1, "badgeClass": "badge-warning", "url": "#"},
//                    "2013-05-03": {"number": 1, "badgeClass": "badge-error"},
//                    "2013-06-12": {}
                });
//                        $('.responsive-calendar').responsiveCalendar({
//                    onMonthChange: function (events) {
//                        alert('moth change');
//                    }
//                });

            });
        </script>
    </body>
</html>

