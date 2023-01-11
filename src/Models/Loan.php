<?php
//prestamo
  namespace App\Models;
  use App\Models\User;
  use App\Models\Book;

  class Prestec extends Model{
    protected Book $books;
    protected User $user;
     public function __construct($user,$books){
      parent::__construct();
       $this->user=$user;
       $this->books=$books;
    } 
    public function active(){
    }
    /*
    public function user(){
      return $this->belongsTo(User::class);
    }
    */
  }