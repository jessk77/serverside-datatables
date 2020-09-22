<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datatable extends CI_Controller {

	public function index()
	{
		$this->load->view('datatable');
	}

	public function datatable_records(){
		 $this->load->model('Datatable_model', 'model');

		$params=$this->input->post();

        $records = $this->model->dataOutput($params);

        $totalRecords=$this->model->totalDataOutput();
        $totalRecordsFiltered=$this->model->totalDataOutputFiltered($params);

        $json_data = array(
            "draw"            => intval( $params['draw'] ),   
            "recordsTotal"    => intval( $totalRecords ),  
            "recordsFiltered" => intval($totalRecordsFiltered),
            "data"            => $records->result(),  
            );
        echo json_encode($json_data);
	}
}
