<?php

  namespace App\Controllers;
  use App\Controller;
  use App\Request;
  use App\Session;
  use App\Container;
  use App\Models\Model;
use App\Models\User;
use App\Models\Usuari; 


  final class AuthController extends Controller{
    // $this->qb es el constructor de consultes
    function __construct(Request $request,Session $session){
      parent::__construct($request,$session);
    }

    public function index()
    {
      //mostrar form
      return view('auth');
     
    }
    function signin(){
      //capturar elements de POST
      $email=$this->request->post('email');   
      $passwd=$this->request->post('passwd');
      //crida al metode privat d'autenticació
      $this->auth($email,$passwd);  
    }
    
    private function auth(string $email,string $passwd){ //llamamos metodo auth
    //var_dump($email, $passwd);
      $password=password_hash($passwd,PASSWORD_BCRYPT,['cost'=>4]);
       $res=$this->qb->select(['*'])->from('users')
        ->where(['email'=>$email])->limit(1)->exec()->fetch();
    //var_dump($res);
    
      if($res){
        $user=$res[0];
          if (password_verify($passwd,$user->passwd)){
             Session::set('users',$user);
            //desar servei auth
            $this->redirect('/dashboard');
            }else{
              $this->redirect('/auth');
            }         
          }
      else{
          $this->session->set('error',"Sessión fallida");
          $this->redirect('/auth');
        }
      
     
    }
    

    
    function logout(){
      $this->session->destroy();
      $this->redirect('/');
    }
    
  }