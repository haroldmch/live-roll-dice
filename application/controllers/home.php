<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function index(){
        $datos = $this->input->post(NULL, TRUE);
        $nombre = $datos['nombre'];
        if($nombre ==! ''){ 
            $data['nombre'] = $nombre;
            $this->load->view('view_dados',$data); 
        }
        else
            $this->load->view('view_home'); 
        //$this->load->view('view_home'); 
	}
    public function insert(){
        $data = $this->input->post(NULL, TRUE);
        if($data != '')
            $this->model->add($data);
        else
            echo HOME;
    }
    public function load(){
        $data = $this->input->post(NULL, TRUE);
        if($data != ''){
            $lanzadas = $this->model->load();
            echo json_encode($lanzadas); 
        }
        else
            echo HOME; 
    }
    
    public function clear(){
        $this->load->view('view_clear'); 
    }
    public function clearHistorical(){
        $data = $this->input->post(NULL, TRUE);
        if($data != ''){
            $this->model->clear();
        }
        else
            echo HOME;
    }
    
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */