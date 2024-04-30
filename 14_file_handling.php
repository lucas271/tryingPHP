<?php

/* ---------- File Handling --------- */

/* 
  File handling is the ability to read and write files on the server.
  PHP has built in functions for reading and writing files.
*/


$file= 'extrar/users.txt';
if(file_exists($file)){
  $handle = fopen($file, 'r');
  $content = fread($handle, filesize($file));
  fclose($handle);
  echo $content;
} else{
  $handle = fopen($file, 'w');
  $content = 'brad' . PHP_EOL . 'sara'. PHP_EOL . 'MIKE';
  fwrite($handle, $content);
  fclose($file);
}