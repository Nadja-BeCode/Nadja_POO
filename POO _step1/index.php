<?php

require('form.php');

echo $form = new Form('index.php','Nadja','modified');
echo $form->create($action);
echo $form->input('text','name',$name);
echo $form->radio('radio',$radio);
//Yes or No?
echo $form->select($fruits);
//$fruits = array("Mango","Avocado","Strawberry","Papaya");
echo $form->textarea();
echo $form->checkbox('checkbox',$checkbox);
echo $form->submit('modified');//submit
echo $form->end();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO Step I</title>
</head>
<body>
    
</body>
</html>