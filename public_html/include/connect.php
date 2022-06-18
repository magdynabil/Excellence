<?php $host='50.87.233.33';
$root='asaadsay_magdynabil';
$password='121150@Sha';
$db_name='asaadsay_test_system';
$connect=mysqli_connect($host,$root,$password,$db_name);
function close_DB(){ global $connect; mysqli_close($connect); }
?>