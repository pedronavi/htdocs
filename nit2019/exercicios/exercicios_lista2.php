<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Título da página</title>
    <meta charset="utf-8">
  </head>
  <body>
    <h3> Questão 1 </h3>  
    <fieldset>
      <legend> Calculo de valores </legend>
      <form action ="#" method="post">
        <div class="form-group">
          <label> Informe o valor </label>
          <input type="number" step="1" name="valor01" class="form-control">
        </div>
        <button type="submit" class="btn btn-dark"> Verificar! </button>
      </form>
    </fieldset>  
  </div>

    <?php
     $valor01 = isset($_POST['valor01']) ? ($_POST['valor01']) : 0;

     if($valor01 < 0){
       echo "o modulo do é: " .($valor01 * -1);
     }else {
       echo "O modulo do {$valor01} é: ". $valor01;
     };
     echo "<hr>"
    ?>
  
    <h3> Questão 2 </h3>
    <fieldset>
      <legend> Calculo de valores </legend>
      <form action ="#" method="post">
        <div class="form-group">
          <label> Informe o valor </label>
          <input type="number" step="1" name="num" class="form-control">
        </div>
        <button type="submit" class="btn btn-dark"> Verificar! </button>
      </form>
    </fieldset>

     <?php
          $num = isset($_POST['num']) ? ($_POST['num']) : 0;
          if($num % 2 == 0){
            echo "o numero {$num} é par ";
          }else {
            echo "O numero {$num} é impar"; 
          };
          echo "<hr>";
        ?>

    <h3> Questão 3 </h3>
    <fieldset>
      <legend> Calculo de valores </legend>
      <form action ="#" method="post">
        <div class="form-group">
          <label> Informe o valor </label>
          <input type="number" step="1" name="num1" class="form-control">
        </div>
        <div class="form-group">
          <label> Informe o valor </label>
          <input type="number" step="1" name="num2" class="form-control">
        </div>
        <button type="submit" class="btn btn-dark"> Verificar! </button>
      </form>
    </fieldset>

    <?php
        if($num1 = isset($_POST['num1']) && ($_POST['num1'] != 0) && isset($_POST['num2'])) {
          $num1 = ($_POST['num1']);
          $num2 = ($_POST['num2']);
          echo "O primeiro numero é {$num1} e o segundo é {$num2} <br>";
          if($num1 % $num2 == 0){
              echo "O {$num2} é multiplo do {$num1}";
          }else{
              echo "O {$num1} não é multiplo do {$num2}";
          };
          echo "<hr>";
        }
    ?>

    <h3> Questão 4 </h3>
    <fieldset>
      <legend> Calculo de valores </legend>
      <form action ="#" method="post">
        <div class="form-group">
          <label> Informe o valor </label>
          <input type="number" step="1" name="q4" class="form-control">
        </div>
        <button type="submit" class="btn btn-dark"> Verificar! </button>
      </form>
    </fieldset>

    <?php
        $q4 = isset($_POST['q4']) ? ($_POST['q4']) : 0;
        if($q4 < 0 ){
            echo "O {$q4} é negativo.";
        }elseif($q4 > 0){
            echo "O {$q4} é positivo.";
        }else{
            echo "O {$q4} é zero.";
        };
    ?>
    <h3> Questão 5 </h3>

                    <fieldset>
                        <form action="#" method="post">
                            <div class="form-group">
                                <label for="id_nome" > Valor </label>
                                <input type="number" class="form-control" 
                                required id="id_nome" name="valor5">
                            </div>
                            <button type="submit" class="btn btn-dark">Verificar!</button>
                        </form>
                    </fieldset>
                </div>
                <br> 
                <?php 
        
                $valor05 =isset($_POST['valor5']) ? $_POST ['valor5'] : 0;
                if ($valor05 > 20)   {
                    echo "Não está entre 5 e 20";
                }elseif ($valor05 >= 5){
                    echo "Está entre 5 e 20.";}
         if ($valor05 <5){
       echo "Não se encontra entre os números 5 e 20";
  };
 ?>
