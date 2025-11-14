<?PHP
class SanitizarEntrada {
    // Sanitiza una cadena eliminando espacios y etiquetas HTML
     public static function TipoTitulo($cadena) {
    //ucfirst — Pone en mayúscula el primer carácter
        return ucfirst($cadena);
    }

    public static function limpiarCadena($cadena) {
        return strip_tags($cadena);
    }

     public static function limpiarXSS($cadena) {
    //htmlspecialchars — Convierte caracteres especiales en entidades HTML
    //Cross-Site Scripting (XSS) al manipular datos en JavaScript
        return htmlspecialchars($cadena);
    }

    public static function ValidarEntero($variableEntera) {
       $variableEntera = trim($variableEntera);
        //ctype_digit: consiste completamente de dígitos. sin puntos o letras; ni entre comillas
        //is_numeric: puede estar entre comillas y puntos
        if (is_numeric($variableEntera) and ($variableEntera > 0))
                $variableNumerica = $variableEntera;
                    else
                        $variableNumerica = 0;
                        
        
        return($variableNumerica);
    }
  

}//SanitizarEntrada

//$nombre = "<b>Juan</b> ";
//$nombreLimpio = SanitizarEntrada::limpiarCadena($nombre);  
//echo "la salida es: ".$nombre."<br>";
?>