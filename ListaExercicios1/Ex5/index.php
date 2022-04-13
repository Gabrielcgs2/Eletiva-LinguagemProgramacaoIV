<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Exercício 5</title>
</head>
<body class="container">

    <form action="resultado.php" method="post">
        <div>
            <label for="nota1" class="label-control">Insira a Nota 1</label>
            <input type="number" name="nota1" id="nota1" >
        </div>
        <div>
            <label for="nota2" class="label-control">Insira a Nota 2</label>
            <input type="number" name="nota2" id="nota2">
        </div>
        <div>
            <label for="nota3" class="label-control">Insira a Nota 3</label>
            <input type="number" name="nota3" id="nota3">
        </div>
        <div>
            <label for="nota4" class="label-control">Insira a Nota 4</label>
            <input type="number" name="nota4" id="nota4">
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>