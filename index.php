<?php echo 'ooh..give a GET q=? ';

if(isset($_GET['q']) ){
  print_r($_GET['q']);
}
echo '<br><br><br>';
phpinfo();
?>
