<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stran</title>
    <script src="jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="stili.css">

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>

    <?php
        include("header.php");
    ?>

    <main class="container border">
        <div id="carouselExampleInterval" class="carousel slide w-50 mt-2" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-interval="5000">
                <img src="img1.jpg" class="d-block w-100" alt="slika1">
              </div>
              <div class="carousel-item" data-interval="5000">
                <img src="img2.jpg" class="d-block w-100" alt="slika2">
              </div>
              <div class="carousel-item" data-interval="5000">
                <img src="img3.jpg" class="d-block w-100" alt="slika3">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleInterval" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleInterval" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </button>
        </div>
        
        <section class="seznami">
            <table class="ml-0 w-50 border">
                <thead>
                    <tr>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>4</th>
                        <th>5</th>
                    </tr>
                </thead>
                <tbody id="tabela1">
                </tbody>
            </table>
            
            <table class="mr-0 w-50 border">
                <thead>
                    <tr class="border">
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>4</th>
                        <th>5</th>
                    </tr>
                </thead>
                <tbody id="tabela2">
                </tbody>
            </table>
            
            <script>
                function dodaj(tableId) {
                    let tab = $(tableId);
                    for (let i = 0; i < 10; i++) {
                        let r = document.createElement("tr");
                        for (let j = 0; j < 5; j++) {
                            let c = document.createElement("td");
                            c.textContent = "Lorem ipsum";
                            //c.classList.add("border");
                            r.appendChild(c);
                        }
                        tab.append(r);
                    }
                }
            
                dodaj("#tabela1");
                dodaj("#tabela2");
            </script>
        </section>
    </main>

    <?php

        include("footer.php");

    ?>
</body>
</html>