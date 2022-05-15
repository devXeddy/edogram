<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form signup">
      <header>edoGram</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>Nome</label>
            <input type="text" name="fname" placeholder="Nome" required>
          </div>
          <div class="field input">
            <label>Cognome</label>
            <input type="text" name="lname" placeholder="Cognome" required>
          </div>
        </div>
        <div class="field input">
          <label>Email</label>
          <input type="text" name="email" placeholder="Inserisci la tua email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Inserisci una nuova password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Seleziona immagine</label>
          <input type="file" name="image" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Registrati">
        </div>
      </form>
      <div class="link">già registrato? <a style="color: rgb(117, 92, 255);" href="login.php">accedi ora</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>
