<?php include ('aahhhh_head_sign_in.php'); 
//aazzhh_4_interfaces_temp.php
?>


    <div class="container-fluid" style="margin-top:3%;">
        

        <div class="col-xs-12 col-sm-8 col-md-4  col-sm-offset-2 col-md-offset-4" style="color:#585858;">
            <div><img src="img/logo50.jpg" style="width:98%;"></div><br><br>
            <div class="ingresar">        
                <form method="POST" action="?controlador=Login&accion=signin" clas="">
                          <div class="form-group">
                          <br>
                          <div class="form-group">
                              <div class="input-group">
                                  <input class="form-control" type="text" name="usuario" placeholder="usuario">
                                  <span class="input-group-addon"><img src="img/user5.png" style="width:20px;"></span>
                              </div>
                          </div><br>
                          <div class="form-group">
                              <div class="input-group">
                                  <input class="form-control" type="password" name="contrasena" placeholder="contrase&ntilde;a">
                                  <span class="input-group-addon"><img src="img/key7.png" style="width:20px;"></span>
                              </div>
                          </div><br><br>
                          <input class="btn btn-default" type="submit" name="submit" value="Ingresar">
                          </div>
                </form>
                <section style="text-align:right;">
                    <br/><br/>
                    <a href="#"><u>Olvide mi contrase&ntilde;a</u></a>
                    <br/><br/><br/>
                </section>

                <section style="text-align:right;">
                    <button class="btn btn-info" >Registrarse</button>
                    
                </section>
                
            </div>    
        </div>  <!-- div columna central-->

        
    </div>  <!-- div container fluid-->


    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>

</html>