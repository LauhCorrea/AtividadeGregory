<?php

    require "Produto.php";
    require "ProdutoPerecivel.php";

    echo "Produto Normal!!!";

    $prod1 = new Produto("Caneta", 20, 2.50);

    $prod1->adicionar(10);
    $prod1->retirar(5);

    echo "Produto Perecível!!!";

    $prod2 = new ProdutoPerecivel("Leite",30,5.50,"2026-05-01");

    $prod2->retirar(10);
    $prod2->adicionar(5);
