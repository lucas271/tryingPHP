<?php
/* ------------ Functions ----------- */

/*
  Functions are reusable blocks of code that we can call to perform a specific task.
  We can pass values into functions to change their behavior. Functions have their own local scope as opposed to global scope


/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }
*/


$y = 'blabla';
function registerUser(string $username="nonamer"){

   echo "$username criou uma conta";
}
registerUser('pedrin');


//another way of declaring fucntions is with the shorthand

$func = fn($param1) => print_r($param1);

$func('lallala');