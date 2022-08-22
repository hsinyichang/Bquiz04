<?php
include_once "../base.php";
$_POST['regdate']=date("Y-m-d");
$Mem->save($_POST);   //存入導過來的post值  以及date值