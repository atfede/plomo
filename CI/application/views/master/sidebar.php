          
<!-- sidebar -->
<div class="column col-sm-2 col-xs-1 sidebar-offcanvas" id="sidebar">

    <ul class="nav">
        <li><a href="#" data-toggle="offcanvas" class="visible-xs text-center"><i class="glyphicon glyphicon-chevron-right"></i></a></li>
    </ul>

    <ul class="nav hidden-xs" id="lg-menu">
        <!--<li class="active"><a href="../index.php"><i class="glyphicon glyphicon-list-alt"></i> Inicio</a></li>-->
        <!--<li><a href="../search.php"><span class="glyphicon glyphicon-search"></span> Buscar</a></li>-->
        <!--<li><a href="../avisos.php"><i class="glyphicon glyphicon-paperclip"></i> Se ofrece | Se busca</a></li>-->
        <!--<li><a href="#"><i class="glyphicon glyphicon-refresh"></i> Se busca</a></li>-->
        <!--<li><a href="../calendario.php"><i class="glyphicon glyphicon-calendar"></i> Agenda</a></li>-->
        <li class="active"><a href="<?php echo site_url('controllers/HomeController') ?>"><i class="glyphicon glyphicon-list-alt"></i> Inicio</a></li>
        <li><a href="<?php echo site_url('controllers/BusquedaController') ?>"><i class="glyphicon glyphicon-list-alt"></i> Buscar</a></li>
        <li><a href="<?php echo site_url('controllers/AvisosController') ?>"><i class="glyphicon glyphicon-list-alt"></i> Se ofrece | Se busca</a></li>
        <li><a href="<?php echo site_url('controllers/CalendarioController') ?>"><i class="glyphicon glyphicon-list-alt"></i> Agenda</a></li>
    </ul>
    <!-- <ul class="list-unstyled hidden-xs" id="sidebar-footer">
                        <li>
                          <a href="http://www.bootply.com"><h3>Bootstrap</h3> <i class="glyphicon glyphicon-heart-empty"></i> Bootply</a>
                        </li>
                    </ul>-->

    <!-- tiny only nav-->
    <ul class="nav visible-xs" id="xs-menu">
        <li><a href="#featured" class="text-center"><i class="glyphicon glyphicon-list-alt"></i></a></li>
        <li><a href="#stories" class="text-center"><i class="glyphicon glyphicon-list"></i></a></li>
        <li><a href="#" class="text-center"><i class="glyphicon glyphicon-paperclip"></i></a></li>
        <li><a href="#" class="text-center"><i class="glyphicon glyphicon-refresh"></i></a></li>
    </ul>

</div>
<!-- /sidebar -->

<style>
    .nav{font-family: 'Lato',sans-serif!important; font-size: 13px;}
    /*    #sidebar .navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus {
            background: #4180a7;
            color: white;
            text-shadow: none;
        }*/
</style>