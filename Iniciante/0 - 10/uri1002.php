<?php
    $raio = fgets(STDIN);
    $pi = 3.14159;
    $area = number_format(round(pow($raio, 2)*$pi, 4),4,'.', ''); //ou $area = ($raio*$raio)*$pi;
    print "A=$area\n";
?>