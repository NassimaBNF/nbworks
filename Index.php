
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  </head>
  <body>

    <h1> Dice Generator</h1>
<form action="" method="post">

    <label for="Numberofdice">Number of Dices </label>
    <br>
    <input type="number" min="1" id="Numberofdice" name="Numberofdice">
    <br>


    <label for="dices"> Select number of dices </label>
    <br>
    <select name="dices" id="dices">
        <option value="4">D4</option>
        <option selected="selected" value="6">D6</option>
        <option value="8">D8</option>
        <option value="10">D10</option>
        <option value="12">D12</option>
        <option value="20">D20</option>
    </select>
    <br><br>
<button type="submit" class="btn btn-primary"> Roll </button>


</form>

<?php

if(isset($_POST['dices'])) {
    for($i = 0; $i < $_POST['Numberofdice']; $i++){
        echo 'Numberofdice '. ($i+1) .': ';
        print_r(mt_rand(1, $_POST['dices']));
        echo '<br>';
    }
}


?>
</body>
</html>