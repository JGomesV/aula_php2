<?php
    include_once __DIR__."/../vendor/autoload.php";

    use App\model\Pessoa;

    $p = new Pessoa("huginho");

    echo $p -> nome;


