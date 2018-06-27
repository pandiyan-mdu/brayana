<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class Api extends REST_Controller {

	
    public function __construct()
    {
            header('Access-Control-Allow-Origin: *');
            header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
            parent::__construct();
            $this->load->model('Api_model');
            $this->load->helper('url_helper');
            $this->isAuth = $this->Api_model->validateToken();
            if(!$this->isAuth){
                $this->set_response("Unauthorised", REST_Controller::HTTP_UNAUTHORIZED);
                return;
            }
            
            
    }

    /** Land master**/

    /*
    $this->get('blah'); // GET param
    $this->post('blah'); // POST param
    $this->put('blah'); // PUT param*/
   
    public function lands_get($id=""){
       if(!empty($this->isAuth)){
           $options = array();
           if($id){
               $options["where"] = "site_id = ".$id ;
           }
           $return = $this->Api_model->getLands($options);
           $response = array("STATUS"=>"OK","RESPONSE"=>$return);
           $this->set_response($response, REST_Controller::HTTP_OK);
       } 
        
    }
    public function addLand_post(){
        if(!empty($this->isAuth)){
            $POST = $this->post();
        $data = array(
                        "site_name" => $POST['site_name'],
                        "desc" => $POST['desc'],
                        "survey_no"=> $POST['survey_no'],
                        "city"=> $POST['city'],
                        "area"=>$POST['area'],
                        "inst_month"=>$POST['inst_month'],
                        "inst_amount"=>$POST['inst_amount'],
                        "Total_amount"=>$POST['Total_amount'],
                        
                );
        $table = "land_master";
        $id = $this->Api_model->insert_data($table,$data);
        if($id){
            $this->lands_get($id);
        }else{
            $response = array("STATUS"=>"NOK","RESPONSE"=>"Data Failed");
            $this->set_response($response, REST_Controller::HTTP_OK);
        }
        
       } 
    }
    
    public function editLand_post($id){
        if(!empty($this->isAuth)){
        $POST = $this->post();
        $data = array(
                        "site_name" => $POST['site_name'],
                        "desc" => $POST['desc'],
                        "survey_no"=> $POST['survey_no'],
                        "city"=> $POST['city'],
                        "area"=>$POST['area'],
                        "inst_month"=>$POST['inst_month'],
                        "inst_amount"=>$POST['inst_amount'],
                        "Total_amount"=>$POST['Total_amount'],
                        
                );
        $table = "land_master";	
        $id = $this->Api_model->update_data($table,$data, array('site_id'=>$id));
        if($id){
            $this->lands_get($id);
        }else{
            $response = array("STATUS"=>"NOK","RESPONSE"=>"Data Failed to update");
            $this->set_response($response, REST_Controller::HTTP_OK);
        }
        
       } 
    }
    
   
    public function deleteLand_post($id){
        if(!empty($this->isAuth)){
        
        $table = "land_master";	
        $id = $this->Api_model->delete_data($table, array('site_id'=>$id));
        if($id){
            $response = array("STATUS"=>"OK","RESPONSE"=>"Data Deleted");
            $this->set_response($response, REST_Controller::HTTP_OK);
        }else{
            $response = array("STATUS"=>"NOK","RESPONSE"=>"Data Failed to Deleta");
            $this->set_response($response, REST_Controller::HTTP_OK);
        }
        
       } 
    }



    /** Chit master**/

    /*
    $this->get('blah'); // GET param
    $this->post('blah'); // POST param
    $this->put('blah'); // PUT param*/
    
    public function chits_get($id=""){
       if(!empty($this->isAuth)){
           $options = array();
           if($id){
               $options["where"] = "chit_id = ".$id ;
           }
           $return = $this->Api_model->getChits($options);
           $this->set_response($return, REST_Controller::HTTP_OK);
       } 
        
    }
    public function addChit_post(){
        if(!empty($this->isAuth)){
            $POST = $this->post();
        $data = array(
                        "fund_type" => $POST['fund_type'],
                        "inst_month"=>$POST['inst_month'],
                        "inst_amount"=>$POST['inst_amount'],
                        "total_amount"=>$POST['total_amount'],
                );
        $table = "chit_master";
        $id = $this->Api_model->insert_data($table,$data);
        if($id){
            $this->chits_get($id);
        }else{
            $response = array("STATUS"=>"NOK","RESPONSE"=>"Data Failed to update");
            $this->set_response($response, REST_Controller::HTTP_OK);
        }
        
       } 
    }
    
    public function editChit_post($id){
        if(!empty($this->isAuth)){
        $POST = $this->post();
        $data = array(
                        "fund_type" => $POST['fund_type'],
                        "inst_month"=>$POST['inst_month'],
                        "inst_amount"=>$POST['inst_amount'],
                        "total_amount"=>$POST['total_amount'],
                );
        $table = "chit_master"; 
        $id = $this->Api_model->update_data($table,$data, array('chit_id'=>$id));
        if($id){
            $this->chits_get($id);
        }else{
            $response = array("STATUS"=>"NOK","RESPONSE"=>"Data Failed to update");
            $this->set_response($response, REST_Controller::HTTP_OK);
        }
        
       } 
    }
    
   
    public function deleteChit_post($id){
        if(!empty($this->isAuth)){
        
        $table = "chit_master"; 
        $id = $this->Api_model->delete_data($table, array('chit_id'=>$id));
        if($id){
            $response = array("STATUS"=>"OK","RESPONSE"=>"Data Deleted");
            $this->set_response($response, REST_Controller::HTTP_OK);
        }else{
            $response = array("STATUS"=>"NOK","RESPONSE"=>"Data Failed to Deleta");
            $this->set_response($response, REST_Controller::HTTP_OK);
        }
        
       } 
    }




    /** Chit master**/

    /*
    $this->get('blah'); // GET param
    $this->post('blah'); // POST param
    $this->put('blah'); // PUT param*/
    
    public function agars_get($id=""){
       if(!empty($this->isAuth)){
           $options = array();
           if($id){
               $options["where"] = "chit_id = ".$id ;
           }
           $return = $this->Api_model->getAgars($options);
           $this->set_response($return, REST_Controller::HTTP_OK);
       } 
        
    }
    public function addAgar_post(){
        if(!empty($this->isAuth)){
            $POST = $this->post();
        $data = array(
                        "site_name" => $POST['site_name'],
                        "no_tree"=>$POST['no_tree'],
                        "tree_amount"=>$POST['tree_amount'],
                );
        $table = "tree_master";
        $id = $this->Api_model->insert_data($table,$data);
        if($id){
            $this->agars_get($id);
        }else{
            $response = array("STATUS"=>"NOK","RESPONSE"=>"Data Failed to update");
            $this->set_response($response, REST_Controller::HTTP_OK);
        }
        
       } 
    }
    
    public function editAgar_post($id){
        if(!empty($this->isAuth)){
        $POST = $this->post();
        $data = array(
                        "site_name" => $POST['site_name'],
                        "no_tree"=>$POST['no_tree'],
                        "tree_amount"=>$POST['tree_amount'],
                );
        $table = "tree_master";
        $id = $this->Api_model->update_data($table,$data, array('site_id'=>$id));
        if($id){
            $this->agars_get($id);
        }else{
            $response = array("STATUS"=>"NOK","RESPONSE"=>"Data Failed to update");
            $this->set_response($response, REST_Controller::HTTP_OK);
        }
        
       } 
    }
    
   
    public function deleteAgar_post($id){
        if(!empty($this->isAuth)){
        
        $table = "tree_master"; 
        $id = $this->Api_model->delete_data($table, array('site_id'=>$id));
        if($id){
            $response = array("STATUS"=>"OK","RESPONSE"=>"Data Deleted");
            $this->set_response($response, REST_Controller::HTTP_OK);
        }else{
            $response = array("STATUS"=>"NOK","RESPONSE"=>"Data Failed to Deleta");
            $this->set_response($response, REST_Controller::HTTP_OK);
        }
        
       } 
    }

}
