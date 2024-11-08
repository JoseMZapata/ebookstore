<?php
    $db =new mysqli("localhost", "usuario", "root", "ebookstore");
    if(!$db){
        echo "<h1>Unable to connect database</h1>";
    }
?>
