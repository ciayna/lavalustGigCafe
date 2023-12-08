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

    public function editview($id) {
        $ID = $id;
        $data = [
            'selected' => $this->employeeModel->SelectedData($ID), 
            'employee' => $this->employeeModel->GetData(),
        ];

        $this->call->view('editAdmin', $data);
	}

    public function save() {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $status = $_POST['status'];
        $event = $_POST['event'];
        $date = $_POST['date'];
        
        if($id != null) {
            $result = $this->employeeModel->UpdateData($id,$name,$email,$address,$phone,$status,$event,$date);
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
            $result = $this->employeeModel->SaveData($name,$email,$address,$phone,$status,$event,$date);
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
    public function save1() {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $status = $_POST['status'];
        $event = $_POST['event'];
        $date = $_POST['date'];
        
        if($id != null) {
            $result = $this->employeeModel->UpdateData($id,$name,$email,$address,$phone,$status,$event,$date);
            if($result) {
                $data = [
                    'employee' => $this->employeeModel->GetData(),
                ];
                $this->call->view('/book', $data);
            }
            else{
                $data = [
                    'employee' => $this->employeeModel->GetData(),
                ];
                $this->call->view('/book', $data);
            }
		}
		else{
            $result = $this->employeeModel->SaveData($name,$email,$address,$phone,$status,$event,$date);
            if($result) {
                $data = [
                    'employee' => $this->employeeModel->GetData(),
                ];
                $this->call->view('/book', $data);
			}
			else{
                $data = [
                    'employee' => $this->employeeModel->GetData(),
                ];
                $this->call->view('/book', $data);
            }
		};
	}

    public function delete($id) {
        $ID = $id;
        $result = $this->employeeModel->DeleteData($ID);
        if($result) {
            $data = [
                'employee' => $this->employeeModel->GetData(),
            ];
            return redirect('/mainview', $data);
        }
	}

    public function mail() {

    }    
}
?>