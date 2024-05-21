<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="stili.css">
    <script src="js/bootstrap.bundle.min.js"></script>

    <title>Opravila</title>
</head>
<body>
    <?php
        include("header.php");
    ?>

    <main class="container">
        <h1 class="text-danger">Seznam opravil</h1>
        <div class="container border shadow-sm p-3">
            <h3>Opravila</h3>
            <form id="opravila">
            </form>
        </div>

        <div class="container border shadow-sm p-3">
            <h4>Dodaj opravilo</h4>
            <form onsubmit="dodajOpravilo(event)">
                <input class="form-control" type="text" name="opravilo" id="opravilo" required>
                <input class="btn btn-primary mt-2" type="submit" name="dodaj" id="dodaj" value="Dodaj">
            </form>
        </div>
    </main>

    <footer class="container">
        <table>
            <tr>
                <td>Št. opravljenih opravil</td>
                <td>Št. neopravljenih opravil</td>
            </tr>
            <tr>
                <td id="opravljeni">0</td>
                <td id="neopravljeni">0</td>
            </tr>
        </table> 
    </footer>

    <script src="skripta.js"></script>

    <?php

    include("footer.php");

    ?>
</body>
</html>