<?php include ('aahikh_head_focus.php'); ?>

    <div class="container-fluid">
    <div class="row">    
        <?php include ('alhghh_navegador.php'); ?>

        <div class="col-xs-12 col-sm-8 col-md-8" style="margin-top:1px;">
   
        
            <div class="container-fluid" style="padding:0;">
                    <section class="col-xs-12 col-sm-12 col-md-12" style="background-color:rgba(245,245,245,1); border-radius:1px;">
                        
                        <form action="#" method="GET" class="navbar-form" id="bill" style="margin-top:40px;">
                            <div class="input-group col-xs-offset-4 col-sm-offset-4 col-md-offset-4">
                                <input type="text" class="form-control" placeholder="C&oacute;digo item" value="" id="codPr">
                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-success">Ingresar producto</button>
                                </div>
                            </div>
                        </form>
                        <br><br>
                    </section>
            </div>
           

                <article style="height:30px; float:none; clear:both;"></article> <!-- para dar espacio -->

                <?php 

                $No=1;

                $cant=100;

                $cod=754631;

                $example=5;

                echo '<table width=100% border="1" class="tabla_ventas">';
                echo '<tr> 
                        <td><b>ID</b></td>
                        <td><b>FAMILIA</b></td>
                        <td><b>MARCA</b></td>
                        <td><b>LOTE</b></td>
                        <td><b>USO</b></td>
                        <td><b>CÓDIGO</b></td>
                        <td><b>NOMBRE</b></td>
                        <td><b>SIZE</b></td>
                        <td><b>P.VENTA</b></td>
                        <td><b>IVA</b></td>
                        <td><b>VENC.</b></td>
                        <td><b>&nbsp;</b></td>
                      </tr>';


                for($example<6; $example>0; $example--)
                {   
                    echo '<tr>';
                    
                    echo '<td>'.$No.'</td>';
                    echo '<td>'.'zapatos'.'</td>';
                    echo '<td>'.'Gucci'.'</td>';
                    echo '<td>'.'1414'.'</td>';
                    echo '<td>'.'hombre'.'</td>';
                    echo '<td>'.'846571'.'</td>';
                    echo '<td>'.'mocasines'.'</td>';
                    echo '<td>'.'41'.'</td>';
                    echo '<td>'.'83.000'.'</td>';
                    echo '<td>'.'16%'.'</td>';
                    echo '<td>'.'12 - jul 2015'.'</td>';
                    echo '<td><a href="#">'.'X'.'</a></td>';
                    
                    echo '</tr>';

                    $No++;
                    $cant--;
                    $cod--;
                }


                echo '</table>';

                ?>


                <div class="col-xs-12 col-sm-12 col-md-12" style="background-color:rgba(245,245,245,1); padding:10px; margin-top:3px;">
                    Total Items: 5
                </div>


                <article style="height:30px; float:none; clear:both;"></article> <!-- para dar espacio -->

                <section class="col-xs-offset-5 col-sm-offset-5 col-md-offset-5">
                    <form class="form-inline" role="form" name="formulario" method="GET" action="alhhhh_almacenista_main.php">
                        <button class="btn btn-danger">Guardar movimiento</button>
                    </form>
                </section>

                <div style="height:50px; float:none; clear:both;"></div>
            </div>
    </div>    
    </div>

<?php include ('aayyhh_footer.php'); ?>