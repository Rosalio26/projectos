
<?php
	session_start();
	if (empty($_SESSION)) {
		print "<script>location.href= 'login.html';</script>";
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sala Caracolearn</title>
    <link rel="stylesheet" href="./style/home_less.css">
    <script src="./script/jquery.js"></script>
    <script type="module" src="./script/appless.js"></script>
</head>
<body class="home-less">
    <main class="cntet-rgh-bd bdy-cnt-inc">
        <section id="header" class="header">
            <section class="search">
                <form action="">
                    <div class="area-procura">
                        <input type="search" name="procura_aula" class="procura" id="idprocura">
                        <input type="button" value="procurar" class="btn-procura">
                    </div>
                </form>
            </section>

            <section class="nav-itms-res">
                <nav class="col-itm-less">
                    <ul class="row-itm-less">
                        <li><a class="lk-less-itm" href="">Workgroup</a></li>
                        <li><a class="lk-less-itm" href="">Ficheiros</a></li>
                        <li><a class="lk-less-itm" href="">Galeria</a></li>
                        <li><a class="lk-less-itm" href="">Musica</a></li>
                    </ul>
                </nav>
            </section>
        </section>

        <div id="main" class="main-obj">
            <div>
                <div>
                    <?php 
                        switch(@$_REQUEST["pageLess"]) {
                            case "programacao";
                                include("./less/aulas/programacao/programacao-less.php");
                            break;

                            case "eletronic";
                                include("./less/aulas/eletronica/eletronica-less.php");
                            break;

                            case "devweb";
                                include("./less/aulas/web/desenvolvimento-web-less.php");
                            break;

                            case "mathematic";
                                include("./less/aulas/matematica/matematica-less.php");
                            break;

                            default:
                            include "inc/map_home_less_inc.php" ;
                        }
                    ?>
                </div>
            </div>
        </div>
    </main>
    <div id="navList" class="fotr-min-bdy bdy-cnt-inc">
        <div class="user-info">
            <div class="sep-img-id-user">
                <section class="img-user">
                    <img src="./midia/progrm-tw-img-lk.jpg" alt="imagem do usuario">
                </section>
                <section class="dados-user">
                    <div>
                        <?php 
                          print '<span style="color: red;"> ID </span>' . $_SESSION["usuario"];
                        ?>
                    </div>
                    <div class="user-type">
                    </div>
                </section>
            </div>
        </div>

        <div class="cmp-nav-list">
            <div class="col-itm-nav-less">
                <nav id="listNav" class="list-less-nm">
                    <ul class="dpla-itm-less-nm">
                        <li id="navBar" class="navBar">
                            <!--<a onclick="getpage(this.id)" id="test" class="lk-imp-tm" href="?page=programacao">Programação</a>-->
                            <button id="btn-program" class="lk-imp-tm">Programacao</button>
                            <ul id="lessProgram" class="cnt-tm-less">
                                
                                <li>
                                    <a class="lk-cnt-less" href="./less/room-lesson.php?pages=areajavascript">JavaScript</a>
                                </li>

                                <li><a class="lk-cnt-less" href="./less/room-lesson.php?pages=areajava">Java</a></li>

                                <li><a class="lk-cnt-less" href="./less/room-lesson.php?pages=areaphp">Php</a></li>

                                <li><a class="lk-cnt-less" href="./less/room-lesson.php?pages=areacshp">C#</a></li>

                                <li><a class="lk-cnt-less" href="./less/room-lesson.php?pages=areacps">C++</a></li>

                                <li><a class="lk-cnt-less" href="./less/room-lesson.php?pages=areacc">C</a></li>
                            </ul>
                        </li>
                        <script>                    
                            $("#btn-program").click(function() {
                                $("#main").load("./less/aulas/programacao/programacao-less.php");
                            });
                        </script>

                        <li class="navBar">
                            <!--<a class="lk-imp-tm" href="?page=eletronic">Electrônica</a>-->
                            <button id="btn-eletronic" class="lk-imp-tm">Eletronica</button>
                            <ul id="lessEletro" class="cnt-tm-less">
                                <li><a class="lk-cnt-less" href="./less/room-lesson.php?pages=areaAlgorithm">Algoritmos</a></li>
                                <li><a class="lk-cnt-less" href="./less/room-lesson.php?pages=areaAi">Intêligençia Artificial</a></li>
                                <li><a class="lk-cnt-less" href="./less/room-lesson.php?pages=areaArduino">Arduino</a></li>
                            </ul>
                        </li>
                        <script>                    
                            $("#btn-eletronic").click(function() {
                                $("#main").load("./less/aulas/eletronica/eletronica-less.php");
                            });
                        </script>

                        <li class="navBar">
                            <!--<a class="lk-imp-tm" href="?page=devweb">Desevolvimento Web</a>-->
                            <button id="btn-devweb" class="lk-imp-tm">Desevolvimento Web</button>
                            <ul id="lessDevweb" class="cnt-tm-less">
                                <li><a class="lk-cnt-less" href="./less/room-lesson.php?pages=areaHtml">Html5</a></li>
                                <li><a class="lk-cnt-less" href="./less/room-lesson.php?pages=areaCss">Css3</a></li>
                                <li><a class="lk-cnt-less" href="./less/room-lesson.php?pages=areaSvg">Svg e Canvas</a></li>
                            </ul>
                        </li>
                        <script>                    
                            $("#btn-devweb").click(function() {
                                $("#main").load("./less/aulas/web/desenvolvimento-web-less.php");
                            });
                        </script>

                        <li class="navBar">
                            <!--<a class="lk-imp-tm" href="?page=mathematic">Matematica</a>-->
                            <button id="btn-math" class="lk-imp-tm">Matematica</button>
                            <ul id="lessMath" class="cnt-tm-less">
                                <li><a class="lk-cnt-less" href="./less/room-lesson.php?pages=areaMathcomputer">ciênçia da computaçâo e Egenharia</a></li>
                                <li><a class="lk-cnt-less" href="./less/room-lesson.php?pages=areaMathsymbol">Simbologia da computção</a></li>
                            </ul>
                        </li>
                        <script>                    
                            $("#btn-math").click(function() {
                                $("#main").load("./less/aulas/matematica/matematica-less.php");
                            });
                        </script>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</body>
</html>