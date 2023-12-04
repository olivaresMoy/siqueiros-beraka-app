<?php
/* ====================================================
Para agregar estas funciones al framework
añade esta linea: "files": ["app/helpers.php"]
en el archivo composer.json de la raíz del proyecto,
crea el script helpers.php en la raíz de dir app, luego
reinicia autocargador en terminal: composer dumpautoload
=======================================================*/

// Activa la clase
function activeSection($section){
    $url = explode("/", request()->path());
    if($url[0]==""){$url[0]=$url[1];}
	return $url[0] == $section ? 'active' : '';
}
function selectOld($name, $value, $type){
    if($type == 'select'){
        return old($name) == $value ? 'selected' : '';
    }
    if($type == 'checkbox') {
        if($name == 'checkEsNuevo'){
            return 'checked';
        } else {
            return old($name) == 'on' ? 'checked' : '';
        }
    }
}
function elimina_acentos($text){
    $text = htmlentities($text, ENT_QUOTES, 'UTF-8');
    $text = strtolower($text);
    $patron = array (
    // Espacios, puntos y comas por guion
    //'/[\., ]+/' => ' ',


    // Vocales
    '/\+/' => '',
    '/&agrave;/' => 'a',
    '/&egrave;/' => 'e',
    '/&igrave;/' => 'i',
    '/&ograve;/' => 'o',
    '/&ugrave;/' => 'u',

    '/&aacute;/' => 'a',
    '/&eacute;/' => 'e',
    '/&iacute;/' => 'i',
    '/&oacute;/' => 'o',
    '/&uacute;/' => 'u',

    '/&acirc;/' => 'a',
    '/&ecirc;/' => 'e',
    '/&icirc;/' => 'i',
    '/&ocirc;/' => 'o',
    '/&ucirc;/' => 'u',

    '/&atilde;/' => 'a',
    '/&etilde;/' => 'e',
    '/&itilde;/' => 'i',
    '/&otilde;/' => 'o',
    '/&utilde;/' => 'u',

    '/&auml;/' => 'a',
    '/&euml;/' => 'e',
    '/&iuml;/' => 'i',
    '/&ouml;/' => 'o',
    '/&uuml;/' => 'u',

    // Otras letras y caracteres especiales
    '/&aring;/' => 'a',
    '/&ntilde;/' => 'n',

    // Agregar aqui mas caracteres si es necesario

    );

    $text = preg_replace(array_keys($patron),array_values($patron),$text);
    return $text;
}