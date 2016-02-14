<?php

 //タグ・値・有効期限
 
 setcookie("username","hiyorineko",time()+20);
 
 echo $_COOKIE['username'];