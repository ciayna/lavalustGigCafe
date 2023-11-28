<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class homeview extends Controller {

  public function __construct(){
    parent:: __construct();
    $this->call->model('employeeModel', 'users');
  }

  public function home() {

  $this->call->view('home');
  }

  public function contacts() {
  $this->call->view('contacts');
  }

  public function packages() {
  $this->call->view('packages');
  }

  public function crew() {
  $this->call->view('crew');
  }

  public function login() {
  $this->call->view('login');
  }

  //para sa login at register
  public function signin() {

  if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $this->form_validation
    ->name('username_log')
      ->required() 
    ->name('password_log')
      ->required();
          
      if ($this->form_validation->run() == FALSE)
      {
          $data = [
              'errors' => $this->form_validation->errors(),
          ];
          $this->call->view('login', $data);
      }
      else {

          $username = $_POST['username_log'];
          $password = $_POST['password_log'];
          $result = $this->users->LoginUser($username);

          if($result) {
              $hashedpass = $result['password'];
              if(password_verify($password,$hashedpass))
              {
                  $userdata = array(
                      'id' => $result['id'],
                      'name' => $result['name'],
                      'username'  => $result['username'],
                      'email'     => $result['email'],
                      'user_type'     => $result['user_type'],
                      'logged_in' => TRUE
                  );
                  $this->session->set_userdata($userdata);
                  if ($userdata['user_type'] === 'admin'){
                    redirect('/');
                  }
                  else {
                    redirect('/home');
                  }
              }
              else {
                  $this->session->set_flashdata('msg','wrong password.');
                  redirect('/login');
              }
          } else {
              $this->session->set_flashdata('msg','No users exist with that username.');
              redirect('/login');
          }
      }
    }
    else{
      $this->call->view('login');
    }
  }
  public function signup() {

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
      $this->call->library('form_validation');
      $this->form_validation
      ->name('name')
        ->required()  
      ->name('username')
        ->required()
        ->min_length(6)
        ->max_length(30)
      ->name('email')
        ->required()
        ->valid_email()
      ->name('password')
        ->required()
        ->custom_pattern("^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$", 'The password must contain a minimum of eight characters, at least one letter, one number and one special character.')
      ->name('confirmpassword')
        ->matches('password')
        ->required();

      if ($this->form_validation->run() == FALSE)
      {
          $data = [
              'errors' => $this->form_validation->errors(),
          ];
          $this->call->view('signup', $data);
      }
      else {
          $name = $_POST['name'];   
          $username = $_POST['username'];
          $email = $_POST['email'];
          $user_type = $_POST['user_type'];
          $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
          $res_email = $this->users->CheckDupEmail($email);
          $res_name = $this->users->CheckDupUsername($username);
          
          if($res_email) {
              $this->session->set_flashdata('msg','A user exists with that email.');
              redirect('/signup');
          } else if ($res_name) {
              $this->session->set_flashdata('msg','A user exists with that username.');
              redirect('/signup');
          } else {
              $result = $this->users->RegUser($name ,$username, $email, $password, $user_type);
              if ($result) {
                  $this->session->set_flashdata('msg','You have registered sucessfully.');
                  redirect('/signup');
              } else {
                  $this->session->set_flashdata('msg','Something went wrong.');
                  redirect('/signup');
              }
          }
      }
  }
  else{
    $this->call->view('signup');
  }
}

}
?>
