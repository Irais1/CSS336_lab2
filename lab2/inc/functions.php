<?php
    function displayPoints($randomValue1, $randomValue2, $randomValue3, $randomValue4)
    {
        echo "<div id = output>";
                
        if($randomValue1 == $randomValue2 && $randomValue2 == $randomValue3)
        {
            switch($randomValue1)
            {
                case 0: $totalPoints = 1000;
                    echo "<h1>jackpot!</h1>";
                    //echo "<embed src=sound/jackPot.mp3>"; 
                    echo "<audio autoplay>
                    <source src=sound/jackPot.mp3 type=audio/mpeg>
                    Your browser does not support the audio element.
                    </audio>";
                    break;
                case 1: $totalPoints = 500;
                    break;
                case 2: $totalPoints = 250;
                    break;
                case 3: $totalPoints = 900;
                    break;
            }
            echo "<h2>You won $totalPoints points!</h2>";
        }
        else
        {
            echo "<h3> Try Again! </h3>";
        }
        echo "</div>";
        }
        function displaySymbol($randomValue, $pos)
        {
                // if($randomValue ==0)
                // {
                //     echo' <img = src = "img/seven.png" alt = "seven" title = "seven" width = "70" />';
                // }
                // else if ($randomValue==1)
                // {
                //     echo ' <img = src = "img/cherry.png" alt = "cherry" title = "cherry" width = "70" /'>;
                // }
                // else {
                //     echo ' <img = src = "img/lemon.png" alt = "lemon" title = "lemon" width = "70" /'>;
                // }
            switch ($randomValue) 
            {
                case 0:
                     $symbol = "seven";
                     break;
                 case 1:
                   $symbol = "cherry";
                    break;
                case 2:
                    $symbol = "lemon";
                    break;
                case 3: 
                    $symbol = "grapes";
                        
                        
            }
               echo "<img id='reel$pos' src = 'img/$symbol.png' alt = '$symbol' title = '". ucfirst($symbol). "' width = '70' >";
        }
        function play()
        {
            for($i = 1; $i < 1; $i++)
        {
            ${"randomValue" . $i} = rand(0,3);
            displaySymbol(${"randomValue". $i},$i);
        }
        displayPoints($randomValue1,$randomValue2,$randomValue3, $randomValue4);
    }
?>