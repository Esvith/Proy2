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
}
?>