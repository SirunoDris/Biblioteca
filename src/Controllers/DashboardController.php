<?php

  namespace App\Controllers;

use App\Controller;
use App\Container;
use App\Request;
use App\Session;
use App\Models\Libros;

  final class DashboardController extends Controller{
    protected $user;
    protected $id;

    function __construct(Request $request,Session $session){
      parent::__construct($request,$session);
      $this->user=Session::get('user'); //usuario de la session
      //$this->id = $id;//no funciona
    }

    public function index(){
      $user=Session::get('user');
      //primer obtenir dades
      $libros= new Libros();
      $cataleg=$libros->find(['disponible'=>true]);    
     //$cataleg=$this->qb->select(['*'])->from('llibres')->exec()->fetch();
      return view('dashboard', ['cataleg'=>$cataleg,'user'=>$user]); 
    }
   function reserva(){
     //$id=$this->request->getParams(); //falta este metodo en la Request que no se que deberia devolver
     //$book=(new Book())->find(['id'=>$id]); //no funciona
     //var_dump($book);
   }
  }