<h3> Questão 6 </h3>
    <fieldset>
      <legend> Calculo de valores </legend>
      <form action ="#" method="post">
        <div class="form-group">
          <label> Informe o valor </label>
          <input type="number" step="1" name="x" class="form-control">
        </div>
        <div class="form-group">
          <label> Informe o valor </label>
          <input type="number" step="1" name="y" class="form-control">
        </div>
        <button type="submit" class="btn btn-dark"> Verificar! </button>
      </form>
    </fieldset>

    <?php
       $x = isset($_POST['x']) ? ($_POST['x']) : 0;
       $y = isset($_POST['y']) ? ($_POST['y']) : 0; 
       if($x > $y){
           echo "{$x} > {$y}, então a adição deles é: " .($x + $y);
        }else{
            echo "{$x} < {$y}, então a multiplicação deles é: " .($x * $y);
        };
    ?>
<hr>
<h3> Questão 7 </h3>
    <fieldset>
      <legend> Calculo de valores </legend>
      <form action ="#" method="post">
        <div class="form-group">
          <label> Informe o valor </label>
          <input type="number" step="1" name="q7" class="form-control">
        </div>
        <div class="form-group">
          <label> Informe o valor </label>
          <input type="number" step="1" name="q71" class="form-control">
        </div>
        <button type="submit" class="btn btn-dark"> Verificar! </button>
      </form>
    </fieldset>

    <?php
         $q7 = isset($_POST['q7']) ? ($_POST['q7']) : 0;
         $q71 = isset($_POST['q71']) ? ($_POST['q71']) : 0;
         
         if($q7 > $q71){
             echo "O {$q7} é maior que o {$q71}.";
         }elseif($q7 == $q71){
             echo "Os números são iguais";
         }else{
            "O {$q71} é maior que o {$q7}.";
         };
    ?>
<hr>
<h3> Questão 8 </h3>
    <fieldset>
      <legend> Calculo de valores </legend>
      <form action ="#" method="post">
        <div class="form-group">
          <label> Informe o ano </label>
          <input type="number" step="1" name="q8" class="form-control">
        </div>
        <button type="submit" class="btn btn-dark"> Verificar! </button>
      </form>
    </fieldset>

    <?php
        $q8 = isset($_POST['q8']) ? ($_POST['q8']) : 0;
        if($q8 % 4 == 0){
          echo "O ano é bisexto.";
        }else{
          echo "O ano não é bisexto";
        }
     ?>

<hr>
<h3> Questão 9 </h3>
    <fieldset>
      <legend> Calculo de valores </legend>
      <form action ="#" method="post">
        <div class="form-group">
          <label> Informe o numerador </label>
          <input type="number" step="1" name="q9" class="form-control">
        </div>
        <div class="form-group">
          <label> Informe o denominador </label>
          <input type="number" step="1" name="q91" class="form-control">
        </div>
        <button type="submit" class="btn btn-dark"> Verificar! </button>
      </form>
    </fieldset>

    <?php

         if($q9 = isset($_POS['q9']) && ($_POST['q9'] != 0) && isset($_POST['q91'])){
         $q9 = isset($_POST['q9']);
         $q91 = isset($_POST['q91']);
         
         echo "O Numerador é {$q9} e o denominador é {$q91} <br>";
         if($q9 % $q91 == 0){
            echo "Os números são divisiveis";
         }else{
             echo "Os números não divisivel ";
         }
        };
    ?>
    <h3> Questão 10 </h3>
    <fieldset>
      <legend> Calculo de valores </legend>
      <form action ="#" method="post">
        <div class="form-group">
          <label> Informe o salário </label>
          <input type="number" step="1" name="q10" class="form-control">
        </div>
        <div class="form-group">
          <label> Informe a prestação </label>
          <input type="number" step="1" name="q101" class="form-control">
        </div>
        <button type="submit" class="btn btn-dark"> Verificar! </button>
      </form>
    </fieldset>
    
    <?php
         $q10 = isset($_POST['q10']) ? ($_POST['q10']) : 0;
         $q101 = isset($_POST['q101']) ? ($_POST['q101']) : 0;

         if($q101 > 0.2*$q10){
             echo "O empréstimo não pode ser concedido.";
         }elseif($q101 < 0.2*$q10){
             echo "O empréstimo pode ser concedido.";
         }else{
             echo "O empréstimo está em análise.";
         }
    ?>
</body>
</html>