<?php
        $db=new PDO("mysql:host=localhost;dbname=bookstore",
                "root","mysql");
        $db->exec("set names utf8");
?>