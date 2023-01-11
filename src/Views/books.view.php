<?php include 'partials/header.view.php'; ?>
<div class="">
  <?php foreach($books as $book):?>
    <div class="book">
      <p><?= $book->titol;?></p>
      <p span="status"><?=($book->disponible==1)?'disponible':'en prèstec';?></p>
      <div><br><button class="btn" id="edita">Edita</button></div>
      <button>Eliminar</button>
    </div>
  <?php endforeach;?>
</div>