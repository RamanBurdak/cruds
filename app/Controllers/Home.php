<?php

namespace App\Controllers;
use App\Models\Crud;
class Home extends BaseController
{
    function __construct()
	{
		
		  $this->Crud = new \App\Models\Crud();
		  
	//	$this->load->model('Crud');
	}

	public function index()
	{
		
		$data['data'] = $this->Crud->get_records('empl');
		$array[] = array('id'=>'10','name'=>'raman','lname'=>'ch','contact'=>'58746','dept'=>'IT');
		/* 
		$data[] = array_push($data['data'],$array);
		
        $json = json_encode($data);
	
		 echo $json;
		die;  */
		return view('show_crud', $data);
	}


	public function create()
	{
	    
		$data['dept'] = $this->Crud->get_dept('dept');
		
		return view('create_crud',$data);
	}


	public function stored()
	{
	   
	   $request = \Config\Services::request();
	    if ($request->getMethod() == "POST") { 
        $validation =  \Config\Services::validation();

        $rules = [
            "name" => [
                "label" => "First Name", 
                "rules" => "required|min_length[3]|max_length[20]"
            ],
            "lname" => [
                "label" => "Last Name", 
                "rules" => "required|min_length[3]|max_length[20]"
            ],
            "contact" => [
                "label" => "Contact", 
                "rules" => "required|min_length[3]|max_length[20]"
            ],
        ];
	 if ($this->validate($rules)) {
       $data['name'] = $request->getPost('name');
       $data['lname'] = $request->getPost('lname');
       $data['contact'] = $request->getPost('contact');
	   $data['dept'] = $request->getPost('dept');
      
		$this->Crud->datainsert('empl', $data);
		return redirect()->route('Home::index');
	} else {
            $data["validation"] = $validation->getErrors();
			$data['dept'] = $this->Crud->get_dept('dept');
			return view('create_crud',$data);
        }
	
	}
	}
	public function edita($id)
	{
		$data['data'] = $this->Crud->find_record_by_id('empl', $id);
		$data['dept'] = $this->Crud->get_dept('dept');
		
		return view('edit_crud', $data);
	}

	public function dataupdate()
	{
		$request = \Config\Services::request();
		//var_dump($request->getPost('uid'));die;
	    $data['name'] = $request->getPost('name');
	    $data['lname'] = $request->getPost('lname');
	    $data['contact'] = $request->getPost('contact');
	    $data['dept'] = $request->getPost('dept');
	    $this->Crud->dataupdate('empl', $data, $request->getPost('uid'));
		return redirect()->route('Home::index');
	}

	public function datadelete($id)
	{
		$this->Crud->datadelete( $id);
		
		return redirect()->route('Home::index');
	}
}
