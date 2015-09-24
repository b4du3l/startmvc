<?php head();?>

    <div class="container-fluid">
    <div class="row">    
        <?php include ('views/interfaces/almacenista/alhghh_navegador.php'); ?>

        <div class="col-xs-12 col-sm-8 col-md-8">
   
        
            
              <div class="container-fluid">
                
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </div>
                
               

                            <form action="" method="GET" class="navbar-form navbar-right" role="search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="C&oacute;digo Articulo" id="query" name="" value="">
                                        <div class="input-group-btn">
                                    <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-search"></span></button>
                                    </div>
                                </div>
                            </form>
            
              </div>
           

                <br>

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
                        <td id="ordenar-por"><b><form method="GET" action="#tablas"><input type="hidden" name="seleccionada" value="1"><input type="submit" style="border:0; background-color:rgba(235, 235, 235, 1);" value="ARTICULO"></form></b></td>
                        <td id="ordenar-por"><b><form method="GET" action="#tablas"><input type="hidden" name="seleccionada" value="2"><input type="submit" style="border:0; background-color:rgba(235, 235, 235, 1);" value="PRECIO"></form></b></td>
                        <td id="ordenar-por"><b><form method="GET" action="#tablas"><input type="hidden" name="seleccionada" value="3"><input type="submit" style="border:0; background-color:rgba(235, 235, 235, 1);" value="FAMILIA"></form></b></td>
                        <td id="ordenar-por"><b><form method="GET" action="#tablas"><input type="hidden" name="seleccionada" value="4"><input type="submit" style="border:0; background-color:rgba(235, 235, 235, 1);" value="MARCA"></form></b></td>
                        <td id="ordenar-por"><b><form method="GET" action="#tablas"><input type="hidden" name="seleccionada" value="5"><input type="submit" style="border:0; background-color:rgba(235, 235, 235, 1);" value="USO"></form></b></td>
                        <td id="ordenar-por"><b><form method="GET" action="#tablas"><input type="hidden" name="seleccionada" value="6"><input type="submit" style="border:0; background-color:rgba(235, 235, 235, 1);" value="DESCRIP."></form></b></td>
                        <td id="ordenar-por"><b><form method="GET" action="#tablas"><input type="hidden" name="seleccionada" value="7"><input type="submit" style="border:0; background-color:rgba(235, 235, 235, 1);" value="DCTO."></form></b></td>
                        <td id="ordenar-por"><b><form method="GET" action="#tablas"><input type="hidden" name="seleccionada" value="8"><input type="submit" style="border:0; background-color:rgba(235, 235, 235, 1);" value="INGRESO"></form></b></td>
                        <td id="ordenar-por"><b><form method="GET" action="#tablas"><input type="hidden" name="seleccionada" value="9"><input type="submit" style="border:0; background-color:rgba(235, 235, 235, 1);" value="VENC."></form></b></td>
                     </tr>

                



                <?php


                for($example=25; $example>0; $example--)
                {   
                    echo '<tr>';
                    
                    echo '<td>'.$No.'</td>';
                    if($ordenar==1){$d="ordenar-por";} else {$d=$ordenar;}
                    echo '<td id="'.$d.'">'.$cod.'</td>';
                    if($ordenar==2){$d="ordenar-por";} else {$d=$ordenar;}
                    echo '<td id="'.$d.'">'.'12.000'.'</td>';
                    if($ordenar==3){$d="ordenar-por";} else {$d=$ordenar;}
                    echo '<td id="'.$d.'">'.'zapatos'.'</td>';
                    if($ordenar==4){$d="ordenar-por";} else {$d=$ordenar;}
                    echo '<td id="'.$d.'">'.'Gucci'.'</td>';
                    if($ordenar==5){$d="ordenar-por";} else {$d=$ordenar;}
                    echo '<td id="'.$d.'">'.'hombre'.'</td>';
                    if($ordenar==6){$d="ordenar-por";} else {$d=$ordenar;}
                    echo '<td id="'.$d.'">'.'mocasines'.'</td>';
                    if($ordenar==7){$d="ordenar-por";} else {$d=$ordenar;}
                    echo '<td id="'.$d.'">'.'30%'.'</td>';
                    if($ordenar==8){$d="ordenar-por";} else {$d=$ordenar;}
                    echo '<td id="'.$d.'">'.'12 - jul 2015'.'</td>';
                    if($ordenar==9){$d="ordenar-por";} else {$d=$ordenar;}
                    echo '<td id="'.$d.'">'.'N/A'.'</td>';
                    
                    echo '</tr>';

                    $No++;
                    $cant--;
                    $cod--;
                }


                echo '</table>';

                ?>

                </div><!-- el div del codigo php que esta despues del nav y el article -->


                
                
                    <div style="height:30px; float:none; clear:both;"></div>
                    <?php include('views/comun/cahkhh_paginacion_cajero.php'); ?>
                    <div style="height:35px; float:none; clear:both;"></div>
            </div>
    </div>    
    </div>

<?php footer(); ?>