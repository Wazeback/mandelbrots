<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mandelbrot for PHP</title>
</head>
<body style="font-family:Consolas,Monaco,Lucida Console,Liberation Mono,DejaVu Sans Mono,Bitstream Vera Sans Mono,Courier New, monospace;">
    <?php

        $mbr = array('asd');

        $yRange = 1;
        $maxI = 1000;

        $xRangeMin = -1.5;
        $xRangeMax = 0.5;

        $scale = 50;


        for ($yGlobal = -1*$yRange*$scale; $yGlobal < $yRange*$scale; $yGlobal++) {
            $mbr[$yGlobal] = [];
            for ($xGlobal = $xRangeMin*$scale; $xGlobal < $xRangeMax*$scale; $xGlobal++) {
                $x = 0;
                $y = 0;
                $x0 = $xGlobal/$scale;
                $y0 = $yGlobal/$scale;

                $i = 0;

                while($x*$x + $y*$y <= 4 && $i < $maxI){
                    $xTemp = $x*$x - $y*$y + $x0;
                    $y = 2*$x*$y + $y0;
                    $x = $xTemp;
                    $i = $i+1;
                }

                if($i == $maxI){
                    $mbr[$yGlobal][$xGlobal] = "#";
                } else {
                    $mbr[$yGlobal][$xGlobal] = "&nbsp;";
                    $mbr[$yGlobal][$xGlobal] = ".";
                }
                echo($mbr[$yGlobal][$xGlobal]);
                echo(".");
                //document.write("&nbsp;");
            }
            echo("<br>");
        }


?>
</body>
</html>

