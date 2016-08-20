<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class User {

    protected $name;
    protected $surname;
    protected $email;
    protected $address;
    protected $sentAddr;
    protected $password;
    protected $id;

    public function __construct($email, $password, $name, $surname, $address, $sentAddr) {
        $this->email = $email;
        $this->password = $password;
        $this->address = $address;
        $this->name = $name;
        $this->surname = $surname;
        $this->sentAddr = $sentAddr;
        $this->id = $id;
    }

    public function login() {
        if (isset($_POST['email']) && isset($_POST['password'])) {
            if (!$user->login($_POST['email'], $_POST['password'])) {
                echo 'zły login lub hasło!';
            }
        }
    }
    
   //Dodanie nowego użytkownika
            public function addUser($email,$password)
            {
                $result=$this->id->query("insert into `user` values('$email','$password')");
                if(!$result===false)
                {
                    echo "Wystąpił błąd podczas rejestracji nowego użytkownika!";
                }
                else 
                {
                    echo "Zostałeś zarejestrowany poprawnie.";
                }
        
            }
    
    public function getId() {
        return $this->id;
    }
    
    public function Register() {
        
    }
    
    
    public function Logout() {
        
    }
    
    public function CheckIfLoggedIn() {

    /*
     * 
     * class UserService
      {
      protected $_email;    // using protected so they can be accessed
      protected $_password; // and overidden if necessary

      protected $_db;       // stores the database handler
      protected $_user;     // stores the user data

      public function __construct(PDO $db, $email, $password)
      {
      $this->_db = $db;
      $this->_email = $email;
      $this->_password = $password;
      }

      public function login()
      {
      $user = $this->_checkCredentials();
      if ($user) {
      $this->_user = $user; // store it so it can be accessed later
      $_SESSION['user_id'] = $user['id'];
      return $user['id'];
      }
      return false;
      }

      protected function _checkCredentials()
      {
      $stmt = $this->_db->prepare('SELECT * FROM users WHERE email=?');
      $stmt->execute(array($this->email));
      if ($stmt->rowCount() > 0) {
      $user = $stmt->fetch(PDO::FETCH_ASSOC);
      $submitted_pass = sha1($user['salt'] . $this->_password);
      if ($submitted_pass == $user['password']) {
      return $user;
      }
      }
      return false;
      }

      public function getUser()
      {
      return $this->_user;
      }
      }
     */
}
