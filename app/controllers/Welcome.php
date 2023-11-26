<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Welcome extends Controller {

	public function __construct(){
        parent:: __construct();
        $this->call->model('employeeModel');
        
    }

	public function mainview() {
		$data = [
			'employee' => $this->employeeModel->GetData(),
		];

		$this->call->view('main', $data);
	}

    public function save() {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        
        if($id != null) {
            $result = $this->employeeModel->UpdateData($id,$name,$email,$address,$phone);
            if($result) {
                $data = [
                    'employee' => $this->employeeModel->GetData(),
                ];
                $this->call->view('main', $data);
            }
            else{
                $data = [
                    'employee' => $this->employeeModel->GetData(),
                ];
                $this->call->view('main', $data);
            }
		}
		else{
            $result = $this->employeeModel->SaveData($name,$email,$address,$phone);
            if($result) {
                $data = [
                    'employee' => $this->employeeModel->GetData(),
                ];
                $this->call->view('main', $data);
			}
			else{
                $data = [
                    'employee' => $this->employeeModel->GetData(),
                ];
                $this->call->view('main', $data);
            }
		};
	}
	
    public function edit($id) {
        $ID = $id;
        $data = [
            'selected' => $this->employeeModel->SelectedData($ID), 
            'employee' => $this->employeeModel->GetData(),
        ];

        $this->call->view('main', $data);
    }

    public function delete($id) {
        $ID = $id;
        $result = $this->employeeModel->DeleteData($ID);
        if($result) {
            $data = [
                'employee' => $this->employeeModel->GetData(),
            ];
            $this->call->view('main', $data);
        }
	}

    public function mail() {

    }    
}
?>