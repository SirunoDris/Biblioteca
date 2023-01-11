<?php

namespace App\Models;
use App\Databases\QueryBuilder;
use App\Container;

abstract class Model {
  protected QueryBuilder $qb;
  protected string $table;
  //array de claus-valors
  protected array $data;
  protected array $condition;
  protected int $id;

  public function __construct(array $data=null){
    
    //nom taula associada i constructor de consultes
    $reflect = new \ReflectionClass($this); //Para que se refiera que tabla es
    $this->table = strtolower($reflect->getShortName());
    $this->qb=Container::get('query');
    $this->qb->setTable($this->table);
    if($data){
       $this->data=$data; 
       
    }
  }
  public function get():array{
    return $this->data;
  }
  
  function save(){
    $this->qb->update($this->table,$this->data,$this->id);
  }

  function persist(){
     if($this->data){
       try{
        $this->qb->insert($this->data)->exec();
        return true;
      }catch(\Exception $e){
         return false;
      }  
    }
  }
    
  function getAll(){
    $items= $this->qb->select(['*'])->from($this->table)->exec()->fetch();
    return $items;
  }
  function find($condition){
    $k=array_keys($condition);
    $v=array_values($condition);
    $items= $this->qb->select(['*'])->from($this->table)->where([$k[0]=>$v[0]])->exec()->fetch();
   
    return $items;
    //$this->qb->setStmt($this->qb->query($this->qb->getQuery()));
    //return $this->qb->exec()->fetch()[0];
    
  }

  function remove(string $table,int $id,){
    $this->qb->remove($table,$id);
  }
  // de l'objecte actual, extreu la pertinença 
  //user_id
  function belongsTo(Object $obj){
    return $obj;
  }

}
/*
  function hasMany(Object $obj,string $foreign_field){
    $table2=strtolower((new \ReflectionClass($obj))->getShortName()).'s';
    $sql="SELECT * FROM {$this->table} t1 INNER JOIN {$table2} t2 ON t1.id={$table2}.{$foreign_field}";
    $this->qb->query[]=$sql;
    if($this->condition){
        $this->qb->query->where();
    }
    $rows=$this->qb->query->exec()->fetch();
    return $rows;
  }
}*/

/*
Una clase abstracta con sus datos. Es abstracto porque puede ser lo que queramos
Mapper. Mappeador de datos. 
No es obligatori (reflection Calss)
$this->qb->insert() -> podemos usar esto
Conversion de datos a objeto
ReflectionClass -> coger una clase que es el reflejo de otra clase
*/