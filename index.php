<?php
header("Content-Type: text/html; charset=utf-8");
require_once __DIR__.'/models/Users.php';


$all_users = Users::GetAll();


include __DIR__.'/views/index.php';