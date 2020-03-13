<?php

// Efetue um algorítmo PHP que receba os valores A, B, C e D. Efetue a soma entre A e C,
// a multiplicação entre B e D e verifique se o resultado da soma é maior, menor ou igual ao da
// multiplicação. Imprima: "A+C é maior que B+D", "A+C é menor que B+D", "A+C é igual a
// B+D".

    $a = filter_input(INPUT_POST, 'a');
    $b = filter_input(INPUT_POST, 'b');

    $soma = $a + $b;
    echo $soma;
    

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <form>
        <label for="a">A</label>
        <input type="text" name="a">
        <input type="text" name="b">

        <button type="submit">Calcular</button>
      </form>
  </body>
</html>