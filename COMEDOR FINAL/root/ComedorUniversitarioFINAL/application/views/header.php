<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge;text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/bootstrap.css">
<link href="<?php echo base_url();?>/css/Estilo.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/Tablas.css">
<script type="text/javascript" language="javascript" src="<?php echo base_url();?>/js/jquery.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url();?>/js/bootstrap.min.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url();?>/js/jquery.dataTables.js"></script>	


 
    <title>Sistema de Comedor</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/template/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/template/jquery-ui/jquery-ui.css">
     <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/template/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!-- DataTables Export-->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/template/datatables-export/css/buttons.dataTables.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/template/font-awesome/css/font-awesome.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/template/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/template/dist/css/skins/_all-skins.min.css">
<title>Codeigniter y Mysqli</title>
</head>
<body>
	<h3 align="center">SISTEMA COMEDOR UNAMBA <br/> CODEIGNITER Y MYSQLI</h3>
	<?php
		if ($this->session->userdata('is_logged_in')){
			echo '<h4 align="right">';
			echo '<small>';
			echo 'Bienvenido: <strong>'.$this->session->userdata('NOMBRE').' '.$this->session->userdata('APELLIDOS').'</strong>&nbsp;|&nbsp;';
			echo 'Tipo Usuario: <strong>'.$this->session->userdata('TIPOUSUARIO').'</strong>&nbsp;|&nbsp;';
			echo anchor("login/CerrarSesion/", "Salir").'&nbsp;&nbsp;</small></h4>';
			echo '<hr/>';
			echo '<p align="right">';
			echo '<table align="right">';
			echo '<tr>';
			foreach($this->session->userdata('Permisos') as $CrearMenu1){
                            
                            if($CrearMenu1["ID"]=="Error"){
                                echo '<td><font color="red">Sin Permisos para el Ver Menu. Solicita los Permisos con un Administrador</font></td>';
                             }else{   
                                  echo '<td><a href="'.base_url().'index.php'.$CrearMenu1["URL"].'">'.$CrearMenu1["DESCRIPCION"]."</a></td>";
                                  echo '<td>&nbsp;|&nbsp;</td>';
                            }
			}
            echo '</tr>';
			echo '</table>';   

			
			
			echo '</p>';
			echo '<hr/>';	
		
		}else{
			echo '<hr/>';
		}
		
	 ?>
	