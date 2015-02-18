<?php

  // Get list of files contained in a folder.
  $dir    = '../drawings';
  $files = scandir($dir, 1);

  // Remove the last 2 elements in the array, since they simply contain "." and ".."
  //$files = array_pop($files);
  //$files = array_pop($files);

  $files = json_encode($files);

  // Output list of files
  //echo "<pre>";
  print_r($files);
  //echo "</pre>";
