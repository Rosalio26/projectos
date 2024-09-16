<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livraria do apreendizado</title>
    <link rel="stylesheet" href="conf_lesson/style/win-materias.css">
    <script defer src="conf_lesson/script/appch.js"></script>
    <script defer src="conf_lesson/script/jquery.js"></script>
</head>
<body id="body_lesson_page">
    <header>        
        <div class="mn-header">
            <div class="container-hhd">
                <div class="itm-cnt-hdd">
                    <div class="itm-hhd">
                        <div class="logo-sala">
                            <a href="../../indexUpgrade.php">caracoLearn</a>
                        </div>
                    </div>
                    <nav class="itm-navbar">
                        <ul class="list-navbar">
                            <li><a href="../sala-materias.php">Materias</a></li>
                            <li><a href="">Biblioteca</a></li>
                            <li><a href="">Ficheiros</a></li>
                            <li><a href="">Notas</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="logn-main">
                    <p>profile</p>
                </div>
            </div>
            <div>
                <ul>
                    <li><a href="pages_lesson.php?pageProgram=titlejavascript">JavaScript</a></li>
                    <li><a href="pages_lesson.php?pageProgram=titlephp">php</a></li>
                    <li><a href="pages_lesson.php?pageProgram=titlejava">Java</a></li>
                    <li><a href="pages_lesson.php?pageProgram=titlecsharp">C#</a></li>
                    <li><a href="pages_lesson.php?pageProgram=titlecplus">C++</a></li>
                    <li><a href="pages_lesson.php?pageProgram=titlepython">Python</a></li>
                    <li><a href="pages_lesson.php?pageEletronic=titleAlgoritmo">Algoritmo</a></li>
                    <li><a href="pages_lesson.php?pageEletronic=titleArduino">Arduino</a></li>
                    <li><a href="pages_lesson.php?pageEletronic=titleRobotica">Robotica</a></li>
                    <li><a href="pages_lesson.php?pageEletronic=titleAi">Ai</a></li>
                    <li><a href="pages_lesson.php?pageEletronic=titleProteus">Proteus</a></li>
                    <li><a href="pages_lesson.php?pageLesson=titlehtml">Html5</a></li>
                    <li><a href="pages_lesson.php?pageLesson=titlecss">Css3</a></li>
                    <li><a href="pages_lesson.php?pageLesson=titlesvg">Svg</a></li>
                    <li><a href="pages_lesson.php?pageLesson=titlecanvas">Canvas</a></li>
                    <li>Computacao</li>
                    <li>Geometria</li>
                    <li>Analitica</li>
                </ul>
            </div>
        </div>

        


    </header>
    <main id="main_lesson_page">
        <div id="scd-main-les" class="mn-les-pg">
            <div class="lef-mn-les">
                <div class="cnt-boxe-less">
                    <div class="sub-box-les">
                        <?php 
                        //======================================
                        //=========Asides de DESENVOLVIMENTO WEB
                            switch (@$_REQUEST["pageLesson"]) {
                                case "titlehtml":
                                    include("dev_web/auladeHtml/html_aside.html");    
                                break;
                                case "titlecss":
                                    include("dev_web/auladeCss/css_aside.html");    
                                break;
                                case "titlesvg":
                                    include("dev_web/auladeSvg/svg_aside.html");    
                                break;
                                case "titlecanvas":
                                    include("dev_web/auladeCanvas/canvas_aside.html");    
                                break;  
                                default:
                                print("");
                            }
                            
                            //======================================
                            //=========Asides de PROGRAMACAO
                            switch (@$_REQUEST["pageProgram"]) {
                                case "titlejavascript":
                                    include("programacao/auladeJavascript/javascript_aside.html");    
                                break;
                                case "titlephp":
                                    include("programacao/auladePhp/php_aside.html");    
                                break;
                                case "titlejava":
                                    include("programacao/auladeJava/java_aside.html");    
                                break;
                                case "titlecsharp":
                                    include("programacao/auladeLinguagemCsharp/lgCsharp_aside.html");    
                                break;  
                                case "titlecplus":
                                    include("programacao/auladeLinguagemCplus/lgCplus_aside.html");    
                                break;  
                                case "titlepython":
                                    include("programacao/auladePython/python_aside.html");    
                                break;  
                                default:
                                print("");
                            }
                            
                            //======================================
                            //=========Asides de ELETRONICA
                            switch (@$_REQUEST["pageEletronic"]) {
                                case "titleAlgoritmo":
                                    include("eletronica/auladeAlgoritmo/algoritmo_aside.html");    
                                break;
                                case "titleArduino":
                                    include("eletronica/auladeArduino/arduino_aside.html");    
                                break;
                                case "titleAi":
                                    include("eletronica/auladeAi/ai_aside.html");    
                                break;
                                case "titleRobotica":
                                    include("eletronica/auladeRobotica/robotica_aside.html");    
                                break;
                                case "titleProteus":
                                    include("eletronica/auladeProteus/proteus_aside.html");    
                                break;
                                default:
                                print("");
                            }
                        ?>
                    </div>
                </div>
            </div>

            <div id="camp_right_pages" class="rig-mn-les">
            </div>
        </div>
    </main>
    <footer></footer>
</body>
</html>