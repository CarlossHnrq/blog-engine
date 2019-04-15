<?php
$utf8 = header("Content-type: text/html; charset:utf-8");
$link = new mysqli('localhost','root','','blog_engine');
$link->set_charset('utf-8');