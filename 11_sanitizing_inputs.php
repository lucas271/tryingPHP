<?php
/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/

if(isset($_POST['submit'])){
  $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
  $age = htmlspecialchars($_POST['age']);
}

?>

<a href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>?name=John&age=30"></a>

<form action="<?php echo $_SERVER['PHP_SELF'];?>?name=John&age=30" method="POST">
  <div>
    <label for="name">name</label>
    <input type="text" id="name" name="name">
  </div>
  <div>
    <label for="" id="age">age</label>
    <input type="text" id="age" name="age">

    <input type="submit" value="Submit" name="submit"/>
  </div>
</form>