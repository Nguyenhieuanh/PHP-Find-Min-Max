<?php
function findMin($arr) {
    $min = $arr[0];
    for ($i = 1; $i < count($arr); ++$i) {
        if ($arr[$i] < $min) {
            $min = $arr[$i];
        }
    }
    return $min;
}

function findMax($arr) {
    $max = $arr[0];
    for ($i = 1; $i < count($arr); ++$i) {
        if ($arr[$i] > $max) {
            $max = $arr[$i];
        }
    }
    return $max;
}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[Thực hành] Tìm kiếm giá trị lớn nhất và nhỏ nhất</title>
</head>
<style>
    body {
        width: 500px;
    }
</style>
<body>
<?php
$nums = [];
for($i = 0; $i < 100; ++$i){
    $nums[$i] = rand(1, 101);
}
foreach($nums as $num) {
    echo $num . " ";
}

$minValue = findMin($nums);
echo "<br/>";
echo "The minimum value is: " . $minValue;

$maxValue = findMax($nums);
echo "<br/>";
echo "The maximum value is: " . $maxValue;
?>
</body>
</html>
