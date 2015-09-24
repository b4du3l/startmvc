<?php include ('aahihh_head.php'); ?>

    <div class="container-fluid">
    <div class="row">    
        <?php include ('gehghh_navegador.php'); ?>

        <div class="col-xs-12 col-sm-8 col-md-8" style="margin-top:5px;">
            
              <div class="container-fluid">








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

                $example=2;

                ?>


                <table width=100% border="1" class="tabla_ventas">
                    <tr> 
                        <td><b>ID</b></td>
                        <td id="ordenar-por"><b><form method="GET" action="#tablas"><input type="hidden" name="seleccionada" value="1"><input type="submit" style="border:0; background-color:rgba(235, 235, 235, 1);" value="Sucursal"></form></b></td>
                        <td id="ordenar-por"><b><form method="GET" action="#tablas"><input type="hidden" name="seleccionada" value="2"><input type="submit" style="border:0; background-color:rgba(235, 235, 235, 1);" value="Tipo Usuario"></form></b></td>
                        <td id="ordenar-por"><b><form method="GET" action="#tablas"><input type="hidden" name="seleccionada" value="3"><input type="submit" style="border:0; background-color:rgba(235, 235, 235, 1);" value="Cantidad"></form></b></td>
                        <td id="ordenar-por"><b><form method="GET" action="#tablas"><input type="hidden" name="seleccionada" value="4"><input type="submit" style="border:0; background-color:rgba(235, 235, 235, 1);" value="Creado"></form></b></td>
                    </tr>
                
                
                




                <?php

                for($example=2; $example>0; $example--)
                {   
                    echo '<tr>';
                    
                    echo '<td>'.$No.'</td>';
                    if($ordenar==1){$d="ordenar-por";} else {$d=$ordenar;}
                    echo '<td id="'.$d.'">'.'Bogotá Chapinero cll 25 No. 12-58'.'</td>';
                    if($ordenar==2){$d="ordenar-por";} else {$d=$ordenar;}
                    echo '<td id="'.$d.'">'.'gerente'.'</td>';
                    if($ordenar==3){$d="ordenar-por";} else {$d=$ordenar;}
                    echo '<td id="'.$d.'">'.'1'.'</td>';
                    if($ordenar==4){$d="ordenar-por";} else {$d=$ordenar;}
                    echo '<td id="'.$d.'">'.'12-may-2015'.'</td>';
                    
                    echo '</tr>';

                    $No++;
                    $cant--;
                    $cod--;
                }

                echo '</table>';

                ?>


                </div><!-- el div tablas, que esta despues del nav y el article -->



                <br>

                <table width=100% border='1' class="tabla_ventas">
                    <tr>
                        <td><b>Usuarios contratados</b></td>
                        <td><b>2</b></td>
                    </tr>
                </table>

                <div style="height:84px; float:none; clear:both;"></div>
            </div>
    </div>    
    </div>

<?php include ('aayyhh_footer.php'); ?>