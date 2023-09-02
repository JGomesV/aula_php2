<?php
    include_once __DIR__."/../vendor/autoload.php";

    use App\model\Pessoa;
    use App\model\Estudante; 

    $p = new Pessoa("João", 123);
    $a = new Estudante(" Está estudando");

    echo $p-> nome;

    echo $a->acao; 
   


