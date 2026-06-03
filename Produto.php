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

           public function getQuantidade()
        {
            return $this->quantidade;
        }

        public function setQuantidade($quantidade)
        {
            $this->quantidade = $quantidade;
        }

        public function adicionar($quant)
        {
            $this->quantidade += $quant;
            echo "Adicionados $quant produtos. Estoque: $this->quantidade";
        }

        public function retirar($quant)
        {
            if ($quant <= $this->quantidade) {
                $this->quantidade -= $quant;
                echo "Retirados $quant produtos. Estoque: $this->quantidade";
            } else {
                echo "ESTOQUE INSUFICIENTE!!!";
            }
        }
    }
