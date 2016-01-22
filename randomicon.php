<?php

setImageHeaders();
returnImageData(chooseRandomPic('iconos'));

function chooseRandomPic($dir = '.'){
    $files = glob($dir . '/*.*');
    $file = array_rand($files);
    return $files[$file];
}

function ponCabeceraImagen(){
	header('Content-Type: image/jpeg');
}

function devuelveDatosImagen($image){
    readfile($image);
}



