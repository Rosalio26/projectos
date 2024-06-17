<?php 
   require "../header.php";
?>

<?php 
  $cssFile ="../style/sala.css";
  echo "<link rel='stylesheet' href='" . $cssFile . "'>";
?>

<div class="content row">
    <div class="grid-container">
        <div class="left">
            <h2>Sala</h2>
            <div class="container">
                <ul class="redy-content">
                    <li><a href="?page=aula">Aula</a></li>
                    <li><a href="?page=disciplina">Disciplinas</a></li>
                    <li><a href="?page=actividade">Actividades</a></li>
                    <li><a href="?page=grupo">Grupos</a></li>
                    <li><a href="?page=galeria">Galeria</a></li>
                </ul>
            </div>
        </div>
        <div class="right">
            <div class="top">
              <div class="info-user">
                <div class="cont-info-user"><p>Usuario não logado <span>Registra-se ou faz Login para ver os conteudos</span></p></div>
              </div>
            </div>

            <div class="bottom">
                <?php 
                  switch(@$_REQUEST["page"]) {
                    case "aula":
                      include("category/aula/aula.php");
                    break;

                    case "disciplina":
                        include("category/disciplina.php");
                    break;

                      case "actividade":
                        include("category/actividade.php");
                    break;

                    case "grupo":
                        include("category/grupo.php");
                      break;

                    case "galeria":
                        include("category/galeria.php");
                    break;

                    default: 
                      echo '
                      <div class="ho-ke-yu">
                        <div class="item-general">
                          <div class="welcm-itm">
                            <div class="text-itm">
                              <p class="txt-itm-one gen-txt-conf"><canvas id="myCanvaT"></canvas></p>
                              <p class="txt-itm-two gen-txt-conf">Explore o seu melhor</p>
                              <p class="txt-itm-tree gen-txt-conf">Conheça os seus fortes</p>
                              <canvas id="myCanvas"></canvas>
                            </div>
                            <div class="tria-img">
                            </div>
                          </div>
                          <div class="itm-on-blck">
                          </div>
                        </div>
                        <script>
                          const co = document.getElementById("myCanvaT");
                          const cTx = co.getContext("2d");

                          // Create linear gradient
                          const grad=cTx.createLinearGradient(0,0,280,0);
                          grad.addColorStop(1, "#fbc089");
                          grad.addColorStop(0, "#ff7b00");

                          // Fill text with gradient
                          cTx.font = "20pt Arial";
                          cTx.fillStyle = grad;
                          cTx.fillText("Inspire o seu potêncial",0,40);
                        </script>
                        <script>
                          const canvas = document.getElementById("myCanvas");
                          const ctx = canvas.getContext("2d");

                          ctx.beginPath();
                          ctx.arc(9, 0, 130, 0, Math.PI);
                          ctx.fillStyle = "#ff990041";
                          ctx.fill();
                          ctx.stroke("none");
                        </script>

                        <div class="block-content-section bcn-stn">
                          <div class="block-itm-col one-col-glr">
                            <h4> Aula </h4>
                            <p>Conheça as melhores materias que preparamos para tim!</p>
                            <div>
                              <div class="itm-blck-cng">
                                <h5>Ciênçias</h5>
                                <div class="block-scie">
                                  <div class="itm-scie">
                                    <img src="midia/img/" alt=""></img>
                                  </div>
                                  <!--<div class="itm-scie"></div>
                                  <div class="itm-scie"></div>
                                  <div class="itm-scie"></div>
                                  <div class="itm-scie"></div>
                                  <div class="itm-scie"></div>-->
                                </div>
                              </div>

                              <div class="itm-blck-cng>
                                <h5>Literatura</h5>

                                <div class="block-lyr">
                                  <div class="itm-lyr"></div>
                                  <div class="itm-lyr"></div>
                                  <div class="itm-lyr"></div>
                                  <div class="itm-lyr"></div>
                                  <div class="itm-lyr"></div>
                                  <div class="itm-lyr"></div>
                                  <div class="itm-lyr"></div>
                                  <div class="itm-lyr"></div>
                                  <div class="itm-lyr"></div>
                                  <div class="itm-lyr"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!--<div>
                            <h4>Disciplinas</div>
                          </div>
                          <div>
                            <h4>Actividades</h4>
                          </div>
                          <div>
                            <h4>Galeria</h4>
                          </div>-->
                        </div>
                      ';
                      echo '
                      <div class="add-less-ar">
                        <div class="btn-add-less">
                          <span class="itm-plus">+</span><span><input class="btn-cnt" type="button" value="Add aula"></span>
                        </div>

                        <div class="form-cad-aula">
                          <div class="row-cad-aula">
                            <div class="col-cad-aula">
                              <h4>Nova Aula</h4>

                              <form action="category/aula/form_regnew_less.php" method="POST">
                                <div class="btn-send">
                                  <button type="submit">Enviar</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>'
                    ;
                  }
                ?>
            </div>
        </div>
    </div>
</div>