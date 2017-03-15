<html>
<head>
<title> práctica 11</title>
</head>
<body>
    <?php
    //Nombre del alumno Ricardo García Guillén
    //Usando variables en PHP
    echo "<h1>Variables</h1>";
    $nombre='ricardo'; // tipo cadena
    $apellidos='García Guillén';
    $edad=22; //entero no se escriben comillas con tipos  int
    $salario=0.50;
    $fechaNacimiento='13/08/1994';
    $estatus=true;
    echo $nombre.'<br/>';
    echo $apellidos;
    echo 'nombreCompleto'.$nombre.' '.$apellidos.'<br/>';
    echo 'tu edad es: '.$edad.'<br/>';
    echo 'tu salario es: '.$salario.'<br/>';
    ?>
    <h1>OPERADORES ARITMÉTICOS</h1>
    <?php
    $a=5;
    $b=3;
    $suma=$a+$b;
    $resta=$a-$b;
    $multiplica=$a*$b;
    $divide=$a/$b;
    echo 'la suma de la variables '.$a.'+'.$b.'es:' .$suma.'<br/>';
    echo 'la resta de la variables '.$a.'-'.$b.'es:' .$resta.'<br/>';
    echo 'la multiplicacion de la variables '.$a.'*'.$b.'es:' .$multiplica.'<br/>';
    echo 'la division de la variables '.$a.'/'.$b.'es:' .$divide.'<br/>';
    ?>
</body>Puto el que lo lea
</html>