<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <!--<link rel="stylesheet" href=".style/homeStyle.css">-->
    <link rel="stylesheet" href="./style/index_style.css">
    <link rel="stylesheet" href="../style/homeStyle.css">
    <link rel="stylesheet" href="../style/index_style.css">
    <script defer src="./script/apt.js"></script>
</head>
<body>
    <header>      
        <div id="sticky_1" class="sticky_1 lst-sticky">
            <h1 class="conor">Desfrunte do novo meio de ensino</h1>
            <div class="cnt-itm">
                <div class="img-itm cfg_1-img">
                    <img class="cnt-img prl-cfg" src="./midia/img/room_class_2.png" alt="">
                </div>
                <div class="cnt-img cmpss-img">
                    <p class="itm-txt-1 txt-gnl">Investindo no futuro</p>
                    <p class="itm-txt-2 txt-gnl">Torne sua fraqueza num sucesso</p>
                    <p class="itm-txt-3 txt-gnl">O caminho para o futuro é a percistência</p>
                </div>
            </div>
            <!--<hr class="sap-tllg">-->
            <div class="lg-nm">
                <h3 class="conor-1">Caracol Sorridente</h3>
            </div>
            <div class="svgs">
                <svg class="svg-stick_1">
                    <circle class="itm-svg-stck" cx="490" cy="550" r="550" fill="#051027" stroke="transparent" />
                </svg>
                <svg class="svg-stick_1 svg-tick">
                    <circle class="itm-svg-stck" cx="120" cy="80" r="70" fill="#051027" stroke="#434f674b" />
                </svg>
            </div>
        </div>

        <div id="sticky_2" class="sticky_2 myHeader">
            <!--
            ============= LOGO ===============
            -->
            <div class="logo-cnt">
                <a href="./index.php" class="logo lk-lg">
                    <span>
                        <img class="img-logo" src="./midia/img/logo.png">
                    </span>
                    <span style="display: block;" class="txt-logo">caracoLearn</span>
                </a>
            </div> 
            <!--
            ============= MENU ===============
            -->
            <nav class="navBar menuContent">
                <div class="btnConfing">
                    <button class="btn-nv nv-gnrl" onclick="btnmenuHamb()"></button>
                </div>

                <ul class="itm-content">
                    <li><a class="cnt-lk nv-lk" href="./ownless/less/room-lesson.php">Aulas</a></li>
                    <li><a class="cnt-lk nv-lk" href="#">Blog</a></li>
                    <li class="itm-glr"><span id="btn-glr" class="cnt-lk nv-lk btn-glr">Galeria <img class="imp-img" src="./midia/img/icon/right-arrow.pn" alt=""></span>
                        <ul class="itm-hdd hidd-nv">
                            <div class="frt-hdd">
                                <li><a class="cnfg-nv-lk" href="#">Calendário <span><img id="myImage" src="./midia/img/icon/calendario.png" alt="Calendário" class="img-lk-ic"></span></a></li>
                                <li><a class="cnfg-nv-lk" href="#">Fotos <span><img src="./midia/img/icon/album-de-foto (1).png" alt="Album de fotos" class="img-lk-ic"></span></a></li>
                                <li><a class="cnfg-nv-lk" href="#">Videos <span><img src="./midia/img/icon/marketing-de-video.png" alt="" class="img-lk-ic"></span></a></li>
                            </div>
                            <div class="sec-hdd">
                                <li><a class="cnfg-nv-lk" href="#">Músicas <span><img src="./midia/img/icon/fones-de-ouvido.png" alt="" class="img-lk-ic"></span></a></li>
                                <li><a class="cnfg-nv-lk" href="#">Forúm <span><img src="./midia/img/icon/forum-de-educacao.png" alt="" class="img-lk-ic"></span></a></li>
                                <li><a class="cnfg-nv-lk" href="#">New (Notícias) <span><img src="./midia/img/icon/jornal-dobrado.png" alt="" class="img-lk-ic"></span></a></li>
                            </div>
                        </ul>
                    </li>
                    <li class="cmp-reg registro">
                        <span class="btn-reg reg-itm">Registar</span>
                        <ul class="cnfg-reg gnl-reg hidd-nv">
                            <li><a id="hd-lgn" class="cnt-lk nv-lk lgn-ins hd-lgn" href="./includes/forms/login.html">Login</a></li>
                            <li><a id="hd-ins" class="cnt-lk nv-lk lgn-ins hd-ins" href="./includes/forms/cadastro.html">Cadastro</a></li>
                        </ul>
                        <!--<script defer src="./script/at.js"></script>-->
                    </li>
                </ul>
            </nav>
        </div> 
    </header>

    <!--
    ============== MAIN ===============
    -->
    <main class="main">
        <div class="row-grl">
            <div class="col-main">
                <div class="one-main-itm">
                    <div class="txt-itm-mn">
                        <div class="lema-cnt-txt">
                            <p class="txt-lmz lema-zr">Aproveite cada oportunidade, Aprenda e desenvolva mais</p>
                            <p class="txt-lmz lema">A jornada de mil milhas começa com um unico passo</p>
                        </div>
                        <a href="#" class="btn-lm">
                            <span>Começar</span> 
                            <span>
                                <img class="btn-col-one" src="./midia/img/icon/seta-direita (1).png" alt="">
                            </span>
                        </a>
                    </div>
                    <div class="img-txt-mn">
                        <img class="itn-img" src="./midia/img/wel-img-003.jpg" alt="imagem de campo de Bem vindo">
                    </div>
                </div>
            </div>

            <div class="blast-itm">
                <div class="block-blast-cnt">
                    <div class="arm-blst">
                        <div  class="itm-blst-blck">
                            <div class="elem-trck">
                                <div class="sp-cnt-txt">
                                    <div class="blck-intr-cnt tlt-intr">
                                        <h3 id="tli-elm-pry" class="el-itm-tli">Programação</h3>
                                    </div>
                                    <div class="ctr-cnt-blst">
                                        <ul>
                                            <li class="el-itm-tli li-cnt">JavaScript</li>
                                            <li class="el-itm-tli li-cnt">Java</li>
                                            <li class="el-itm-tli li-cnt">php</li>
                                            <li class="el-itm-tli li-cnt">C++, C#, C</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="blck-intr-cnt">
                                    <a class="btn-stb" href="./ownless/less/programacao/programacao-less.php">
                                        <span>Ver, ler mais, começar</span> 
                                        <span class="arr-itm">&rarr;</span>
                                    </a>
                                </div>
                            </div>
                            <div class="img-lk-less">
                                <a href="">
                                    <img class="img-lk-blt" src="./ownless/midia/progrm-tw-img-lk.jpg" alt="imagem-programação">
                                </a>
                            </div>
                        </div>

                        <div class="itm-blst-blck">
                            <div class="elem-trck">
                                <div class="sp-cnt-txt">
                                    <div class="tlt-intr">
                                        <h3 id="tli-elm-scd" class="el-itm-tli">Eletrônica</h3>
                                    </div>
                                    <div class="ctr-cnt-blst">
                                        <ul>
                                            <li class="el-itm-tli li-cnt">Algoritmos</li>
                                            <li class="el-itm-tli li-cnt">Inteligencia Artificial</li>
                                            <li class="el-itm-tli li-cnt">Arduino</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="blck-intr-cnt">
                                    <a class="btn-stb" href="./ownless/less/eletronica/eletronica-less.php">
                                        <span>Ver, ler mais, começar</span>
                                        <span class="arr-itm">&rarr;</span>
                                    </a>
                                </div>
                            </div>
                            <div class="img-lk-less">
                                <a href="">
                                    <img class="img-lk-blt" src="./ownless/midia/eletro-on-img-lk.jpg" alt="imagem-eletronica">
                                </a>
                            </div>
                        </div>

                        <div class="itm-blst-blck">
                            <div class="elem-trck">
                                <div class="sp-cnt-txt">
                                    <div class="tlt-intr">
                                        <h3 id="tli-elm-trd">Desenvolvimento Web</h3>
                                    </div>
                                    <div class="ctr-cnt-blst">
                                        <ul>
                                            <li class="el-itm-tli li-cnt">HTML5</li>
                                            <li class="el-itm-tli li-cnt">Css3</li>
                                            <li class="el-itm-tli li-cnt">SVG, Canvas</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="blck-intr-cnt">
                                    <a class="btn-stb" href="./ownless/less/aulas/web/desenvolvimento-web-less.php">
                                        <span>Ver, ler mais, começar</span> 
                                        <span class="arr-itm">&rarr;</span>
                                    </a>
                                </div>
                            </div>
                            <div class="img-lk-less">
                                <a href="">
                                    <img class="img-lk-blt" src="./ownless/midia/html-css.jpg" alt="imagem-dev-web">
                                </a>
                            </div>
                        </div>

                        <div class="itm-blst-blck">
                            <div class="elem-trck">
                                <div class="sp-cnt-txt">
                                    <div class="tlt-intr">
                                        <h3 id="tli-elm-frd">Matemática</h3>
                                    </div>
                                    <div class="ctr-cnt-blst">
                                        <ul>
                                            <li class="el-itm-tli li-cnt">Ciênçia da computação <br> e Engenharia</li>
                                            <li class="el-itm-tli li-cnt">Simbologia da computação</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="blck-intr-cnt">
                                    <a class="btn-stb" href="./ownless/less/aulas/matematica/matematica-less.php">
                                        <span>Ver, ler mais, começar</span> 
                                        <span class="arr-itm">&rarr;</span>
                                    </a>
                                </div>
                            </div>
                            <div class="img-lk-less">
                                <a href="#">
                                    <img class="img-lk-blt" src="./ownless/midia/mat-on-img-lk.jpg" alt="imagem-matematica">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="end-itm">
                    <div class="end-itm-blst">
                        <div id="blast001" class="end-inone-blast end-blast">
                            <div class="conteiner-end-bls left-align">
                                <div id="hdd-clr-01" class="cnt-hdd-blst">
                                    <div class="end-txt-blst">
                                        <h3 class="txt-end-cnt tm-tlt">Defina os seus objectivos</h3>
                                        <p class="rsm-cnt-txt">
                                            Ao começar o apreendizado na nossa plataforma, terás que ter em menti oque prentedes fazer "desenvolver" depois de terminar o curso ou modulos que estiveste a estudar. Lebrando que apreender não so é reter a materia, mais colocar em prática os seus pontos de vista.
                                        </p>
                                    </div>
                                    <div>
                                        <a href="#" id="btn-clr-01" class="btn-imp-itm">
                                            <!--Planos e projectos a desenvolver-->
                                            Ler mais
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="img-cnt-bl">
                                <img class="cnt-img-blst" src="./ownless/midia/objectivos.png">
                            </div>
                        </div>

                        <div id="blast002" class="end-intwo-blast end-blast">
                            <div class="img-cnt-bl">
                                <img class="cnt-img-blst" src="./ownless/midia/potos-frt-frc.jpg" alt="">
                            </div>
                            <div class="conteiner-end-bls rigth-align">
                                <div id="hdd-clr-02" class="cnt-hdd-blst">
                                    <div class="end-txt-blst">
                                        <h3 class="txt-end-cnt">Conheça os seus pontos fortes e fracos</h3>
                                        <p class="rsm-cnt-txt">
                                            Ao começar a estudar e a construir projectos, terás que descobrir as suas fraquezas e motivações que te fazem apreender e criar ainda mais. Nê todo se consegue pela primeira tentativa, mais pelo esforço que tens nos seus fracansos.
                                        </p>
                                    </div>
                                    <div>
                                        <a href="#" id="btn-clr-02" class="btn-imp-itm">
                                            <!--Torne seus estudos uma prioridade-->
                                            Ler mais
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="blast003" class="end-inthre-blast end-blast">
                            <div class="conteiner-end-bls left-align">
                                <div id="hdd-clr-03" class="cnt-hdd-blst">
                                    <div class="end-txt-blst">
                                        <h3 class="txt-end-cnt">Estude em grupo</h3>
                                        <p class="rsm-cnt-txt">
                                            Seja um aluno capacitado a reconheçer os seus erros, ouvir, e aceitar a ajuda de outro. Um bom desenvolvedor de profissão, sempre precisa de ajuda para qualquer tipo de situações. Torne-se capacitado a pedir ajuda e ajudar, ou, receber criticas e corigir os erros.
                                        </p>
                                    </div>
                                    <div>
                                        <a href="#" id="btn-clr-03" class="btn-imp-itm">
                                            <!--Vocabulário de apreendizado cojuta-->
                                            Ler mais
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="img-cnt-bl">
                                <img class="cnt-img-blst" src="./ownless/midia/grupo-est.webp" alt="">
                            </div>
                        </div>

                        <div id="blast004" class="end-infour-blast end-blast">
                            <div class="img-cnt-bl">
                                <img class="cnt-img-blst" src="./ownless/midia/share-int.jpg" alt="">
                            </div>
                            <div class="conteiner-end-bls rigth-align">
                                <div id="hdd-clr-04" class="cnt-hdd-blst">
                                    <div class="end-txt-blst">
                                        <h3 class="txt-end-cnt">Compartilhe os seus conheçimentos</h3>
                                        <p class="rsm-cnt-txt">
                                            Pedir ajuda, não significa um fracasso, mais sim um avaço. Durante o percurso dos seus estudos iras impletar projectos que não só devem ser rescritas como partilhadas. Compartilhe os seus projectos para que saibas em qual caminho estás o seu esforço. Um bom proffissional sempre compartilha os seus trabalhos assim sabera oque é preciso para melhorar.
                                        </p>
                                    </div>
                                    <div>
                                        <a href="#" id="btn-clr-04" class="btn-imp-itm">
                                            <!--Caminhando o apreendizado-->
                                            Ler mais
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="windows">
                <div class="col-wn col-movwin">

                    <div id="cl-wn01" class="flip-card cl-wn">
                        <div class="flip-card-inner">
                            <div class="wn-txt col-01 front">
                                <img class="img-col-wn" src="./midia/img/elem/col-wn-01.jpg" alt="">
                            </div>
                            <div class="wn-txt col-02 back"><a href="">Ver</a></div>
                        </div>
                    </div>

                    <div id="cl-wn02" class="flip-card cl-wn">
                        <div class="flip-card-inner">
                            <div class="wn-txt col-01 front">
                                <img class="img-col-wn" src="./midia/img/elem/col-wn-02.jpg" alt="">
                            </div>
                            <div class="wn-txt col-02 back"><a href="">Ver</a></div>
                        </div>
                    </div>

                    <div id="cl-wn03" class="flip-card cl-wn">
                        <div class="flip-card-inner">
                            <div class="wn-txt col-01 front">
                                <img class="img-col-wn" src="./midia/img/elem/col-wn-03.jpg" alt="">
                            </div>
                            <div class="wn-txt col-02 back"><a href="">Ver</a></div>
                        </div>
                    </div>

                    <div id="cl-wn04" class="flip-card cl-wn">
                        <div class="flip-card-inner">
                            <div class="wn-txt col-01 front">
                                <img class="img-col-wn" src="./midia/img/elem/col-wn-04.jpg" alt="">
                            </div>
                            <div class="wn-txt col-02 back"><a href="">Ver</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-wn cnt-wn">
                    <div class="wn-tt-cnt cnt-wno">
                        <p>Imagine Crie e Desenvolva</p>
                        <section class="comp-wno">
                            <p>Começe a desenvolver o seu futuro com os novos cursos de tecnologias</p>
                        </section>
                    </div>
                    <div class="wn-tt-cnt cnt-wnw">
                        <a href="#" class="btn-new-les">começar</a>
                    </div>
                </div>
            </div>     
        </div>
    </main>
    <!--<footer>
        <div class="cnct-prop">
            <div class="propetario">
                <h5 class="tlt-ftr">Propietário</h5>
                <p>Rosálio Alexandre Xinai Milione</p>
            </div>
            <div class="contacto">
                <h5 class="tlt-ftr">Contato</h5>
                <ul>
                    <li style="margin-bottom: 5px;"><span class="int-ltr-cp"></span> <a class="whtsp" href="https://wa.me/qr/SMRDTRCEYQU2D1"><img src="./midia/img/icon/social/whatsapp.png" alt=""></a></li>
                </ul>
            </div>
        </div>
        <div class="copy-right">&copy; 2024 caracoLearn</div>
    </footer>-->
    
</body>
</html>