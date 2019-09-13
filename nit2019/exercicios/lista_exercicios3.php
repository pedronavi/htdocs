<html lang="pt-br">
  <head>
    <title>Título da página</title>
    <meta charset="utf-8">
  </head>
  <body>
    <h3> Questão 3 </h3>
    <legend> Calculo de valores </legend>
    <form action ="#" method="post">
      <div class="form-group">
        <label> Informe o valor </label>
        <input type="number" step="1" name="q3" class="form-control">
      </div>
      <button type="submit" class="btn btn-dark"> Verificar! </button>
    </form>
  </fieldset>
</div>

    <?php
      $q3 = isset($_POST['q3']) ? ($_POST['q3']) : 0;

      $q3 =





    ?>

    <h3> Questão 4 </h3>
    <legend> Calculo de valores </legend>
    <form action ="#" method="post">
      <div class="form-group">
        <label> Informe o valor </label>
        <input type="number" step="1" name="q4" class="form-control">
        <label> Informe o valor </label>
        <input type="number" step="1" name="qu4" class="form-control">
        <label> Informe o valor </label>
        <input type="number" step="1" name="que4" class="form-control">
      </div>
      <button type="submit" class="btn btn-dark"> Verificar! </button>
    </form>
    </fieldset>
    </div>

    <?php
      $q4 = isset($_POST['q4']) ? ($_POST['q4']) : 0;
      $qu4 = isset($_POST['qu4']) ? ($_POST['qu4']) : 0;
      $que4 = isset($_POST['que4']) ? ($_POST['que4']) : 0;

      if(($q4 < $qu4) && ($q4< $que4) && ($qu4 < $que4)){
        echo "A ordem é: " . $q4","$qu4","$que4
      }else if(($qu4 < $q4) && ($qu4 < $que4) && ($q4 < $que4))



     ?>
