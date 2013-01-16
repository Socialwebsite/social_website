<?php
/*Variable*/ /*function*/ /*&quot;server&quot;, &quot;username&quot;, &quot;password&quot;&quot;*/
$connect  =  mysql_connect('localhost',   'root',     '');
if($connect != true)
{
   die('Error  Problem connecting to database.' . mysql_error()); 
}

/* (step2) Select database*/
                            /* database name */
$db_selected = mysql_select_db('socal_website');
if($db_selected != true)
{
   die('Error  Problem selecting the database.' . mysql_error()); 
}
?>