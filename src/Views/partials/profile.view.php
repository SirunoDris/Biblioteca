
  <div class="nav-item dropdown">
    <span><?= $user->name?></span>
    <ul class="profile-down"> 
      <?php if($rol=='1'):?>
      <li><a  href="/admin/libros">Cataleg</a></li>
      <li><a href="/admin/users">Usuaris</a></li>
      <?php endif;?>
      <!--<li><a href="/dashboard/prestecs">Prestecs actuals</a></li>-->
    <li><a href="/auth/logout">Sortir</a></li>
  </ul>
</div>
 
