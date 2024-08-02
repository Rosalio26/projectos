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

                            default:
                            print 'Nenhum Dado Foi captado!'
                            ;
                        }
                        ?>
                        
                        <div style="height: 100%; width: 80%; background: red;" class="extra"> Estra</div>
                    </div>
                </div>
                
                <div class="col-mn-itm-tw"></div>
            </div>
        </div>
    </div>
</body>
</html>