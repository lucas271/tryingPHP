<?php

/* ----------- Exceptions ----------- */

/*
  PHP has an exception model similar to that of other programming languages. An exception can be thrown, and caught ("catched") within PHP. Code may be surrounded in a try block, to facilitate the catching of potential exceptions. Each try must have at least one corresponding catch or finally block.
*/

function inverse($x){
  try {
    if(!$x){
      throw new Exception('Division by 0');
    }
  
    return 1/$x;
  } catch (Exception $e) {
    echo "caught exception", $e->getMessage(), ' ';
  }//finaly will execute a piece of the code nevertheless if you wanna use it.

}

echo inverse($x);