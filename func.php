<?php
    function isAlgorithm($string)
    {
        $parentheses = array('{', '}', '(', ')', '[', ']');
        //$stacks = array_intersect(str_split($string), $parentheses);
        $stacks = array_intersect(array_filter(str_split($string)), $parentheses);
        //var_dump($stacks);
       /* foreach ($stacks as $stack) {
            echo $stack;
        }
        echo "<br>";*/
        if (sizeof($stacks)==0){
            return $message = "В строке нет скобок!";
        }
        elseif (sizeof($stacks)%2==0){
            //echo "Вычисления" ."<br>";
            $i = 0;
            $stacks = array_values($stacks);
            while ($i < sizeof($stacks)) {
                $key = array_search($stacks[$i], $parentheses);
                if (array_key_exists($i, $stacks) && $stacks[$i] == $parentheses[$key] && $stacks[$i + 1] == $parentheses[$key+1]) {
                    //echo "Удаляем";
                    unset($stacks[$i], $stacks[$i + 1]);
                    $stacks = array_values($stacks);
                    $i = 0;
                } else $i++;
            }
            if (sizeof($stacks) == 0) return $message = "Верно:)";
            else return $message = "Не верно!";
        }

        else{
            return $message = "Не верно!";
        }
        /*echo "<br>";
        foreach ($stacks as $stack) {
            echo $stack;
        }
        echo "<br>";*/
    }
//echo isAlgorithm("[]462j{j{781}}(2dh)((4))f([]843g)m{3{[()c9]0}g4}");
$message = isAlgorithm($_POST['string']);
header("Location: /?info=".$message);


?>