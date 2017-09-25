<?php
/**
 * Created by PhpStorm.
 * User: a132
 * Date: 24.09.17
 * Time: 19:54
 */
$data = [];
while(true){
  $input = trim(fgets(STDIN));
  if(trim($input) == ''){
      break;
  }
  $data [] = $input;

}
?>


<table border="3" cellpadding="1">
    <tbody>

        <tr>
            <td>Name:</td>
            <td><?= $data[0];?></td>
        </tr>
        <tr>
            <td>Phone Number:</td>
            <td><?= $data[1];?></td>
        </tr>
        <tr>
            <td>Age:</td>
            <td><?= $data[2];?></td>
        </tr>
        <tr>
            <td>Address:</td>
            <td><?= $data[3];?></td>
        </tr>

    </tbody>
</table>

