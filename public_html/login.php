<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>



<?php include_once "header.php"; ?>
<script src="javascript/pass-show-hide.js"></script>
<script src="javascript/login.js"></script>
<body>
  <div class="wrapper">
    <section class="form login">
      <header>edoGram</header>
      <form action="./php/login.php" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Email</label>
          <input type="text" name="email" placeholder="Inserisci la tua email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Inserisci la Passwird" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="ACCEDI">
        </div>
      </form>
      <div class="link">Non sei ancora registrato? <a style="color: rgb(117, 92, 255);" href="index.php">registrati ora</a></div>
    </section>
  </div>

</body>
</html>
