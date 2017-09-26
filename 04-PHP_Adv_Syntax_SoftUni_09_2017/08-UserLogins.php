<?php
/**
 * Created by PhpStorm.
 * User: a132
 * Date: 26.09.17
 * Time: 10:10
 */
$mode = 'reg';
$loginFail = 0;
$users = [];
//$user = '';
//$pass = '';
while($input = trim(fgets(STDIN))){
    if($input == 'end'){break;}
    if($input == 'login'){
        $mode = 'login';
        continue;
    }
    $data = explode(' -> ', $input);
    If($mode == 'reg') {
//       $user = $data[0];
//       $pass = $data[1];
        $users[$data[0]] = $data[1];
    }else {
        if (array_key_exists($data[0], $users)
            && $users[$data[0]] == $data[1]) {
            echo "$data[0]: logged in successfully \n";
        } else {
            echo "$data[0]: login failed\n";
            $loginFail++;
        }
    }
}
echo "unsuccessful login attempts: $loginFail \n";