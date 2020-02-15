<?php
    function isAlgorithm($string)
    {
        $parentheses = array('{', '}', '(', ')', '[', ']');
        $stacks = array_intersect(str_split($string), $parentheses);
        if (sizeof($stacks)==0) return $message = "В строке нет скобок.";
        elseif (sizeof($stacks)%2==0){
            $i = 0;
            $stacks = array_values($stacks);
            while ($i < sizeof($stacks)) {
                $key = array_search($stacks[$i], $parentheses);
                if (array_key_exists($i, $stacks) && $stacks[$i] == $parentheses[$key] && $stacks[$i + 1] == $parentheses[$key+1]) {
                    unset($stacks[$i], $stacks[$i + 1]);
                    $stacks = array_values($stacks);
                    $i = 0;
                } else $i++;
            }
            if (sizeof($stacks) == 0) return $message = "Верно:)";
            else return $message = "Не верно!";
        }
        else return $message = "Не верно!";
    }
$message = isAlgorithm($_POST['string']);
header("Location: /?info=".$message);


?>