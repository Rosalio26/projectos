
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
</head>
<body class="home-less">
    <main class="cntet-rgh-bd bdy-cnt-inc">
        <section class="header">
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

        <div class="main-obj">
            <div>
                <div>
                    <?php 
                        switch(@$_REQUEST["page"]) {
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
                            print '
                            <div class="block-less-info welcm-info-less">
                                <div id="info-welcm-program" class="welcm-info-cnt info-welcm-program">
                                    <div id="welcm-program" class="img-back-less">
                                        <h1 class="tlt-prg">Programação</h1>
                                    </div>
                                    <div class="cmp-btn-ctxt-less">
                                        <div class="ctxt-block">
                                            <p>
                                                Começe Sua imaginação desenvolvendo e criando a sua imaginação. <br>
                                                Começe a criar um novo caminho para o mundo <br>  
                                                Conheça e desevolva com os novos meios de ensino. 
                                            </p>
                                        </div>
                                        <div class="btn-welc">
                                            <a href="./less/room-lesson.php?page=pageprogramacao">Estudar</a>
                                        </div>
                                    </div>
                                </div>

                                <div id="info-welcm-eletron" class="welcm-info-cnt info-welcm-eletron">
                                    <div class="img-back-less">
                                        <h1 class="tlt-eletro">Electrônica</h1>
                                    </div>
                                    <div id="less-eletron-cmp" class="cmp-btn-ctxt-less">
                                        <div id="ctxt-eletron" class="ctxt-block">
                                            <p>
                                                A grande inovação que caracteriza o mundo, é um conhecimento que podes criar. <br>
                                                Crie uma nova jornada de inteligência capaz de responder suas necessidades
                                            </p>
                                        </div>
                                        <div class="btn-welc">
                                            <a href="./less/room-lesson.php?page=pageeletronica">Estudar</a>
                                        </div>
                                    </div>
                                </div>

                                <div id="info-welcm-devweb" class="welcm-info-cnt info-welcm-devweb">
                                    <div class="img-back-less">
                                        <h1 class="tlt-dvwb">Desevolvimento Web</h1>
                                    </div>
                                    <div id="less-devweb-cmp" class="cmp-btn-ctxt-less">
                                        <div id="ctxt-devweb" class="ctxt-block">
                                            <p>
                                                Crie seu propio futuro com tecnologias. <br>
                                                As primeiras etapas para poder apreender o funcionamento da internet. <br>
                                                Começe a criar uma nova rede para desfrutar dos seus interesses.
                                            </p>
                                        </div>
                                        <div class="btn-welc">
                                            <a href="./less/room-lesson.php?page=pagedevweb">Estudar</a>
                                        </div>
                                    </div>
                                </div>

                                <div id="info-welcm-math" class="welcm-info-cnt info-welcm-math">
                                    <div class="img-back-less">
                                        <h1 class="tlt-math">Matematica</h1>
                                    </div>
                                    <div id="less-math-cmp" class="cmp-btn-ctxt-less">
                                        <div id="ctxt-math" class="ctxt-block">
                                            <p>
                                                Grandes Maquinas começão com simples números criados pelo homem <br>
                                                Começe a criar codigos para suas maquinas <br>
                                                desevolva seu ambiente de grandes redes capasis de satisfazer suas necessiades.
                                            </p>
                                        </div>
                                        <div class="btn-welc">
                                            <a href="./less/room-lesson.php?page=pagemathematic">Estudar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                        }
                    ?>
                </div>
            </div>
        </div>
    </main>
    <div class="fotr-min-bdy bdy-cnt-inc">
        <div class="user-info">
            <div class="sep-img-id-user">
                <section class="img-user">
                    <img src="./midia/progrm-tw-img-lk.jpg" alt="imagem do usuario">
                </section>
                <section class="dados-user">
                    <div>
                        <?php 
                          print $_SESSION["usuario"];
                        ?>
                    </div>
                    <div class="user-type">
                    </div>
                </section>
            </div>
        </div>

        <div class="cmp-nav-list">
            <div class="col-itm-nav-less">
                <nav class="list-less-nm">
                    <ul class="dpla-itm-less-nm">
                        <li onclick="btnContent()" class="navBar">
                            <a onclick="getpage(this.id)" id="test" class="lk-imp-tm" href="?page=programacao">Programação</a>
                            <ul id="tm-less-program" class="cnt-tm-less">
                                <li><a class="lk-cnt-less" href="">JavaScript</a></li>
                                <li><a class="lk-cnt-less" href="">Java</a></li>
                                <li><a class="lk-cnt-less" href="">Php</a></li>
                                <li><a class="lk-cnt-less" href="">C#</a></li>
                                <li><a class="lk-cnt-less" href="">C++</a></li>
                                <li><a class="lk-cnt-less" href="">C</a></li>
                            </ul>
                        </li>
                        <script src="script/app_less.js"></script>
                        <li>
                            <a class="lk-imp-tm" href="?page=eletronic">Electrônica</a>
                            <ul class="cnt-tm-less">
                                <li><a class="lk-cnt-less" href="">Algoritmos</a></li>
                                <li><a class="lk-cnt-less" href="">Intêligençia Artificial</a></li>
                                <li><a class="lk-cnt-less" href="">Arduino</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="lk-imp-tm" href="?page=devweb">Desevolvimento Web</a>
                            <ul class="cnt-tm-less">
                                <li><a class="lk-cnt-less" href="">Html5</a></li>
                                <li><a class="lk-cnt-less" href="">Css3</a></li>
                                <li><a class="lk-cnt-less" href="">Svg e Canvas</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="lk-imp-tm" href="?page=mathematic">Matematica</a>
                            <ul class="cnt-tm-less">
                                <li><a class="lk-cnt-less" href="">ciênçia da computaçâo e Egenharia</a></li>
                                <li><a class="lk-cnt-less" href="">Simbologia da computção</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</body>
</html>