<?php
  class Users extends Controller {
    public function __construct(){
      $this->userModel = $this->model('User');
    }
    public function register(){
      // Check for POST
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Process form
  
        // Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        // Init data
        $data =[
            'vorname' => trim($_POST['vorname']),
            'nachname' => trim($_POST['nachname']),
            'avatar' => trim($_POST['avatar']),
            'username' => trim($_POST['uid']),
            'email' => trim($_POST['email']),
            'passwort1' => trim($_POST['passwort1']),
            'passwort2' => trim($_POST['passwort2']),
            'vorname_err' => '',
            'nachname_err' => '',
            'username_err' => '',
            'email_err' => '',
            'passwort1_err' => '',
            'passwort2_err' => '',
        ];

       

        // Validate Vorname
        if(empty($data['vorname'])){
          $data['vorname_err'] = 'Bitte geben Sie einen Vornamen an';
        }
          
        else if (!preg_match("/^[a-zA-Z0-9]*$/", $data['vorname'],)) {
		   $data['vorname_err'] = 'Bitte geben sie gültige Zeichen an';
	    }
          
          
        // Validate Nachname
        if(empty($data['nachname'])){
          $data['nachname_err'] = 'Bitte geben Sie einen Nachnamen an';
        }
          
        else if (!preg_match("/^[a-zA-Z0-9]*$/", $data['nachname'],)) {
		   $data['nachname_err'] = 'Bitte geben sie gültige Zeichen an';
	    }

        // Validate Username
        if(empty($data['uid'])){
          $data['username_err'] = 'Bitte geben Sie einen Benutzernamen an';
        }
          
        else if (!preg_match("/^[a-zA-Z0-9]*$/", $data['uid'],)) {
		   $data['username_err'] = 'Bitte geben sie gültige Zeichen an';
	    }
          
         // Validate Email
        if(empty($data['email'])){
          $data['email_err'] = 'Bitte geben Sie eine E-Mail ein';
        } else {
          // Check email
          if($this->userModel->findUserByEmail($data['email'])){
            $data['email_err'] = 'E-Mails wurde bereits verwendet';
          }
        }
          
        // Validate Password
        if(empty($data['passwort1'])){
          $data['passwort1_err'] = 'Bitte geben Sie ein Passwort ein';
        } 
        elseif(strlen($data['passwort1']) < 8){
          $data['passwort1_err'] = 'Passwort muss mindestens 8 Zeichen lang sein';
        }
       

        // Validate Confirm Password
        if(empty($data['passwort2'])){
          $data['passwort2_err'] = 'Bitte geben Sie ein Passwort ein';
        } else {
          if($data['passwort1'] != $data['passwort2']){
            $data['passwort2_err'] = 'Passwörter stimmen nicht überein';
          }
        }

        // Make sure errors are empty
        if(empty($data['vorname_err']) && empty($data['nachname_err']) && empty($data['uid_err']) && empty($data['email_err']) && empty($data['passwort1_err']) && empty($data['passwort2_err'])){
            
          
          // Hash Password
          $data['passwort1'] = password_hash($data['passwort1'], PASSWORD_DEFAULT);

          // Register User
          if($this->userModel->register($data)){
            flash('register_success', 'Sie sind registriert und können sich nun einloggen');
            redirect('users/login');
          } else {
            die('Etwas ging schief');
          }

        } else {
          // Load view with errors
          $this->view('users/register', $data);
        }

      } else {
        // Init data
            if(!empty($data)) {
                $data = [
                    'vorname' => trim($_POST['vorname']),
                    'nachname' => trim($_POST['nachname']),
                    'avatar' => trim($_POST['avatar']),
                    'username' => trim($_POST['uid']),
                    'email' => trim($_POST['email']),
                    'passwort1' => trim($_POST['passwort1']),
                    'passwort2' => trim($_POST['passwort2']),
                    'vorname_err' => '',
                    'nachname_err' => '',
                    'username_err' => '',
                    'email_err' => '',
                    'passwort1_err' => '',
                    'passwort2_err' => '',
                ]; 
                
                // Load view
                $this->view('users/register', $data);
            }
        // Load view
        $this->view('users/register');
      }
    }

      
      
      
    public function login(){
      // Check for POST
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Process form
        // Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        
        // Init data
        $data =[
          'email' => trim($_POST['email']),
          'passwort' => trim($_POST['passwort']),
          'email_err' => '',
          'passwort_err' => '',      
        ];

        // Validate Email
        if(empty($data['email'])){
          $data['email_err'] = 'Bitte geben Sie eine E-Mail Adresse an';
        }

        // Validate Password
        if(empty($data['passwort'])){
          $data['passwort_err'] = 'Bitte geben Sie ein Passwort an';
        }

        // Check for user/email
        if($this->userModel->findUserByEmail($data['email'])){
          // User found
        } else {
          // User not found
          $data['email_err'] = 'Es wurde kein Benutzer gefunden';
        }

        // Make sure errors are empty
        if(empty($data['email_err']) && empty($data['password_err'])){
          // Validated
          // Check and set logged in user
          $loggedInUser = $this->userModel->login($data['email'], $data['passwort']);

          if($loggedInUser){
            // Create Session
            $this->createUserSession($loggedInUser);
          } else {
            $data['passwort_err'] = 'Passwort ist falsch';

            $this->view('users/login', $data);
          }
        } else {
          // Load view with errors
          $this->view('users/login', $data);
        }


      } else {
        // Init data
        $data =[    
          'email' => '',
          'passwort' => '',
          'email_err' => '',
          'passwort_err' => '',        
        ];

        // Load view
        $this->view('users/login', $data);
      }
    }

    public function createUserSession($user){
      $_SESSION['user_id'] = $user->id;
      $_SESSION['user_email'] = $user->email;
      $_SESSION['user_name'] = $user->name;
      redirect('frage/index');
    }

    public function logout(){
      unset($_SESSION['user_id']);
      unset($_SESSION['user_email']);
      unset($_SESSION['user_name']);
      session_destroy();
      redirect('users/login');
    }

    public function isLoggedIn(){
      if(isset($_SESSION['user_id'])){
        return true;
      } else {
        return false;
      }
    }
  }