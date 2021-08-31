<?php
  //this file handle intial database connection for the entire project
  $dbServername="localhost"; // database server name
  $dbUsername="root"; // database username
  $dbPassword=""; // database password
  $dbName="codetrain"; //database name

  //establishing database connection
  $conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);