<?php include ('aahihh_head.php'); ?>

    <div class="container-fluid">
    <div class="row">    
        <?php include ('gehghh_navegador.php'); ?>

        <div class="col-xs-12 col-sm-8 col-md-8" style="margin-top:1px;">
   
            
            <nav class="navbar navbar-default">
              <div class="container-fluid">
                
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </div>
                
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                    </ul>
                            <form action="" method="GET" class="navbar-form navbar-right" role="search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Número de identificación" id="query" name="" value="">
                                        <div class="input-group-btn">
                                    <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-search"></span></button>
                                    </div>
                                </div>
                            </form>
                </div>
              </div>
            </nav>




                <div id="tablas">


                <?php 
                

                 if (!isset($_GET['seleccionada']))
                    {
                        $_GET['seleccionada']=1;
                    }

            
                $ordenar=$_GET['seleccionada'];

                


                $d="ordenar-por";


                $No=1;

                $cant=100;

                $cod=754631;

                $example=25;

                ?>


                <table width=100% border="1" class="tabla_ventas">
                    <tr> 
                        <td><b>ID</b></td>
                        <td id="ordenar-por"><b><form method="GET" action="#tablas"><input type="hidden" name="seleccionada" value="1"><input type="submit" style="border:0; background-color:rgba(235, 235, 235, 1);" value="IDENTIFICACIÓN"></form></b></td>
                        <td id="ordenar-por"><b><form method="GET" action="#tablas"><input type="hidden" name="seleccionada" value="2"><input type="submit" style="border:0; background-color:rgba(235, 235, 235, 1);" value="NOMBRE"></form></b></td>
                        <td id="ordenar-por"><b><form method="GET" action="#tablas"><input type="hidden" name="seleccionada" value="3"><input type="submit" style="border:0; background-color:rgba(235, 235, 235, 1);" value="APELLIDOS"></form></b></td>
                        <td id="ordenar-por"><b><form method="GET" action="#tablas"><input type="hidden" name="seleccionada" value="4"><input type="submit" style="border:0; background-color:rgba(235, 235, 235, 1);" value="PAÍS"></form></b></td>
                        <td id="ordenar-por"><b><form method="GET" action="#tablas"><input type="hidden" name="seleccionada" value="5"><input type="submit" style="border:0; background-color:rgba(235, 235, 235, 1);" value="CIUDAD"></form></b></td>
                        <td id="ordenar-por"><b><form method="GET" action="#tablas"><input type="hidden" name="seleccionada" value="6"><input type="submit" style="border:0; background-color:rgba(235, 235, 235, 1);" value="ZONA"></form></b></td>
                        <td id="ordenar-por"><b><form method="GET" action="#tablas"><input type="hidden" name="seleccionada" value="7"><input type="submit" style="border:0; background-color:rgba(235, 235, 235, 1);" value="DIRECCIÓN"></form></b></td>
                        <td id="ordenar-por"><b><form method="GET" action="#tablas"><input type="hidden" name="seleccionada" value="8"><input type="submit" style="border:0; background-color:rgba(235, 235, 235, 1);" value="TELÉFONO"></form></b></td>
                        <td id="ordenar-por"><b><form method="GET" action="#tablas"><input type="hidden" name="seleccionada" value="9"><input type="submit" style="border:0; background-color:rgba(235, 235, 235, 1);" value="E-MAIL"></form></b></td>
                    </tr>
                
                
                




                <?php

                for($example=25; $example>0; $example--)
                {   
                    echo '<tr>';
                    
                    echo '<td>'.$No.'</td>';
                    if($ordenar==1){$d="ordenar-por";} else {$d=$ordenar;}
                    echo '<td id="'.$d.'">'.'1047366496'.'</td>';
                    if($ordenar==2){$d="ordenar-por";} else {$d=$ordenar;}
                    echo '<td id="'.$d.'">'.'Alberto'.'</td>';
                    if($ordenar==3){$d="ordenar-por";} else {$d=$ordenar;}
                    echo '<td id="'.$d.'">'.'Casas Santamaria'.'</td>';
                    if($ordenar==4){$d="ordenar-por";} else {$d=$ordenar;}
                    echo '<td id="'.$d.'">'.'Colombia'.'</td>';
                    if($ordenar==5){$d="ordenar-por";} else {$d=$ordenar;}
                    echo '<td id="'.$d.'">'.'Cartagena'.'</td>';
                    if($ordenar==6){$d="ordenar-por";} else {$d=$ordenar;}
                    echo '<td id="'.$d.'">'.'Castillo'.'</td>';
                    if($ordenar==7){$d="ordenar-por";} else {$d=$ordenar;}
                    echo '<td id="'.$d.'">'.'Cll 10 No. 48 - 14'.'</td>';
                    if($ordenar==8){$d="ordenar-por";} else {$d=$ordenar;}
                    echo '<td id="'.$d.'">'.'3015978454'.'</td>';
                    if($ordenar==9){$d="ordenar-por";} else {$d=$ordenar;}
                    echo '<td id="'.$d.'">'.'alcasa23@unicartagena.edu.co'.'</td>';
                    
                    echo '</tr>';

                    $No++;
                    $cant--;
                    $cod--;
                }

                echo '</table>';

                ?>


                </div><!-- el div tablas, que esta despues del nav y el article -->




                    <div style="height:30px; float:none; clear:both;"></div>
                    <?php include('cahkhh_paginacion_cajero.php'); ?>
                    <div style="height:35px; float:none; clear:both;"></div>
            </div>
    </div>    
    </div>

<?php include ('aayyhh_footer.php'); ?>