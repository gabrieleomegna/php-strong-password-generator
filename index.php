<?php
require_once __DIR__ .'/utilities/functions.php';
// session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Password Generator</title>
    <!-- LINK BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- LINK CSS -->
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    <header class="container py-3 mt-4">
        <div class="row text-center">
            <div class="col-12">
                <h1>
                    Strong Password Generator
                </h1>
                <h2>
                    Generare una password sicura
                </h2>
            </div>
        </div>
    </header>

    <main>
        <div class="alert alert-primary" role="alert">
            Nessun parametro valido inserito
        </div>
        <div class="container">
            <form class="row p-3" action="./generator.php" method="GET">
                <div class="col-7">
                    <label class="d-block mb-3" for="length">Lunghezza password:</label>
                    <label for="repeatRadio" class="mb-5">Consenti ripetizioni di uno o piu' caratteri:</label>
                    <div class="buttons mt-5 pt-5 mb-4">
                        <button type="submit" class="btn btn-primary">Invia</button>
                        <button type="reset" class="btn btn-secondary">Annulla</button>
                    </div>
                </div>
                <div class="col-5">
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" id="length" name="length">
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="repeatRadio" id="repeatRadio" value="1" checked>
                        <label class="form-check-label" for="repeatRadio">
                            Si
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" name="repeatRadio" id="repeatRadio" value="0">
                        <label class="form-check-label" for="repeatRadio">
                            No
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="chars" required>
                        <label class="form-check-label" for="flexCheckDefault" >
                            Lettere
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="flexCheckChecked" name="numbers">
                        <label class="form-check-label" for="flexCheckChecked" >
                            Numeri
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="flexCheckChecked" name="symbols">
                        <label class="form-check-label" for="flexCheckChecked">
                            Simboli
                        </label>
                    </div>
                </div>
            </form>
        </div>
    </main>

</body>
</html>