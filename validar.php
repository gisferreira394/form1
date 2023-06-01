<?php

$nome =$_POST["usuario"];

if($nome == ""){
    
echo "Digite seu nome  !!";
}

else {
    echo "Olá " . $nome;
}
?>