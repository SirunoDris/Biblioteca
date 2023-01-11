<?php

namespace App\Controllers;
use App\Controller;
use App\Request;
use App\Session;
use App\Models\User;

final class RegisterController extends Controller{
    function __construct(Request $request, Session $session){
        parent::__construct($request, $session);
    }

    public function index(){
        //primer obtenir dades
        return view('register');
        //render vista home
     
    }

    function signup(){
        $email=$this->request->post('email');   
        $passwd=$this->request->post('passwd');
        $password=password_hash($passwd,PASSWORD_BCRYPT,['cost'=>4]);
        $roles_id='2';
        $data=['email'=>$email,
          'passwd'=>$password,
          'roles_id'=>$roles_id];
          $user=new User($data); //$data sobra pero falta no se entiende
        //persist on DB
          if($user->persist()){
            $this->redirect('/');
          };
      }

}