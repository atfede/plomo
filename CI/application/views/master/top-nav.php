<?php // session_start(); ?>

<!-- top nav -->
<div class="navbar navbar-blue navbar-static-top navbar_shadow">  
    <div class="navbar-header">
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a href="#" class="navbar-brand logo">bf</a>
    </div>
    <nav class="collapse navbar-collapse navbar_shadow" role="navigation">
        <form class="navbar-form navbar-left">
            <div class="input-group input-group-sm" style="max-width:360px;">
                <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
                <div class="input-group-btn">
                    <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                </div>
            </div>
        </form>
        <ul class="nav navbar-nav">
            <li>
                <a href="../index.php"><i class="glyphicon glyphicon-home"></i> Inicio</a>
            </li>
            <li>
                <a href="#postModal" role="button" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i> Post</a>
            </li>

            <li>
<!--                <script>
                    var uri = "https://apis.live.net/v5.0/me?access_token=" + accessToken;
                    var profile = JObject.Parse(new WebClient().DownloadString(uri));
                    var pictureUrl = string.Format("https://apis.live.net/v5.0/{0}/picture", profile["id"]);
                </script>-->
                <img src="<?php
                if (isset($_SESSION["user"])) {
//                    if ($_SESSION["user"]->user->identity->provider == "windowslive") {
//                        echo 'https://apis.live.net/v5.0/me/picture?access_token=' . $_SESSION['ct'];
////                        echo https://apis.live.net/v5.0/me/picture/;
//                    }
//                    else {
//                      echo $_SESSION["user"]->user->identity->thumbnailUrl;
                    echo $_SESSION["user"]->user->identity->photos[0]->value;
//                    }
                } else {
//                    echo 'img/profile/no_image.png';
                    echo base_url("assets/img/profile/no_image.png");
                }
                ?>" class="img-top" id="<?php // echo $_SESSION['ct']; ?>">
            </li>

            <li>
                <a href="#"><span class="badge"><?php
                        if (isset($_SESSION["user"])) {
                            echo $_SESSION["user"]->user->identity->displayName;
                            //echo $_SESSION["user"]->user->identity->name->formatted;
                        }
                        ?></span></a>
            </li>
        </ul>

        <!--        <ul class="nav navbar-nav navbar-right">
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
                </ul>-->

        <!--         The plugin will be embedded into this div //XXXX
                <div id="oa_social_login_container" class="col-xs-3 navbar-right"></div>
        
                <script type="text/javascript">
                    var _oneall = _oneall || [];
        //            _oneall.push(['social_login', 'set_callback_uri', window.location.href]);
                    _oneall.push(['social_login', 'set_callback_uri', 'http://proyectofinal.6te.net/callback_handler.php']);
                    _oneall.push(['social_login', 'set_providers', ['facebook', 'google', 'twitter']]);
        //            _oneall.push(['social_login', 'set_providers', ['facebook', 'google', 'twitter', 'windowslive']]);
        //            _oneall.push(['social_login', 'set_custom_css_uri', 'https://secure.oneallcdn.com/css/api/themes/beveled_w35_h35_wc_v1.css']);
                    _oneall.push(['social_login', 'set_custom_css_uri', 'https://secure.oneallcdn.com/css/api/themes/beveled_w35_h35_wc_v1.css']);
                    _oneall.push(['social_login', 'do_render_ui', 'oa_social_login_container']);
                </script>-->

        <!-- Button trigger modal -->
        <!--        <button type="button" class="btn btn-primary btn-lg pull-right" data-toggle="modal" data-target="#myModal">
                    Login
                </button>-->

        <?php
//        switch ($_SESSION['user']) {
//            case "invitado": //Not logged in
//                require_once('../nav/guestnav.php');
//                break;
//            case "sala": //sala
//                require_once('salanav.php');
//                break;
//            case "profesor": //profesor nav
//                require_once('profesornav.php');
//                break;
//            case "admin": //admin nav
//                require_once('adminnav.php');
//                break;
//            //etc and default nav below
//        }
        ?>

        <li>
            <a class="pull-right inicio_session" data-toggle="modal" data-target="#myModal" id="inicio_session">Iniciar sesión</a>
        </li>
    </nav>
</div>
<!-- /top nav -->