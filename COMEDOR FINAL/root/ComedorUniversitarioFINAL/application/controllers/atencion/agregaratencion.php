<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agregaratencion extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("model_atencion");
	}

	public function index()
	{
		$data  = array(
			'clientes' => $this->Clientes_model->getClientes(), 
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/clientes/list",$data);
		$this->load->view("layouts/footer");

	}

	public function add(){

		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/clientes/add");
		$this->load->view("layouts/footer");
	}

	public function store(){
		$id = $this->input->post("id");
		$codigo = $this->input->post("codigo");
		$nombres = $this->input->post("nombres");
		$apellidos = $this->input->post("apellidos");
		$sexo = $this->input->post("sexo");
		$facultad = $this->input->post("facultad");
		$carrera = $this->input->post("carrera");
		$fecha_atencion = $this->input->post("fecha_atencion");

	

		$data  = array(
			'id_comesales' => $id, 
			//'nombres' => $nombres, 
			//'apellidos' => $apellidos,
			//'sexo' => $sexo,
			//'facultad' => $facultad,
			//'carrera' => $carrera,
			'fecha_atencion' => $fecha_atencion
			//,'estado' => "1"
		);

		if ($this->model_atencion->save($data)) {
			//redirect(base_url()."atenciones/clientes");
			redirect(base_url()."index.php");
		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."index.php");
		}
	}

	public function edit($id){
		$data  = array(
			'cliente' => $this->Clientes_model->getCliente($id), 
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/clientes/edit",$data);
		$this->load->view("layouts/footer");
	}

	public function update(){
		$idcliente = $this->input->post("idcliente");
		$nombres = $this->input->post("nombres");
		$apellidos = $this->input->post("apellidos");
		$telefono = $this->input->post("telefono");
		$direccion = $this->input->post("direccion");
		$ruc = $this->input->post("ruc");
		$empresa = $this->input->post("empresa");

		$data = array(
			'nombres' => $nombres, 
			'apellidos' => $apellidos,
			'telefono' => $telefono,
			'direccion' => $direccion,
			'ruc' => $ruc,
			'empresa' => $empresa,
		);

		if ($this->Clientes_model->update($idcliente,$data)) {
			redirect(base_url()."mantenimiento/clientes");
		}
		else{
			$this->session->set_flashdata("error","No se pudo actualizar la informacion");
			redirect(base_url()."mantenimiento/clientes/edit/".$idcliente);
		}
	}

	public function delete($id){
		$data  = array(
			'estado' => "0", 
		);
		$this->Clientes_model->update($id,$data);
		echo "mantenimiento/clientes";
	}
}