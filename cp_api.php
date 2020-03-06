<?php
//ese usuario es de prueba (50 peticiones gratuitas). o puedes crear un usuario: https://conectame.ddns.net/consola/login.php
$usuario = 'prueba';
$contrasenia = 'sC%7D9pW1Q%5Dc';
$valor = '20172'; //reemplazar por el cp a consultar
$metodo = 'cp';
$url = 'https://conectame.ddns.net/rest/api.php?m='.$metodo.'&user='.$usuario.'&pass='.$contrasenia.'&val='.$valor;
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$curl_respuesta = curl_exec($curl);
if ($curl_respuesta === false) {
    $info = curl_getinfo($curl);
    curl_close($curl);
    die('Ocurrio un error: ' . var_export($info));
}
curl_close($curl);
$resultado = json_decode($curl_respuesta);
print("<pre>".print_r($resultado,true)."</pre>");
die();

/* RESPUESTA
	stdClass Object
(
    [Response] => cor
    [Msg] => Correct
    [CPs] => Array
        (
            [0] => stdClass Object
                (
                    [Asentamiento] => Anexo Benito Palomino Dena (Cumbres II)
                    [TipoAsentamiento] => Fraccionamiento
                    [Municipio] => Aguascalientes
                    [Ciudad] => Aguascalientes
                    [Zona] => Urbano
                    [FechaActualizacion] => 2019-05-23 08:34:24
                )

            [1] => stdClass Object
                (
                    [Asentamiento] => Claustros Loma Dorada
                    [TipoAsentamiento] => Fraccionamiento
                    [Municipio] => Aguascalientes
                    [Ciudad] => Aguascalientes
                    [Zona] => Urbano
                    [FechaActualizacion] => 2019-05-23 08:34:24
                )

            [2] => stdClass Object
                (
                    [Asentamiento] => Cumbres III
                    [TipoAsentamiento] => Colonia
                    [Municipio] => Aguascalientes
                    [Ciudad] => Aguascalientes
                    [Zona] => Urbano
                    [FechaActualizacion] => 2019-05-23 08:34:24
                )

            [3] => stdClass Object
                (
                    [Asentamiento] => La Florida l
                    [TipoAsentamiento] => Fraccionamiento
                    [Municipio] => Aguascalientes
                    [Ciudad] => Aguascalientes
                    [Zona] => Urbano
                    [FechaActualizacion] => 2019-05-23 08:34:24
                )

            [4] => stdClass Object
                (
                    [Asentamiento] => La Florida ll
                    [TipoAsentamiento] => Fraccionamiento
                    [Municipio] => Aguascalientes
                    [Ciudad] => Aguascalientes
                    [Zona] => Urbano
                    [FechaActualizacion] => 2019-05-23 08:34:24
                )

            [5] => stdClass Object
                (
                    [Asentamiento] => Lic Benito Palomino Dena
                    [TipoAsentamiento] => Fraccionamiento
                    [Municipio] => Aguascalientes
                    [Ciudad] => Aguascalientes
                    [Zona] => Urbano
                    [FechaActualizacion] => 2019-05-23 08:34:24
                )

        )

)
*/
