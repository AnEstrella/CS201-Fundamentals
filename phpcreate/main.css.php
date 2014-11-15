
<?php
 header('Content-type: text/css');
function random_color_part() {
    return str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
}

function random_color() {
    return random_color_part() . random_color_part() . random_color_part();
}
?>

h1 { 
color: <?= random_color() ?>; 
}

p  { 
color: <?= random_color() ?>; 
}















