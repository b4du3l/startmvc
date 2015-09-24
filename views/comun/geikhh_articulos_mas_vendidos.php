<?php include ('aahihh_head.php'); ?>

    <div class="container-fluid">
    <div class="row">    
        <?php include ('gehghh_navegador.php'); ?>

        <div class="col-xs-12 col-sm-8 col-md-8" style="margin-top:2px;">
 
            <div class="container-fluid" style="background-color:#D5D5D5; border-radius:10px;"> 

            <br><br><br><br><br>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">   
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <form class="form-inline" role="form" method="GET" action="geinhh_resultado_articulos_mas_vendidos.php">
                            <div class="form-group">
                                <label for="dd">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Consultar desde:</label>
                                <input type="date" class="form-control" name="desde" id="dd">
                            </div>
                            <div class="form-group">
                                <label for="ht">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hasta:</label>
                                <input type="date" class="form-control" name="hasta" id="ht">
                            </div>
                            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                            <div style="text-align:center;">
                            <button type="submit" class="btn btn-primary">Consultar</button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>    



           

        <br>
        <div style="height:82px; float:none; clear:both;"></div>
        </div>
    <div style="height:80px; float:none; clear:both;"></div>    
    </div>    
    </div>

<?php include ('aayyhh_footer.php'); ?>