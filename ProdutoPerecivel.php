<?php

    require "Produto.php";

    class ProdutoPerecivel extends Produto
    {
        private $dataArmazenamento;

        public function __construct($nome, $quantidade, $valorUnitario, $dataArmazenamento)
        {
            parent::__construct($nome, $quantidade, $valorUnitario);
            $this->dataArmazenamento = $dataArmazenamento;
        }

        public function retirar($quant)
        {
            $armazenado = new DateTime($this->dataArmazenamento);
            $hoje = new DateTime();

            $meses = $armazenado->diff($hoje)->m +
                    ($armazenado->diff($hoje)->y * 12);

            if ($meses >= 2) {
                $this->setQuantidade(0);
                echo "PRODUTO VENCIDO!!! ESTOQUE ZERADO!!!";
            } else {
                parent::retirar($quant);
            }
        }

        public function adicionar($quant)
        {
            if ($this->getQuantidade() == 0) {
                parent::adicionar($quant);
            } else {
                echo "Não é possível adicionar ainda existe no ESTOQUE!!!";
            }
        }
    }
