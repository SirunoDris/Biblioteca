<? include 'partials/no-header.view.php';?>

<main class="container"> 
  <h3>Sign in</h3>
  <div class="card-login">
  <form class="form-login" action="/auth/signin" method="POST">
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
      <button class="btn" type="submit">Sign in</button>
    </div>
  </form>
  </div>
</main>