<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Exercício 5</title>
</head>
<body>

<form action="/result5" method="post">
    @csrf
    <div class="container pt-3 pb-2 bg-dark border border-info rounded text-white">
        <div class="row pb-2">
            <div class="col">
                <label for="n1" class="label-control"> Informe a nota 1: </label>
                <input type="number" name="n1" class="form-control" step="0.01">
            </div>
        </div>
        <div class="row pb-2">
            <div class="col">
                <label for="n2" class="label-control"> Informe a nota 2: </label>
                <input type="number" name="n2" class="form-control" step="0.01">
            </div>
        </div>
        <div class="row pb-2">
            <div class="col">
                <label for="n3" class="label-control"> Informe a nota 3: </label>
                <input type="number" name="n3" class="form-control" step="0.01">
            </div>
        </div>
        <div class="row pb-2">
            <div class="col">
                <label for="n4" class="label-control"> Informe a nota 4: </label>
                <input type="number" name="n4" class="form-control" step="0.01">
            </div>
        </div>

        <div class="row pt-2 pb-2">
            <div class="col">
                <button class="btn btn-light" type="submit"> Okay </button>
            </div>
        </div>
    </div>
</form>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>
</html><?php
