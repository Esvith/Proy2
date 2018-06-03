<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class reportes_model extends CI_Model {



public function getreportebyDate($fechainicio,$fechafin,$sexo,$carrera){


		$this->db->select("c.codigo,c.nombres,c.apellidos,c.sexo,c.carrera,a.fecha_atencion as fecha");
		$this->db->from("atenciones a");
		$this->db->join("comesales c","a.id_comesales = c.id");
		
		$this->db->where("a.fecha_atencion >=",$fechainicio);
		$this->db->where("a.fecha_atencion <=",$fechafin);
		$this->db->where("c.sexo",$sexo);
		$this->db->where("c.carrera",$carrera);
		$resultados = $this->db->get();
		if ($resultados->num_rows() > 0) {
			return $resultados->result();
		}else
		{
			return false;
		}
	}

public function getreporte($fechainicio,$fechafin,$sexo){


		$this->db->select("c.codigo,c.nombres,c.apellidos,c.sexo,c.carrera,a.fecha_atencion as fecha");
		$this->db->from("atenciones a");
		$this->db->join("comesales c","a.id_comesales = c.id");
		//$this->db->or_where("c.sexo =",$sexo);
		//$this->db->where("a.fecha_atencion >=",$fechainicio);
		//$this->db->where("a.fecha_atencion <=",$fechafin);
		$resultados = $this->db->get();
		if ($resultados->num_rows() > 0) {
			return $resultados->result();
		}else
		{
			return false;
		}
	}

	public function getporcentajevarones(){

$varones="masculino";
		$this->db->select("COUNT(id) as varones");
		$this->db->from("comesales");
		$this->db->where("sexo",$varones);
		$this->db->limit(1);
		//$this->db->or_where("c.sexo =",$sexo);
		//$this->db->where("a.fecha_atencion >=",$fechainicio);
		//$this->db->where("a.fecha_atencion <=",$fechafin);
		$varones = $this->db->get();
		if ($varones->num_rows() > 0) {
			return $varones->result();
		}else
		{
			return false;
		}
	}
	public function getporcentajemujeres(){

$mujeres="femenino";
	$this->db->select( " COUNT(id) as mujeres");
		$this->db->from("comesales");
		$this->db->where("sexo",$mujeres);
	$this->db->limit(1);
		//$this->db->or_where("c.sexo =",$sexo);
		//$this->db->where("a.fecha_atencion >=",$fechainicio);
		//$this->db->where("a.fecha_atencion <=",$fechafin);
		$mujeres = $this->db->get();
		if ($mujeres->num_rows() > 0) {
			return $mujeres->result();
		}else
		{
			return false;
		}
	}

	public function gettotal(){

$mujeres="femenino";
	$this->db->select( " COUNT(id) as total");
		$this->db->from("comesales");
		$this->db->limit(1);
		//$this->db->or_where("c.sexo =",$sexo);
		//$this->db->where("a.fecha_atencion >=",$fechainicio);
		//$this->db->where("a.fecha_atencion <=",$fechafin);
		$mujeres = $this->db->get();
		if ($mujeres->num_rows() > 0) {
			return $mujeres->result();
		}else
		{
			return false;
		}
	}
}
?>