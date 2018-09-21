<!--var image = 
<!--function imggen() {-->
<!--  var img = image.length-->
<!--  var rand = Math.floor((Math.random() * img) + 0);-->
<!--  var ranimg = image[rand];-->
<!--  $('div').prepend("<img src='"+ranimg+"'></img>");-->
<!--}-->
<!--$('button').click(function(){-->
<!--  $('div').text("");-->
<!--  imggen();-->
<!--  imggen();-->
<!--  imggen();-->
<!--  imggen();-->
<!--});-->
<?php
//create an array of images
$Images = array();

function displayImagen($path){
    
if ( $img_dir = @opendir($path) ) {
        while ( false !== ($img_file = readdir($img_dir)) ) {
            // checks for gif, jpg, png
            if ( preg_match("/(\.gif|\.jpg|\.png)$/", $img_file) ) {
                $Images[] = $img_file;
            }
        }
        closedir($img_dir);
    }
    return $images;
}

function getRandomFromArray($ar) {
    $num = array_rand($ar);
    return $ar[$num];
}
?>