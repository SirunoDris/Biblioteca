<?php 
  //$user= $_SESSION['user'];
  //$rol=$_SESSION['user']->roles_id;
  if ($user):?>
    <div class="nav">
      <div class="nav-item">
        <a href="/">Home</a>
      </div>
      <?php include 'profile.view.php';?>
    <?php else:?>
      <div class="nav-item">
        <a href="/auth">Sign in</a>
      </div>
      <div class="nav-item">
        <a href="/reg">Sign up</a>
      </div> 
     
  </div>
 <?php endif;?>