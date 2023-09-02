<?php 

    namespace App\model;


    class Pessoa{
        public $nome;
        public $cod;

        function __construct($nome, $cod ){
            $this-> nome = $nome;
            $this-> cod = $cod; 
        }
    }