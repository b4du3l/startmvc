<?php include ('aahikh_head_focus.php'); ?>

    <div class="container-fluid">
    <div class="row">    
        <?php include ('cahghh_navegador.php'); ?>

        <div class="col-xs-12 col-sm-8 col-md-8" style="margin-top:3px;">




                
                <div class="row" style="background-color:#CCCCCC;">

                    <form class="form-inline" role="form" name="formulario" method="GET" action="#" id="bill">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-1">                            
                            <div class="form-group datos_nueva_sucursal">
                                <label for="codPr">Código de producto:</label>
                                <br>
                                <input type="text" class="form-control" name="" id="codPr">
                            </div>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-4 col-xs-offset-1 col-sm-offset-1 col-md-offset-1">
                            <br><br>
                            <div>
                            <button type="submit" class="btn btn-primary">Ingresar objeto</button>
                            </div>
                    </div>
                    </form>

                </div>
                




                <div style="height:20px; float:none; clear:both;"></div>

                <br>
                <table width=100% border='1' class="tabla_ventas">
                    <tr>
                        <td><b>Código</b></td>
                        <td><b>Cantidad</b></td>
                        <td><b>Descripci&oacute;n</b></td>
                        <td><b>Valor</b></td>
                        <td><b>Eliminar</b></td>
                    </tr>
                    <tr>
                        <td><a href="#">65452453934</a></td>
                        <td>1</td>
                        <td>Camisa Rose Pistol Manga corta</td>
                        <td>102.000</td>
                        <td><a href="#">X</a></td>
                    </tr>
                    <tr>
                        <td><a href="#">65452453934</a></td>
                        <td>1</td>
                        <td>Camisa Rose Pistol Manga corta</td>
                        <td>102.000</td>
                        <td><a href="#">X</a></td>
                    </tr>
                    <tr>
                        <td><a href="#">65452453934</a></td>
                        <td>1</td>
                        <td>Camisa Rose Pistol Manga corta</td>
                        <td>102.000</td>
                        <td><a href="#">X</a></td>
                    </tr>
                    <tr>
                        <td><a href="#">65452453934</a></td>
                        <td>1</td>
                        <td>Camisa Rose Pistol Manga corta</td>
                        <td>102.000</td>
                        <td><a href="#">X</a></td>
                    </tr>
                    <tr>
                        <td><a href="#">65452453934</a></td>
                        <td>1</td>
                        <td>Camisa Rose Pistol Manga corta</td>
                        <td>102.000</td>
                        <td><a href="#">X</a></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><b>Total</b></td>
                        <td><b>510.000</b></td>
                        <td></td>
                    </tr>
                </table>


                

                <br><br>
                
                <form class="form-inline" role="form" name="formulario" method="GET" action="#">
                <div class="row" style="background-color:#cccccc;">    
                    <div class="col-xs-6 col-sm-6 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-1">
                        <div class="form-group datos_nueva_sucursal">
                                   <label for="ci">medio de pago:</label>
                                   <br>
                                   <select name="ciudad" class="form-control" id="ci" style="width:195px;">
                                       <option value="1" >Efectivo</option>
                                       <option value="2" >Tarjeta debito</option>
                                       <option value="3" >Tarjeta credito</option>
                                </select>
                        </div>
                    </div>

                    <div class="col-xs-5 col-sm-5 col-md-5">
                        <div class="form-group datos_nueva_sucursal">
                            <label for="codPr">Importe:</label>
                            <br>
                            <input type="text" class="form-control" name="desde" onkeyup="getresult(this.value);">
                        </div>
                    </div>
                </div>


                    <div class="col-xs-4 col-sm-4 col-md-4 col-xs-offset-7 col-sm-offset-7 col-md-offset-7" style="background-color:#f3f3f3; border-radius:8px;">
                        <div class="form-group">
                            <p><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cambio: $ 40.000</i></p>
                        </div>
                    </div>

                    
             

                    <br><hr style="color:#000;"/><br>
                    <div style="text-align:center;">
                    <button type="submit" class="btn btn-danger">FACTURAR</button>
                    </div>
                    
                </form>
                
                




                <div style="height:80px; float:none; clear:both;"></div>





        </div>    
    </div>
    </div>

<?php include ('aayyhh_footer.php'); ?>
