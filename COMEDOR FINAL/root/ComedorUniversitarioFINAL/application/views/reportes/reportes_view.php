
<!-- Content Wrapper. Contains page content -->

<?php
//ob_start();
 //require_once("/../libraries/dompdf/dompdf_config.inc.php");
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        REPORTES
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <form action="<?php echo current_url();?>" method="POST" class="form-horizontal">
                        <div class="form-group">

                     	<label for="" class="col-md-1 control-label">Sexo:</label>
                        	<div>

                            <select name="sexo" id="sexo"> 
                            <option selected="true" disabled="disabled"><?php echo !empty($sexo) ? $sexo:'seleccione sexo';?></option>
                                <option value="femenino">femenino</option>
                                <option value="masculino">masculino</option>
                                <option value="">masculino</option>
 
                                </select>
                                </div>

                                    <label for="" class="col-md-1 control-label">Carrera:</label>
                                <div>
                             <select name="carrera" id="carrera"> 
                            <option selected="true" disabled="disabled"><?php echo !empty($sexo) ? $sexo:'seleccione carrera';?></option>
                                <option value="INGENIERIA DE SISTEMAS">INGENIERIA DE SISTEMA</option>
                                <option value="INGENIERIA CIVIL">INGENIERIA CIVIL</option>
                                <option value="INGENIERIA MINAS">INGENIERIA MINAS</option>
                                <option value="INGENIERIA AGROINDUSTRIAL">INGENIERIA AGROINDUSTRIAL</option>
                                <option value="CIENCIA POLITICA Y GOBERNALIDAD">CIENCIA POLITICA Y GOBERNALIDAD</option>
                                <option value="EDUCACION INICIAL INTERCULTURAL BILINGUE">EDUCACION INICIAL INTERCULTURAL BILINGUE</option>
                                <option value="MEDICINA VETERINARIA Y ZOOTECNIA">MEDICINA VETERINARIA Y ZOOTECNIA</option>
 
                                </select>

        



							</div>

                            <label for="" class="col-md-1 control-label">Desde:</label>
                            <div class="col-md-3">
                                <input type="date" class="form-control" name="fechainicio" value="<?php echo !empty($fechainicio) ? $fechainicio:'';?>">
                            </div>
                            <label for="" class="col-md-1 control-label">Hasta:</label>
                            <div class="col-md-3">
                                <input type="date" class="form-control" name="fechafin" value="<?php  echo !empty($fechafin) ? $fechafin:'';?>">
                            </div>
                            <div class="col-md-4">
                                <input type="submit" name="buscar" value="Buscar" class="btn btn-primary">
                                <a href="<?php echo base_url(); ?>index.php/reportes/reportes_con" class="btn btn-danger">Restablecer</a>
                            </div>
                        </div>
                    </form>

                    <form action="<?php echo current_url();?>" method="POST" class="form-horizontal">
                    <div class="col-md-4">
                                <input type="submit" name="procentaje" value="Buscar" class="btn btn-primary">
                                <a href="<?php echo base_url(); ?>index.php/reportes/reportes_con/porcentajevm" class="btn btn-danger">Porcentaje Varones Mujeres</a>
                                
                            </div>
                    </form>

                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <table id="example" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    
                                    <th>CODIGO</th>
                                    <th>NOMBRES</th>
                                    <th>APELLIDOS</th>
                                    <th>SEXO</th>
                                    <th>CARRERA</th>
                                    <th>FECHA</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
            		         <?php if (!empty($resultados)): ?>
                                    <?php  foreach($resultados as $resultado):?>
                                        <tr>
                                            <td><?php echo $resultado->codigo;?></td>
                                            <td><?php echo $resultado->nombres;?></td>
                                            <td><?php echo $resultado->apellidos;?></td>
                                             <td><?php echo $resultado->sexo;?></td>
                                            <td><?php echo $resultado->carrera;?></td>
                                            <td><?php echo $resultado->fecha;?></td>
                                         
                                            <td>
                                                <button type="button" class="btn btn-info btn-view-venta" value="<?php //echo $venta->id;?>" data-toggle="modal" data-target="#modal-default"><span class="fa fa-search"></span></button>
                                            </td>
                                        </tr>
                                    <?php endforeach;?>
                                <?php endif ?>
                            </tbody>
                        -->
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Informacion de la venta</h4>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary btn-print"><span class="fa fa-print"> </span>Imprimir</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
      <?php 


 
//$dompdf = new DOMPDF();
//$dompdf -> load_html(ob_get_clean());
//$dompdf -> render();
//$pdf = $dompdf->output();
//$filename ='reporte.pdf';
//$dompdf->stream($filename,array("Attachment"=>0));

?>