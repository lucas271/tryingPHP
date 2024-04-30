<?php

session_start();
/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/

if(isset($_POST['submit'])){
  $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
  $password = $_POST['password'];

  if($username == 'john' && $password == 'password'){
    $_SESSION['username'] = $username;
    header('Location: /phpTesting/extras/dashboard.php');
  }else{
    echo 'incorrect Login';
  }
}

?>

<a href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"></a>

<form action="<?php echo $_SERVER['PHP_SELF'];?>?name=John&age=30" method="POST">
  <div>
    <label for="username">name</label>
    <input type="text" id="name" name="username">
  </div>
  <div>
    <label for="password" >password</label>
    <input type="password" id="password" name="password">

    <input type="submit" value="Submit" name="submit"/>
  </div>
</form>