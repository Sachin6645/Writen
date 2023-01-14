<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $cars = array("BMW","BOLVO","YAMAHA");
    // for each
    foreach($cars as $value)
    {
      echo $value."<br>"; 
    }
//    for loop
for($i = 0; $i < count($cars);$i++){
    echo $cars[$i]."<br>";
}
// foreach loop for associative array
$persons = array("peter"=>50, "jone"=>60,"Harry"=>45);
foreach($persons as $x=> $v){
    echo "Key:".$x. ",Value:".$v."<br>";
}

// function
function sachin($v1,$v2){
    $sum = $v1+$v2;
    
    return $sum;
   
}

echo sachin(30,50);
echo "<br>";
echo sachin(400,100);
echo "<br>";

function sachin1($v1,$v2){
    $sub = $v1-$v2;
    
    return $sub;
   
}
echo sachin1(400,200);

// Global variable
var_dump($_SERVER);
?>

</body>
</html>