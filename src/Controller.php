<?php
  namespace App;
  use App\Container;
  use App\Databases\QueryBuilder;
  use App\Request;
  use App\Session;
//Clase principal
  abstract class Controller{
    protected Request $request;
    protected Session $session;
    protected QueryBuilder $qb;
    
    public function __construct(Request $request,Session $session){
      //container contiene todos los servicios actovados, qb es un sericio
      $this->qb=Container::get('query'); //Servicio query consulta
      $this->request=$request; //compone mi controller con 2 obj (request y session)
      $this->session=$session;
    }
    public function redirect(string $url){
      header('Location:'.$url); //vista
    }
    public function error(){
      return view('error',['error'=>Session::get('error')]); //redirigot
    }
  }