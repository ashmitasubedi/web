<?php
$connection = mysqli_connect('localhost', 'cms', 'secret', 'cms');
if(mysqli_connect_errno()) {
   exit('Database connection failed: ' . mysqli_connect_error() . ' (' . mysqli_connect_errno() . ')');
}