<?php

$db['hostname'] = 'localhost';
$db['username'] = 'root';
$db['password'] = '';
$db['database'] = 'pholux_db';

   $conn = mysql_connect($db['hostname'], $db['username'], $db['password']);
   
   if(! $conn )
   {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = 'SELECT username FROM users where username = id;
   mysql_select_db('pholux_db');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval )
   {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
   {
      echo "Hello, $username! <br> ";
	  
	  }
  
   
   mysql_close($conn);

?>