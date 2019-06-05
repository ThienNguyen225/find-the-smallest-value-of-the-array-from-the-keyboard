<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $array = $_POST["value"];
    $array = explode(" ",$array);
    function checkMin($array){
        $min = $array[0];
        foreach ($array as $key => $value){
            if ($min > $array[$key]){
                $min = $array[$key];
            }
        }
        return $min;
    }
    print_r(checkMin($array));
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài tập tìm giá trị nhỏ nhất của mảng từ bàn phím</title>
    <style>
        form{
            margin-left: 40%;
        }
        h2{
            color: blue;
        }
        .display{
            height: 180px; width: 330px;
            margin: 0;
            padding: 10px;
            border:1px #dd33dd solid;
        }
        input[type=number]{
            margin-left: 30px;
            width: 60%;
        }
        input[type=submit]{
            color: red;
            margin-left: 30%;
            width: 30%;
        }
        fieldset{
            color: darkblue;
        }
    </style>
</head>
<body>
<form method="post">
    <div class="display">
        <h2>Find the smallest value of the array</h2>
        <fieldset>
            <legend>Smallest value</legend>
            <br>Enter array:
            <input type="text" name="value" size="30">
            <br>Display:
            <input type="submit" value="result">
        </fieldset>
    </div>
</form>
</body>
</html>
