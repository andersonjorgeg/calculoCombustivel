<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Calculo de Consumo de Combustível</title>
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body>
  <main>
    <section class="painel">
      <h2>Instruções</h2>
      <div class="conteudo-painel">
        <p>Esta aplicação tem como finalidade demonstrar os valores que
          serão gastos com combustível durante uma viagem, com base no
          consumo do seu veículo, e com a distância determinada por você!</p>
        <p>Os combustíveis disponíveis para este cálculo são:</p>
        <ul>
          <li><strong>Álcool</strong></li>
          <li><strong>Díesel</strong></li>
          <li><strong>Gasolina</strong></li>
        </ul>
      </div>
    </section>

    <section class="painel">
      <h2>Cálculo do valor (R$) do consumo</h2>
      <div class="conteudo-painel">
        <form action="calculo.php" method="POST">
          <label for="distancia">Distância em quilômetros a ser percorrida</label>
          <!-- required serve para que o campo seja obrigatório -->
          <input class="campoTexto" type="number" name="distancia" required />

          <label for="autonomia">Consumo de combustível do veículo (Km/l)</label>
          <input class="campoTexto" type="number" name="autonomia" required/>

          <button class="botao" type="submit">Calcular</button>
        </form>
      </div>
    </section>

  </main>
</body>

</html>