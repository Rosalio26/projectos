<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sala | Aulas Gerais de ensino</title>
    <link rel="stylesheet" href="./style/home_less.css">
    <link rel="stylesheet" href="../style/home_less.css">
</head>
<body>
    <div class="genral-static">
        <div class="cop-static">
            <div class="header-static">
                <div class="logo-cnt-room">
                    <div class="lef-itm">
                        <a class="logo">
                            <img src="" alt="imagem Logo">
                            <span class="txt-lg-room">CaracoLearn</span>
                        </a>
                        <div class="bfs-room">
                            <ul>
                                <li>Biblioteca</li>
                                <li>Ficheeiros</li>
                                <li>Studdio</li>
                            </ul>
                        </div>
                    </div>
                    <div class="accout-room">
                        <span>Conta</span>
                    </div>
                </div>

                <div class="menu-cnt-room">
                    <div class="scrType">
                        <?php 
                            switch(@$_REQUEST["page"]) {
                                case "pageprogramacao";
                                    include("./aulas/programacao/program-room-less.php");
                                break;
                                case "pageeletronica";
                                    include("./aulas/eletronica/eletron-room-less.php");
                                break;
                                case "pagedevweb";
                                    include("./aulas/web/devweb-room-less.php");
                                break;
                                case "pagemathematic";
                                    include("./aulas/matematica/math-room-less.php");
                                break;
                                default: 
                                    include "./aulas/incLesson/themeLesoon.php"
                                ;
                            }
                        ?> 
                    </div>
                </div>
            </div>

            <div class="main-itm-tw">
                <div class="col-mn-itm-on">
                    <div class="tlt-abd-tm">
                        <?php 
                        switch(@$_REQUEST["pages"]) {
                            case "areajavascript";
                                include("./aulas/programacao/aulajavascript/javascript.php");
                            break;

                            case "areajava";
                                include("./aulas/programacao/aulajava/java.php");
                            break;

                            case "areaphp";
                                include("./aulas/programacao/aulaphp/al_php.php");
                            break;

                            case "areacshp";
                                include("./aulas/programacao/aulaLgCshp/lg_csh.php");
                            break;
                            
                            case "areacps";
                                include("./aulas/programacao/aulaLgCplus/lg_Cpls.php");
                            break;

                            case "areacc";
                                include("./aulas/programacao/aulaLg-c/lg_c.php");
                            break;

                            case "areaAlgorithm";
                                include("./aulas/eletronica/aulaalgoritmo/algoritmo.php");
                            break;

                            case "areaAi";
                                include("./aulas/eletronica/aulaAI/ai.php");
                            break;

                            case "areaArduino";
                                include("./aulas/eletronica/aulaarduino/arduino.php");
                            break;

                            case "areaHtml";
                                include("./aulas/web/htmlcss/html/html.php");
                            break;

                            case "areaCss";
                                include("./aulas/web/htmlcss/css/css.php");
                            break;

                            case "areaSvg";
                                include("./aulas/web/svg/svg.php");
                            break;

                            case "areaMathcomputer";
                                include("./aulas/matematica/cienciaComputer/ciencia.php");
                            break;

                            case "areaMathsymbol";
                                include("./aulas/matematica/symbol/simbologia.php");
                            break;                

                            default:
                            echo "<div class='errorUpdatefiles'>Ocorreu um erro na actulização de dados! <br> Por favor Siga as seguintes instruções: <br> Entre com uma conta, <a href='../../includes/forms/cadastro.html' class='contaCad cadLog'>Cadastro</a> ou <a href='../../includes/forms/login.html' class='contaLog cadLog'>Login</a></div>"
                            ;
                        }
                        ?>
                        
                        <div class="exmaChild">
                            <div class="mam-itm">
                                <div class="child-itm">
                                </div>
                            </div>
                            
                            <div class="incText">
                                <span>inc&UnderBar;Learn &copy; 2024</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-mn-itm-tw">
                    <?php 
                        switch (@$_REQUEST['svgPages']) {
                            case 'introPage':
                                include('./aulas/web/svg/introducao/introSvg.php');
                                break;
                            
                            default:
                                echo"Erro";
                                break;
                        }
                    
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>