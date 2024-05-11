<?php 
    ########## VARIABLES #############
    $name = "Miguel";
    $isDev = false;
    $age = 30;
    $isOld = $age > 60;
    #Esto devuelve 40
    $newAge = $age . '1';

    
    ################# CONSTANTES ##############
    #Global
    define('CONSTANTE_GLOBAL','https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg');

    #Local
    const CONSTANTE_LOCAL = 'Esta es una constante local';

    
    
############### CONDICIONALES ################
   # if ($isOld) {
   #     echo "<h2>Eres viejo<#h2>";
   # }else {
   #     echo "<h2>Eres joven<#h2>";
   # }
    

    #Condicional con operador terniario
    $outPutAge = $isOld ? 'Eres viejo' : 'Eres joven';
    ?>
    
    
    <?php if ($isOld): ?>
        <h2>Eres viejo.</h2>

    <?php elseif ($isDev): ?>
        <h2>No eres viejo, pero eres dev.</h2>

    <?php else: ?>
        <h2>Eres joven!</h2>

    <?php endif; ?>

    <?php

    ############# MATCH MEJOR QUE SWITCH ################
    $condicionalMatch = match(true){
        $age < 2 => "Eres un bebe, $name",
        $age < 10 => "Eres un niño, $name",
        $age < 18 => "Eres un adolecente $name",
        $age === 18 => "Eres mayor de edad, $name",
        $age < 40 => "Eres un adulto joven, $name",
        $age >= 40 => "Eres un adulto, $name",
        default => "Eres un viejisimo, $name",
    }; 

    #################### ARRAYS ####################
    $array = ["PHP", "JavaScript", "Python",1,2];
    #Ingreso de datos al array sin indice
    $array[] = "Java";
    #Ingreso de datos al array con indice
    $array[6] = "TypeScript";
    
    ?>
    
    
    <?php 
    #Acceso a array por key y value#
    ?>
    <ul>
        <?php foreach($array as $key => $language): ?>
            <li><?= $key ." ". $language?></li>    
        <?php endforeach;?>
    <ul>
    
    <?php
    #Diccionario
    $person = [
        "name" => "Miguel",
        "age" => 78,
        "isDev" => true,
        "languagues" => $array,
    ];

    #Cambio de datos dentro del diccionario
    $person["name"] = "Nicolas";
    $person["languagues"][] = "PHP";

 






    ####################### METODOS ##############################
    #Devuelve el tipo de dato y el valor
    var_dump($name);
    var_dump($isDev);
    var_dump($age);


    #Devuelve el tipo del dato 
    echo gettype($name);
    #Devuelve un boolean si es del tipo 
   echo is_int($name);



   $outPut = "Hola $name, con unda edad de $age "."</br> $condicionalMatch";
?>



<img src="<?=CONSTANTE_GLOBAL?>" alt="PHP Logo" width="200px"></img>
<h2><?=CONSTANTE_LOCAL?></h2>
<h1>
<?=$outPut?>
</h1>
<style>
    :root{
        color-scheme: ligth dark;
    }

    body{
        display: grid;
        place-content: center;
    }
</style>