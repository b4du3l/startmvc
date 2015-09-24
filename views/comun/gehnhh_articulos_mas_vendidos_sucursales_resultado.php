<?php include ('aahihh_head.php'); ?>

    <div class="container-fluid">
    <div class="row">    
        <?php include ('gehghh_navegador.php'); ?>

        <div class="col-xs-12 col-sm-8 col-md-8">
   
                <article style="height:1px; float:none; clear:both;"></article> <!--solo para dar espacio -->
                
                <div id="tablas">

                <?php

                if (!isset($_GET['seleccionada']))
                    {
                        $_GET['seleccionada']=1;
                    }

            
                $ordenar=$_GET['seleccionada'];

                


                $d="ordenar-por";



                $No=1;

                $cant=0;

                $codFact=754631;

                $example=25;

                ?>




                  <table width=100% border="1" class="tabla_ventas">
                      <tr> 
                          <td><b>ID</b></td>
                          <td id="ordenar-por"><b><form method="GET" action="#tablas"><input type="hidden" name="seleccionada" value="1"><input type="submit" style="border:0; background-color:rgba(235, 235, 235, 1);" value="FAMILIA"></form></b></td>
                          <td id="ordenar-por"><b><form method="GET" action="#tablas"><input type="hidden" name="seleccionada" value="2"><input type="submit" style="border:0; background-color:rgba(235, 235, 235, 1);" value="MARCA"></form></b></td>
                          <td id="ordenar-por"><b><form method="GET" action="#tablas"><input type="hidden" name="seleccionada" value="3"><input type="submit" style="border:0; background-color:rgba(235, 235, 235, 1);" value="GENERO"></form></b></td>
                          <td id="ordenar-por"><b><form method="GET" action="#tablas"><input type="hidden" name="seleccionada" value="4"><input type="submit" style="border:0; background-color:rgba(235, 235, 235, 1);" value="DESCRIP."></form></b></td>
                          <td id="ordenar-por"><b><form method="GET" action="#tablas"><input type="hidden" name="seleccionada" value="5"><input type="submit" style="border:0; background-color:rgba(235, 235, 235, 1);" value="CANT."></form></b></td>
                          <td id="ordenar-por"><b><form method="GET" action="#tablas"><input type="hidden" name="seleccionada" value="6"><input type="submit" style="border:0; background-color:rgba(235, 235, 235, 1);" value="UNIT."></form></b></td>
                          <td id="ordenar-por"><b><form method="GET" action="#tablas"><input type="hidden" name="seleccionada" value="7"><input type="submit" style="border:0; background-color:rgba(235, 235, 235, 1);" value="TODOS"></form></b></td>
                          <td id="ordenar-por"><b><form method="GET" action="#tablas"><input type="hidden" name="seleccionada" value="8"><input type="submit" style="border:0; background-color:rgba(235, 235, 235, 1);" value="CLIENTE"></form></b></td>
                          <td id="ordenar-por"><b><form method="GET" action="#tablas"><input type="hidden" name="seleccionada" value="9"><input type="submit" style="border:0; background-color:rgba(235, 235, 235, 1);" value="DCTOS."></form></b></td>
                          <td id="ordenar-por"><b><form method="GET" action="#tablas"><input type="hidden" name="seleccionada" value="10"><input type="submit" style="border:0; background-color:rgba(235, 235, 235, 1);" value="VENDIDO"></form></b></td>
                       </tr>
                



                <?php


                for($example=25; $example>0; $example--)
                {   
                    echo '<tr>';
                    
                    echo '<td>'.$No.'</td>';
                    if($ordenar==1){$d="ordenar-por";} else {$d=$ordenar;}
                    echo '<td id="'.$d.'">'.'Sandalias'.'</td>';
                    if($ordenar==2){$d="ordenar-por";} else {$d=$ordenar;}
                    echo '<td id="'.$d.'">'.'Crocks'.'</td>';
                    if($ordenar==3){$d="ordenar-por";} else {$d=$ordenar;}
                    echo '<td id="'.$d.'">'.'Mujer'.'</td>';
                    if($ordenar==4){$d="ordenar-por";} else {$d=$ordenar;}
                    echo '<td id="'.$d.'">'.'deportivas'.'</td>';
                    if($ordenar==5){$d="ordenar-por";} else {$d=$ordenar;}
                    echo '<td id="'.$d.'">'.$cant.'</td>';
                    if($ordenar==6){$d="ordenar-por";} else {$d=$ordenar;}
                    echo '<td id="'.$d.'">'.'10.000'.'</td>';
                    if($ordenar==7){$d="ordenar-por";} else {$d=$ordenar;}
                    echo '<td id="'.$d.'">'.'400.000'.'</td>';
                    if($ordenar==8){$d="ordenar-por";} else {$d=$ordenar;}
                    echo '<td id="'.$d.'">'.'Maria Minaj Cassiani'.'</td>';
                    if($ordenar==9){$d="ordenar-por";} else {$d=$ordenar;}
                    echo '<td id="'.$d.'">'.'50%(10) - 30%(4) - 0%(2)'.'</td>';
                    if($ordenar==10){$d="ordenar-por";} else {$d=$ordenar;}
                    echo '<td id="'.$d.'">'.'Hoy'.'</td>';
                    
                    echo '</tr>';

                    $No++;
                    $cant++;
                    $codFact--;
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

<?php include ('aayyhh_footer.php'); ?>