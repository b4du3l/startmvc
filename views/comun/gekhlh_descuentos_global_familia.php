<?php include ('aahihh_head.php'); ?>

    <div class="container-fluid">
    <div class="row">    
        <?php include ('gehghh_navegador.php'); ?>

        <div class="col-xs-12 col-sm-8 col-md-8">

                <br><br><br><br><br><br><br><br><br>
                <div class="row">
                    <div class="col-xs-8 col-sm-8 col-md-8 col-xs-offset-2 col-sm-offset-2 col-md-offset-2">   
                            
                        <form class="form-inline" role="form" name="formulario" method="GET" action="gekhmh_descuentos_global_familia_vista.php">
                            <div class="form-group col-xs-6 col-sm-6 col-md-6">
                                   <label for="ci">Familia:</label>
                                   <br>
                                   <select name="" class="form-control" id="ci" style="width:195px;">
                                       <option value="0">-- Seleccionar --</option>
                                       <option value="1" >Camisa</option>
                                       <option value="2" >Pantalon</option>
                                       <option value="3" >Short</option>
                                       <option value="4" >Vestido</option>
                                       <option value="5" >Zapatos</option>
                                </select>
                            </div>                             
                            <div class="col-xs-6 col-sm-5 col-md-4 col-sm-offset-1 col-md-offset-2">
                                <article style=" height:10px; float:none; clear:both;"></article>
                                <button type="submit" class="btn btn-primary">Continuar</button>
                            </div>
                        </form>
                </div>
            </div>

        <article style="height:25px; float:none; clear:both;"></article> 
    </div>    
    </div>

<?php include ('aayyhh_footer.php'); ?>