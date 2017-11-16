<form action="register.php" method="POST">
  <div class="form-group">
    <label for="username">Email address</label>
    <input type="text" class="form-control" name="username" id="username" aria-describedby="usernamehelp" placeholder="Username">
    <small id="usernamehelp" class="form-text text-muted">Seu username será utilizado para realizar o login na sua hospedagem</small>
    <input type="hidden" value="<?php echo $_GET["plan"] ?>" name="plan"/>
  </div>
  <button type="submit" class="btn btn-primary">Contratar</button>
</form>