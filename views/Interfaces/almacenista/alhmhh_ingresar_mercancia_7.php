<?php headFocus(); ?>

    <div class="container-fluid">
    <div class="row">    
        <?php include ('alhghh_navegador.php'); ?>

        <div class="col-xs-12 col-sm-8 col-md-8" style="padding:0;">


                
                <div class="container-fluid" style="padding:0;"> <!-- abre el container fluid de la barra de progreso -->
                        <div class="row"> 
                            <div class="col-xs-10 col-sm-10 col-md-10 col-xs-offset-2 col-sm-offset-2 col-md-offset-2" style="padding:0;">
                                <div class="col-xs-1 col-sm-1 col-md-1 progreso-almacenista"><br></div>
                                <div class="col-xs-1 col-sm-1 col-md-1 progreso-almacenista"><br></div>
                                <div class="col-xs-1 col-sm-1 col-md-1 progreso-almacenista"><br></div>
                                <div class="col-xs-1 col-sm-1 col-md-1 progreso-almacenista"><br></div>
                                <div class="col-xs-1 col-sm-1 col-md-1 progreso-almacenista"><br></div>
                                <div class="col-xs-1 col-sm-1 col-md-1 progreso-almacenista"><br></div>
                                <div class="col-xs-1 col-sm-1 col-md-1 progreso-almacenista" style="background-color:rgba(214,227,240,1); color:rgba(160,160,160,1);"><br></div>
                                <div class="col-xs-1 col-sm-1 col-md-1 progreso-almacenista"><br></div>
                                <div class="col-xs-1 col-sm-1 col-md-1 progreso-almacenista"><br></div>
                            </div>
                        </div> <!-- ciertra el row de la barra de progreso -->   
                </div> <!-- ciertra el container fluid de la barra de progreso -->
                <br><br><br><br><br>

                <div class="row">
                    <div class="col-xs-10 col-sm-10 col-md-10 col-xs-offset-2 col-sm-offset-2 col-md-offset-2" style="padding:0;">
                            
                        <form class="form-inline" role="form" name="formulario" method="POST" action="?controlador=Almacenista&accion=ingresarmercancia&step=8"  id="bill">
                        
                            <section class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                                <section class="col-xs-6 col-sm-6 col-md-6" style="padding:0;">    

                                    <div class="form-group col-xs-12 col-sm-12 col-md-12" >
                                        <label for="codPr">Precio:</label>
                                        <input type="text" class="form-control" name="precio" id="codPr">
                                    </div>
                                </section>
                                <br>
                                <section class="col-xs-6 col-sm-6 col-md-6"> 
                                    <a href="#">
                                        <div class="col-xs-3 col-sm-3 col-md-3">
                                            <img style="width:110%;" src="img/al_agregar_familia.png">
                                        </div>

                                        <br>
                                        <div class="col-xs-8 col-sm-8 col-md-8">
                                            <label>Nuevo precio</label>
                                        </div>
                                    </a>
                                </section>
                            </section><article style="height:200px; float:none; clear:both;"></article> <!-- solo para espacio -->

                            

                            <div class="col-xs-offset-7 col-sm-offset-7 col-md-offset-7">
                            <button type="submit" class="btn btn-primary">Siguiente >></button>
                            </div>
                        </form>
                </div>
            </div>

        <div style="height:150px; float:none; clear:both;"></div>  
    </div>    
    </div>

<?php footer(); ?>    







