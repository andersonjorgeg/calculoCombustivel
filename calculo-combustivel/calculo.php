<?php

// calculo do valor do consumo
// formula do valor de consumo
// (distancia / autonomia) * preco

//! obs: $_POST é uma variável super global que armazena os dados enviados via POST e pode ser acessada em qualquer parte do código PHP (não é necessário declarar a variável dentro do escopo do código) ex: dentro de uma função, dentro de um if, dentro de um foreach, dentro de um while, dentro de um switch, dentro de um include, dentro de um require, dentro de um require_once, dentro de um include_once.

$mensagem = "";

// validação dos dados
if ($_POST) {
  // $_POST['distancia'] vem do formulário index.php (input name="distancia")
  // $_POST['autonomia'] vem do formulário index.php (input name="autonomia")
  $distancia = $_POST['distancia'];
  $autonomia = $_POST['autonomia'];

  // validação dos dados (se não for nulo ou vazio)
  // is_numeric() verifica se o valor é um número
  if (is_numeric($distancia) && is_numeric($autonomia)) {

    // validação dos dados (se não for menor que zero)
    if ($distancia > 0 && $autonomia > 0) {
      $valorGasolina = 4.80;
      $valorAlcool = 3.80;
      $valorDiesel = 3.90;

      // number_format é uma função que formata um número para em formato de moeda
      // sintaxe: number_format(valor, casas decimais, separador decimal, separador milhar)
      $calculoGasolina = ($distancia / $autonomia) * $valorGasolina;
      $calculoGasolina = number_format($calculoGasolina, 2, ',', '.');

      $calculoAlcool = ($distancia / $autonomia) * $valorAlcool;
      $calculoAlcool = number_format($calculoAlcool, 2, ',', '.');

      $calculoDiesel = ($distancia / $autonomia) * $valorDiesel;
      $calculoDiesel = number_format($calculoDiesel, 2, ',', '.');

      // .= serve para concatenar strings seria o mesmo que: += do javascript
      $mensagem.= "<section class='sucesso'>";
      $mensagem.= "O valor total gasto será:";
      $mensagem.= "<ul>";
      $mensagem.= "<li><strong>Gasolina: R$</strong> $calculoGasolina</li>";
      $mensagem.= "<li><strong>Álcool: R$</strong> $calculoAlcool</li>";
      $mensagem.= "<li><strong>Diesel: R$</strong> $calculoDiesel</li>";
      $mensagem.= "</ul>";
      $mensagem.= "</section>";
    } else {
      $mensagem.= "<section class='error'>";
      $mensagem.= "<p>O valor da distância e autonomia devem ser maiores que zero!</p>";
      $mensagem.= "</section>";
    }
  } else {
    $mensagem.= "<section class='error'>";
    $mensagem.= "<p>O valor recebido não é numérico!</p>";
    $mensagem.= "</section>";
  }
} else {
  $mensagem.= "<section class='error'>";
  $mensagem.= "<p>Nenhum dado foi recebido pelo formulário</p>";
  $mensagem.= "</section>";
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/estilo.css">
  <title>Calculo de Consumo de Combustível</title>
</head>
<body>
  <main>
    <section class="painel">
      <h2>Resultado do cálculo de consumo</h2>
      <div class="conteudo-painel">
        <?php
          echo $mensagem;
        ?>
        <a class="botao" href="index.php">Voltar</a>
      </div>
    </section>
  </main>
</body>
</html>
