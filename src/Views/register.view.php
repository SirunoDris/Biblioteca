<? include 'partials/no-header.view.php';?>

<main class="container"> 
  <h3>Sign up</h3>
  <div class="card-login">
  <form class="form-login" action="/auth/signup" method="POST">
    <div class="form-row">
      <div class="form-item">  
        <label for="name">Nom:</label>
      </div>
      <div class="form-item"> 
        <input type="text" name="nom" required>
      </div>
    </div>
     <div class="form-row">
      <div class="form-item">  
        <label for="email">Email:</label>
      </div>
      <div class="form-item"> 
        <input type="email" name="email" required>
      </div>
    </div>
    <div  class="form-row">
      <div class="form-item">
        <label  class="form-item" for="passwd">Password:</label>
      </div>
      <div class="form-item">
        <input type="password" name="passwd" required>
      </div>
    </div>
    <div  class="form-only">
      <button class="btn" type="submit">Sign up</button>
    </div>
    <h4>t'estas registrant com a usuari</h4>
    <h5><a href="/">Back...</a</h5>
  </form>
  </div>
</main>