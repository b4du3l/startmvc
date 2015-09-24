<?php include ('aahihh_head.php'); ?>

    <div class="container-fluid">
    <div class="row">    
        <?php include ('cahghh_navegador.php'); ?>

        <div class="col-xs-12 col-sm-8 col-md-8" style="margin-top:1px;">
   
            
            <nav class="navbar navbar-default" >
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
                    <section class="col-xs-6 col-sm6 col-md-6">
                    <ul class="nav navbar-nav">
                        <li><a href="cahihh_cajero_main_establecer_rango_consulta.php">Establecer rango de la consulta</a></li>
                    </ul>
                    </section>

                    <section class="col-xs-6 col-sm6 col-md-6">
                            <article style="height:12px; float:none; clear:both;"></article> <!--solo para dar espacio -->        
                            <form action="" method="GET" class="navbar-form navbar-right" role="search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="C&oacute;digo factura" id="query" name="" value="">
                                        <div class="input-group-btn">
                                        <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-search"></span></button>
                                    </div>
                                </div>
                            </form>
                    </section>        
                </div>
              </div>
            </nav>

                <article style="height:14px; float:none; clear:both;"></article> <!--solo para dar espacio -->


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


                
                <div style="height:35px; float:none; clear:both;"></div>
                    <?php include('cahkhh_paginacion_cajero.php'); ?>
                    <div style="height:35px; float:none; clear:both;"></div>
            </div>
    </div>    
    </div>

<?php include ('aayyhh_footer.php'); ?>