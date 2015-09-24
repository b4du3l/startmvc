<?php include ('aahihh_head.php'); ?>

    <div class="container-fluid">
    <div class="row">    
        <?php include ('adhghh_navegador.php'); ?>

        <div class="col-xs-12 col-sm-8 col-md-8 fondo-azul">
   
            <br><br>
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
                        <li><a href="adhlkh_establecer_rango_consulta_sucursales.php">Establecer rango de la consulta</a></li>
                    </ul>
                          
                            <div style="height:5px;"></div> <!--unicamente para hacer espacio-->
                            <form action="" method="GET" class="navbar-form navbar-right" role="search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="C&oacute;digo factura" id="query" name="query" value="">
                                        <div class="input-group-btn">
                                    <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-search"></span></button>
                                    </div>
                                </div>
                            </form>
                </div>
              </div>
            </nav>

                <br>
                <table width=100% border='1' class="tabla_ventas">
                    <tr>
                        <td id="ordenar-por"><b>Factura</b></td>
                        <td id="ordenar-por"><b>Valor</b></td>
                        <td id="ordenar-por"><b>Cliente</b></td>
                        <td id="ordenar-por"><b>Fecha</b></td>
                        <td><b>Hora</b></td>
                    </tr>
                    <tr>
                        <td id="ordenar-por"><a href="#">65452</a></td>
                        <td>102.000</td>
                        <td>Maria Minaj Casianni</td>
                        <td>Hoy</td>
                        <td>06:18 pm</td>
                    </tr>
                    <tr>
                        <td id="ordenar-por"><a href="#">65451</a></td>
                        <td>102.000</td>
                        <td>Maria Minaj Casianni</td>
                        <td>Hoy</td>
                        <td>04:16 pm</td>
                    </tr>
                    <tr>
                        <td id="ordenar-por"><a href="#">65450</a></td>
                        <td>102.000</td>
                        <td>Maria Minaj Casianni</td>
                        <td>Hoy</td>
                        <td>01:43 pm</td>
                    </tr>
                    <tr>
                        <td id="ordenar-por"><a href="#">65449</a></td>
                        <td>102.000</td>
                        <td>Maria Minaj Casianni</td>
                        <td>Hoy</td>
                        <td>11:24 am</td>
                    </tr>
                    <tr>
                        <td id="ordenar-por"><a href="#">65448</a></td>
                        <td>102.000</td>
                        <td>Maria Minaj Casianni</td>
                        <td>Hoy</td>
                        <td>09:49 am</td>
                    </tr>
                    <tr>
                        <td id="ordenar-por"><a href="#">65447</a></td>
                        <td>102.000</td>
                        <td>Maria Minaj Casianni</td>
                        <td>ayer</td>
                        <td>06:59 pm</td>
                    </tr>
                    <tr>
                        <td id="ordenar-por"><a href="#">65446</a></td>
                        <td>102.000</td>
                        <td>Maria Minaj Casianni</td>
                        <td>ayer</td>
                        <td>06:45 pm</td>
                    </tr>
                    <tr>
                        <td id="ordenar-por"><a href="#">65445</a></td>
                        <td>102.000</td>
                        <td>Maria Minaj Casianni</td>
                        <td>ayer</td>
                        <td>05:33 pm</td>
                    </tr>
                    <tr>
                        <td id="ordenar-por"><a href="#">65444</a></td>
                        <td>102.000</td>
                        <td>Maria Minaj Casianni</td>
                        <td>ayer</td>
                        <td>11:56 am</td>
                    </tr>
                    <tr>
                        <td id="ordenar-por"><a href="#">65443</a></td>
                        <td>102.000</td>
                        <td>Maria Minaj Casianni</td>
                        <td>ayer</td>
                        <td>10:11 am</td>
                    </tr>
                    <tr>
                        <td id="ordenar-por"><a href="#">65442</a></td>
                        <td>102.000</td>
                        <td>Maria Minaj Casianni</td>
                        <td>ayer</td>
                        <td>08:23 am</td>
                    </tr>
                    <tr>
                        <td id="ordenar-por"><a href="#">65441</a></td>
                        <td>102.000</td>
                        <td>Maria Minaj Casianni</td>
                        <td>12-ago-2015</td>
                        <td>07:57 pm</td>
                    </tr>
                    <tr>
                        <td id="ordenar-por"><a href="#">65440</a></td>
                        <td>102.000</td>
                        <td>Maria Minaj Casianni</td>
                        <td>12-ago-2015</td>
                        <td>06:01 pm</td>
                    </tr>
                    <tr>
                        <td id="ordenar-por"><a href="#">65439</a></td>
                        <td>102.000</td>
                        <td>Maria Minaj Casianni</td>
                        <td>12-ago-2015</td>
                        <td>05:27 pm</td>
                    </tr>
                </table>
                <div style="height:22px; float:none; clear:both;"></div>
                    <?php include('cahkhh_paginacion_cajero.php'); ?>
                    <div style="height:35px; float:none; clear:both;"></div>
            </div>
    </div>    
    </div>

<?php include ('aayyhh_footer.php'); ?>