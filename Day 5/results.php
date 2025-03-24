<?php
    $num1= $_POST['num1'];
    $num2 =$_POST['num2'];
    $operator = $_POST['operator'];

    if ($operator == '+') {
        echo $num1 + $num2;
    } elseif ($operator == '-') {
        echo $num1 - $num2;
    } elseif ($operator == '*') {
        echo $num1 * $num2;
    } elseif ($operator == '/') {
        echo $num1 / $num2;
    } 

    // function operator(){
    //     $num1= $_POST['num1'];
    //     $num2 =$_POST['num2'];
    //     $operator = $_POST['operator'];
    //     function add(){
    //         $num1= $_POST['num1'];
    //         $num2 =$_POST['num2'];
    //         $operator = $_POST['operaator'];
    //         	$add  = $num1 + $num2;
    //             echo $add;
    //     }
    //     function sub(){
    //         $num1= $_POST['num1'];
    //         $num2 =$_POST['num2'];
    //         $operator = $_POST['operaator'];
    //         $subtract  = $num1 + $num2;
    //         echo $subtract;
    //     }
    //     function divide(){
    //         $num1= $_POST['num1'];
    //         $num2 =$_POST['num2'];
    //         $operator = $_POST['operaator'];
    //         $divide  = $num1 + $num2;
    //         echo $divide;
    //     }
    //     function multiply(){
    //         $num1= $_POST['num1'];
    //         $num2 =$_POST['num2'];
    //         $operator = $_POST['operaator'];
    //         $multiply  = $num1 + $num2;
    //         echo $multiply;
    //     }

    // }

?>