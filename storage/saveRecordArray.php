<?php 
  // gets entire POST body
  $data = file_get_contents('php://input');
  // write the data out to the file
  $fp = fopen("recordArray.txt", "wb");

  fwrite($fp, $data);
  fclose($fp);

  // make copy of file
  $backup='bu_recordArray_'.date('m-d-Y_hia').'.txt';
  copy("recordArray.txt", $backup);
  
?>
