<?php include ('aahihh_head.php'); ?>

    <div class="container-fluid">
    <div class="row">    
        <?php include ('cahghh_navegador.php'); ?>

        <div class="col-xs-12 col-sm-8 col-md-8" style="margin-top:1px;">
   
                


                <div id="tablas">



 
                <?php


                
                if (!isset($_GET['factura']))
                    {
                        $_GET['factura']=1;
                    }

            
                $ordenar=$_GET['factura'];

                


                $d="ordenar-por";


                $col=1;
                $codfact=65452;
                $example=25;

                ?>



                

                 <table width=100% border="1" class="tabla_ventas">
                      <tr>
                          <td><b>ID</b></td>
                          <td id="ordenar-por"><b><form method="GET" action="#tablas"><input type="hidden" name="factura" value="1"><input type="submit" style="border:0; background-color:rgba(235, 235, 235, 1);" value="FACTURA"></form></b></td>
                          <td id="ordenar-por"><b><form method="GET" action="#tablas"><input type="hidden" name="factura" value="2"><input type="submit" style="border:0; background-color:rgba(235, 235, 235, 1);" value="VALOR"></form></b></td>
                          <td id="ordenar-por"><b><form method="GET" action="#tablas"><input type="hidden" name="factura" value="3"><input type="submit" style="border:0; background-color:rgba(235, 235, 235, 1);" value="CLIENTE"></form></b></td>
                          <td id="ordenar-por"><b><form method="GET" action="#tablas"><input type="hidden" name="factura" value="4"><input type="submit" style="border:0; background-color:rgba(235, 235, 235, 1);" value="FECHA"></form></b></td>
                          <td><b>Hora</b></td>
                      </tr>
                    



                <?php

                for($example=25; $example>0; $example--)
                {   
                    
                    echo '<tr>';
                    
                    echo '<td>'.$col.'</td>';
                    if($ordenar==1){$d="ordenar-por";} else {$d=$ordenar;}
                    echo '<td id="'.$d.'"><a href="gehihh_ver_factura.php">'.$codfact.'</a></td>';
                    if($ordenar==2){$d="ordenar-por";} else {$d=$ordenar;}
                    echo '<td id="'.$d.'">'.'102.000'.'</td>';
                    if($ordenar==3){$d="ordenar-por";} else {$d=$ordenar;}
                    echo '<td id="'.$d.'">'.'Maria Minaj Cassiani'.'</td>';
                    if($ordenar==4){$d="ordenar-por";} else {$d=$ordenar;}
                    echo '<td id="'.$d.'">'.'Hoy'.'</td>';
                    echo '<td>'.'6:18 pm'.'</td>';

                    echo '</tr>';
                    
                    $col++;
                    $codfact--;

                }

                echo '</table>';

                ?>

                </div><!-- el div del codigo php que esta despues del nav y el article -->



                <div style="height:75px; float:none; clear:both;"></div>
                    <?php include('cahkhh_paginacion_cajero.php'); ?>
                    <div style="height:35px; float:none; clear:both;"></div>
            </div>
    </div>    
    </div>

<?php include ('aayyhh_footer.php'); ?>