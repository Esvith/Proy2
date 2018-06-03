<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class reportes_con extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("reportes_model");
	}

	public function index(){

		$fechainicio = $this->input->post("fechainicio");
		$fechafin = $this->input->post("fechafin");

		$sexo = $this->input->post("sexo");
		$carrera = $this->input->post("carrera");
		
		if ($this->input->post("buscar")) {
			$resultados = $this->reportes_model->getreportebyDate($fechainicio,$fechafin,$sexo,$carrera);
		}
		else{
			$resultados = $this->reportes_model->getreporte($fechainicio,$fechafin,$sexo,$carrera);
		}
		$data = array(
			"resultados" => $resultados,
			"sexo" => $sexo,
			"fechainicio" => $fechainicio,
			"fechafin" => $fechafin
		);

		$this->load->view("/header");

		//$this->load->view("reportes/reportes_view",$data);
		$this->load->view("/reportes/reportes_view",$data);
		$this->load->view("/footer");


	}
}