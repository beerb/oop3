<?php
//var_dump($all_users);

foreach($all_users as $one_user){
    echo $one_user->full_name.' : Баланс '.$one_user->balance.'<br>';

}