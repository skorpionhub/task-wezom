<?php
    function isAlgorithm($string)
    {
        $parentheses = array('{', '}', '(', ')', '[', ']');
        $stacks = array_intersect(str_split($string), $parentheses);
        //var_dump($stacks);
        foreach ($stacks as $stack) {
            echo $stack;
        }
        echo "<br>";
    }
isAlgorithm("{sdfsdfd( f_(10\3*10+100))[v{() fv[]f)d}]}");

?>