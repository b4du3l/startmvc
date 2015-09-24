<?php headFocus(); ?>

    <div class="container-fluid">
    <div class="row">    
        <?php include ('alhghh_navegador.php'); ?>

        <div class="col-xs-12 col-sm-8 col-md-8" style="margin-top:1px;">
   
        
            <div class="container-fluid" style="padding:0;">
                    <section class="col-xs-12 col-sm-12 col-md-12" style="background-color:rgba(245,245,245,1); border-radius:1px;">
                        
                        <form action="?controlador=Almacenista&accion=newitem" method="POST" class="navbar-form" id="bill" style="margin-top:40px;">
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
                        <td><b>USO</b></td>
                        <td><b>LOTE</b></td>
                        <td><b>CÓDIGO</b></td>
                        <td><b>DESCRIP.</b></td>
                        <td><b>SIZE</b></td>
                        <td><b>P.VENTA</b></td>
                        <td><b>IVA</b></td>
                        <td><b>VENC.</b></td>
                        <td><b>&nbsp;</b></td>
                      </tr>';
			if($listaItems)
			{
				$index=1;
				foreach ($listaItems as $item) 
				{
				?>
				<tr>
					<td><?=$index++?></td>
					<td><?=$item[NombreFamilia]?></td>
					<td><?=$item[NombreMarca]?></td>
					<td><?=$item[Cod_Uso]?></td>
					<td><?=$item[Lote]?></td>
					<td><?=$item[Codigo]?></td>
					<td><?=$item[Descripcion]?></td>
					<td><?=$item[NombreTalla]?></td>
					<td><?=$item[Precio]?></td>
					<td><?=$item[Valor_Iva]?>%</td>
					<td><?=$item[FechaVencimiento]?></td>
					<td><a href="#">X</a></td>
				</tr>
				<?php	
				}
			}



                echo '</table>';

                ?>


                <div class="col-xs-12 col-sm-12 col-md-12" style="background-color:rgba(245,245,245,1); padding:10px; margin-top:3px;">
                    Total Items: 5
                </div>


                <article style="height:30px; float:none; clear:both;"></article> <!-- para dar espacio -->

                <section class="col-xs-offset-5 col-sm-offset-5 col-md-offset-5">
                    <button class="btn btn-danger"><a href="alhhhh_almacenista_main.php">Guardar movimiento</a></button>
                </section>

                <div style="height:50px; float:none; clear:both;"></div>
            </div>
    </div>    
    </div>

<?php footer(); ?>