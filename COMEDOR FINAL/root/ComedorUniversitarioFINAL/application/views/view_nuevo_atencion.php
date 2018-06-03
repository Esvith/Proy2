
<center>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Clientes
        <small>Nuevo</small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <?php if($this->session->flashdata("error")):?>
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("error"); ?></p>
                                
                             </div>
                        <?php endif;
                        	$hoy = date("Y-m-d")
                        ?>

                          
               

                        <form action="<?php echo base_url();?>index.php/atencion/agregaratencion/store" method="POST">


                        	  <div class="form-group">
                                <label for="id">ID:</label>
                                <input type="text" class="form-control" id="id" name="id"
                                value= <?php echo(@$datos_comesales[0]->id ); ?> >
  								</div>

                            <div class="form-group">
                                <label for="nombres">CODIGO:</label>
                                <input type="text" class="form-control" id="codigo" name="codigo"
                                value= <?php echo(@$datos_comesales[0]->codigo ); ?> >

                            </div>
                            
                            <div class="form-group">s
                                <label for="telefono">NOMBRES</label>
                                <input type="text" class="form-control" id="telefono" name="telefono"
                               value= <?php echo(@$datos_comesales[0]->nombres ); ?> >
                            </div>
                            <div class="form-group">
                                <label for="direccion">APELLIDOS</label>
                                <input type="text" class="form-control" id="direccion" name="direccion"
                                value= <?php echo(@$datos_comesales[0]->apellidos ); ?> >
                            </div>
                            <div class="form-group">
                                <label for="ruc">SEXO</label>
                                <input type="text" class="form-control" id="ruc" name="ruc"
                                value= <?php echo(@$datos_comesales[0]->sexo ); ?> >
                            </div>
                            <div class="form-group">
                                <label for="empresa">FACULTAD</label>
                                <input type="text" class="form-control" id="empresa" name="empresa"
                                value= <?php echo(@$datos_comesales[0]->facultad ); ?> >
                            </div>

                            <div class="form-group">
                                <label for="empresa">CARRERA</label>
                                <input type="text" class="form-control" id="empresa" name="empresa"
                                value= <?php echo(@$datos_comesales[0]->carrera ); ?> >
                            </div>

                            <div class="form-group">
                                <label for="fecha_atencion">FECHA:</label>
                                <input type="text" class="form-control" id="fecha_atencion" 
                                name="fecha_atencion" value=<?php echo($hoy); ?>>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-flat">Guardar Atencion</button>
                            </div>
                        </form>
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


</center>


REGISTRAR ATENCION
