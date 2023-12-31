<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class employeeModel extends Model {

    public function GetData(){
        $data = $this->db->table('table_reservations')->get_all();
		return $data;
    }

    public function SelectedData($id){
        $ID = $id;
        $data = $this->db->table('table_reservations')->where('id',$ID)->get();
		return $data;
    }

    public function DeleteData($id){
        $ID = $id;
        $data = $this->db->table('table_reservations')->where('id',$ID)->delete();
		return $data;
    }

    public function DeleteUserData($id){
        $ID = $id;
        $data = $this->db->table('table_user')->where('id',$ID)->delete();
		return $data;
    }


    public function SaveData($name,$email,$address,$phone,$status,$event,$date){

        $bind = [
            'name' => $name,
            'email' => $email,
            'address' => $address,
            'phone' => $phone,
            'status' => $status,
            'event' => $event,
            'date' => $date,
        ];
        
        return $this->db->table('table_reservations')->insert($bind);
    }
    public function UpdateData($Id,$name,$email,$address,$phone,$status,$event,$date){
        $ID = $Id;
        $bind = [
            'name' => $name,
            'email' => $email,
            'address' => $address,
            'phone' => $phone,
            'status' => $status,
            'event' => $event,
            'date' => $date,

        ];
        
        return $this->db->table('table_reservations')->where('id',$ID)->update($bind);
    }



    //para sa login tsaka register
    public function GetUserData(){
        $userData = $this->db->table('table_user')->get_all();
        return $userData;
    }

    public function GetUser($id){
        return $this->db->table('table_user')->where('id',$id)->get();
    }

    public function CheckDupEmail($email) {
        return $this->db->table('table_user')->where('email',$email)->get();
    }

    public function CheckDupUsername($username) {
        return $this->db->table('table_user')->where('username',$username)->get();
    }

    public function RegUser($name, $username, $email, $password, $user_type){
        $bind = [
            'name' => $name,
            'username' => $username,
            'email' => $email,
            'password' => $password,
            'user_type' => $user_type,
        ];
        return $this->db->table('table_user')->insert($bind);
    }

    public function LoginUser($username){
        return $this->db->table('table_user')->where('username',$username)->get();
    }
}

?>