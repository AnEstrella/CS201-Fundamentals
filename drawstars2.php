<html>
<head>
    <title>Drawing Stars</title>
</head>
<body>

<?php
    $x = array(4, "Tom", 1, "Michael", 5, 7, "Jimmy Smith");

    function draw_stars($param1) {
        for($i=0; $i < count($param1); $i++)
        {
            if(is_string($param1[$i]) == true)
            {
                $length = strlen($param1[$i]);
                for($j=0; $j<$length; $j++) 
                {
                    echo $param1[$i]{0};     
                }
            echo "<br>";
            }
            else
            {
            for($j=0; $j<$param1[$i]; $j++) 
            {
                echo "*";     
            }
            echo "<br>";
            }
        }
    }

    $results = draw_stars($x);
    
?>

</body>
</html>