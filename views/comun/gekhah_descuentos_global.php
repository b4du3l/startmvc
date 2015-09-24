<?php include ('aahihh_head.php'); ?>

    <div class="container-fluid">
    <div class="row">    
        <?php include ('gehghh_navegador.php'); ?>

        <div class="col-xs-12 col-sm-8 col-md-8" style="margin-top:25px;">
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">
                        <section class="col-xs-7 col-sm-7 col-md-7">
                        </section>
                            
                        <section class="col-xs-5 col-sm-3 col-md-1 col-xs-offset-7 col-sm-offset-9 col-md-offset-11">
                            <form method="GET" action="gekhch_descuentos_global_pais.php">
                                <button type="submit" class="btn btn-primary">Nuevo descuento</button>
                            </form>
                        </section>
                    </div>
                    <article style="height:40px; float:none; clear:both;"></article>
                     

                    <div class="col-xs-12 col-sm-12 col-md-12">


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
                        <td id="ordenar-por"><b><form method="GET" action="#tablas"><input type="hidden" name="seleccionada" value="1"><input type="submit" style="border:0; background-color:rgba(235, 235, 235, 1);" value="DESCUENTO"></form></b></td>
                        <td id="ordenar-por"><b><form method="GET" action="#tablas"><input type="hidden" name="seleccionada" value="2"><input type="submit" style="border:0; background-color:rgba(235, 235, 235, 1);" value="INICIO"></form></b></td>
                        <td id="ordenar-por"><b><form method="GET" action="#tablas"><input type="hidden" name="seleccionada" value="3"><input type="submit" style="border:0; background-color:rgba(235, 235, 235, 1);" value="FIN"></form></b></td>
                        <td id="ordenar-por"><b><form method="GET" action="#tablas"><input type="hidden" name="seleccionada" value="4"><input type="submit" style="border:0; background-color:rgba(235, 235, 235, 1);" value="LOTE"></form></b></td>
                        <td id="ordenar-por"><b><form method="GET" action="#tablas"><input type="hidden" name="seleccionada" value="5"><input type="submit" style="border:0; background-color:rgba(235, 235, 235, 1);" value="FAMILIA"></form></b></td>
                        <td id="ordenar-por"><b><form method="GET" action="#tablas"><input type="hidden" name="seleccionada" value="6"><input type="submit" style="border:0; background-color:rgba(235, 235, 235, 1);" value="MARCA"></form></b></td>
                        <td id="ordenar-por"><b><form method="GET" action="#tablas"><input type="hidden" name="seleccionada" value="7"><input type="submit" style="border:0; background-color:rgba(235, 235, 235, 1);" value="USO"></form></b></td>
                        <td id="ordenar-por"><b><form method="GET" action="#tablas"><input type="hidden" name="seleccionada" value="8"><input type="submit" style="border:0; background-color:rgba(235, 235, 235, 1);" value="DESCRIPCIÓN"></form></b></td>
                        <td id="ordenar-por"><b><form method="GET" action="#tablas"><input type="hidden" name="seleccionada" value="9"><input type="submit" style="border:0; background-color:rgba(235, 235, 235, 1);" value="ACTIVOS"></form></b></td>
                        <td id="ordenar-por"><b><form method="GET" action="#tablas"><input type="hidden" name="seleccionada" value="10"><input type="submit" style="border:0; background-color:rgba(235, 235, 235, 1);" value="VENDIDOS"></form></b></td>
                        <td id="ordenar-por"><b><form method="GET" action="#tablas"><input type="hidden" name="seleccionada" value="11"><input type="submit" style="border:0; background-color:rgba(235, 235, 235, 1);" value="VENC. DESDE"></form></b></td>
                        <td id="ordenar-por"><b><form method="GET" action="#tablas"><input type="hidden" name="seleccionada" value="12"><input type="submit" style="border:0; background-color:rgba(235, 235, 235, 1);" value="VENC. HASTA"></form></b></td>
                      </tr>
                


                <?php


                for($example=25; $example>0; $example--)
                {   
                    echo '<tr>';
                    
                    echo '<td>'.$No.'</td>';
                    if($ordenar==1){$d="ordenar-por";} else {$d=$ordenar;}
                    echo '<td id="'.$d.'">'.'blackfriday'.'</td>';
                    if($ordenar==2){$d="ordenar-por";} else {$d=$ordenar;}
                    echo '<td id="'.$d.'">'.'15 - ago 2015'.'</td>';
                    if($ordenar==3){$d="ordenar-por";} else {$d=$ordenar;}
                    echo '<td id="'.$d.'">'.'15 - ago 2015'.'</td>';
                    if($ordenar==4){$d="ordenar-por";} else {$d=$ordenar;}
                    echo '<td id="'.$d.'">'.'1414'.'</td>';
                    if($ordenar==5){$d="ordenar-por";} else {$d=$ordenar;}
                    echo '<td id="'.$d.'">'.'zapatos'.'</td>';
                    if($ordenar==6){$d="ordenar-por";} else {$d=$ordenar;}
                    echo '<td id="'.$d.'">'.'Gucci'.'</td>';
                    if($ordenar==7){$d="ordenar-por";} else {$d=$ordenar;}
                    echo '<td id="'.$d.'">'.'hombre'.'</td>';
                    if($ordenar==8){$d="ordenar-por";} else {$d=$ordenar;}
                    echo '<td id="'.$d.'">'.'mocasines'.'</td>';
                    if($ordenar==9){$d="ordenar-por";} else {$d=$ordenar;}
                    echo '<td id="'.$d.'">'.'157'.'</td>';
                    if($ordenar==10){$d="ordenar-por";} else {$d=$ordenar;}
                    echo '<td id="'.$d.'">'.'23'.'</td>';
                    if($ordenar==11){$d="ordenar-por";} else {$d=$ordenar;}
                    echo '<td id="'.$d.'">'.'N/A'.'</td>';
                    if($ordenar==12){$d="ordenar-por";} else {$d=$ordenar;}
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
                    <?php include('cahkhh_paginacion_cajero.php'); ?>
                    <div style="height:35px; float:none; clear:both;"></div>

                </div>
                

                </div>
        </div>

    </div>
    </div>

<?php include ('aayyhh_footer.php'); ?>    







