<?php 
    function calculateAdd($num1, $operatoins, $num2){
        $sum;
        switch($operatoins){
            case "add";
                $sum = $num1 + $num2;
                break;
            case "subtract";
                $sum = $num1 + $num2;
                break;
            default; 
            $result = "Output Error";
            break;
        }

        return $result;
    }
?>