<?php
    class Produto {
        protected $quantidade;
        protected $nome;
        protected $valorUnitario;

        //Métodos
        public function __construct($quantidade, $nome, $valorUnitario) {
            $this->quantidade = $quantidade;
            $this->nome = $nome;
            $this->valorUnitario = $valorUnitario;
        }
    }