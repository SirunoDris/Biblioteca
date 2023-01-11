<?php
$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

  use App\Container;
  use App\Databases\QueryBuilder;
  use App\Databases\Connection;
  use App\Session;
  
 
  //acces a servei configuració
 Container::bind('config',require 'config.php');
  //acces a servei database
Container::bind('query',new QueryBuilder(Connection::make(Container::get('config'))));

  //Servicio Query y servicio config