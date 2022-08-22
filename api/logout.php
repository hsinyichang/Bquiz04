<?php
session_start();
unset($_SESSION[$_GET['table']]);  //傳過來的table值  去登出

// switch($_GET['table']){
//     case 'mem':
//         unset($_SESSION['mem']);
//     break;
//     case 'admin':
//         unset($_SESSION['admin']);
//     break;
// }