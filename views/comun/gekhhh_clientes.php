<?php include ('aahihh_head.php'); ?>

    <div class="container-fluid">
    <div class="row">    
        <?php include ('gehghh_navegador.php'); ?>

        <div class="col-xs-12 col-sm-8 col-md-8">
   
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
                    </ul>
                            <form action="" method="GET" class="navbar-form navbar-right" role="search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Número de identificación" id="query" name="query" value="">
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
                        <td id="ordenar-por"><b>Identificación</b></td>
                        <td id="ordenar-por"><b>Nombre cliente</b></td>
                        <td id="ordenar-por"><b>Apellidos cliente</b></td>
                        <td id="ordenar-por"><b>País</b></td>
                        <td id="ordenar-por"><b>Ciudad</b></td>
                        <td id="ordenar-por"><b>Dirección</b></td>
                        <td id="ordenar-por"><b>Teléfono</b></td>
                        <td id="ordenar-por"><b>E-mail</b></td>
                    </tr>
                    <tr>
                        <td>21.584.654</td>
                        <td id="ordenar-por">Alberto</td>
                        <td>Minaj Casianni</td>
                        <td>Colombia</td>
                        <td>Cartagena de Indias</td>
                        <td>Zaragocilla Cll 30 No. 49 - 66</td>
                        <td>6640106</td>
                        <td>contactoctg@crocs.com</td>
                    </tr>
                    <tr>
                        <td>21.584.654</td>
                        <td id="ordenar-por">Carlos</td>
                        <td>Minaj Casianni</td>
                        <td>Colombia</td>
                        <td>Cartagena de Indias</td>
                        <td>Zaragocilla Cll 30 No. 49 - 66</td>
                        <td>6640106</td>
                        <td>contactoctg@crocs.com</td>
                    </tr>
                    <tr>
                        <td>21.584.654</td>
                        <td id="ordenar-por">Diana</td>
                        <td>Minaj Casianni</td>
                        <td>Colombia</td>
                        <td>Cartagena de Indias</td>
                        <td>Zaragocilla Cll 30 No. 49 - 66</td>
                        <td>6640106</td>
                        <td>contactoctg@crocs.com</td>
                    </tr>
                    <tr>
                        <td>21.584.654</td>
                        <td id="ordenar-por">Eudes</td>
                        <td>Minaj Casianni</td>
                        <td>Colombia</td>
                        <td>Cartagena de Indias</td>
                        <td>Zaragocilla Cll 30 No. 49 - 66</td>
                        <td>6640106</td>
                        <td>contactoctg@crocs.com</td>
                    </tr>
                    <tr>
                        <td>21.584.654</td>
                        <td id="ordenar-por">Kiara</td>
                        <td>Minaj Casianni</td>
                        <td>Colombia</td>
                        <td>Cartagena de Indias</td>
                        <td>Zaragocilla Cll 30 No. 49 - 66</td>
                        <td>6640106</td>
                        <td>contactoctg@crocs.com</td>
                    </tr>
                    <tr>
                        <td>21.584.654</td>
                        <td id="ordenar-por">Maria</td>
                        <td>Minaj Casianni</td>
                        <td>Colombia</td>
                        <td>Cartagena de Indias</td>
                        <td>Zaragocilla Cll 30 No. 49 - 66</td>
                        <td>6640106</td>
                        <td>contactoctg@crocs.com</td>
                    </tr>
                </table>
                <div style="height:30px; float:none; clear:both;"></div>
                    <?php include('cahkhh_paginacion_cajero.php'); ?>
                    <div style="height:35px; float:none; clear:both;"></div>
            </div>
    </div>    
    </div>

<?php include ('aayyhh_footer.php'); ?>