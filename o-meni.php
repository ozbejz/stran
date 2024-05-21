<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="stili.css">
    <script src="js/bootstrap.bundle.min.js"></script>

    <title>Domaca naloga</title>
</head>
<body>
    <?php
        include("header.php");
    ?>
    <h1 class="text-danger text-center fw-bold">O meni</h1>

    <div class="m-auto text-center">
        
        
        <div class="bg-danger bg-gradient-warning border-start ms-3 p-2 border-5 border-danger position-absolute text-white">
            <p>Ime in priimek: Ožbej Zdešar</p>
            <p>Vpisna št.: 35230033</p>
        </div>
        
        <div class="mx-auto">
            <img src="slika.jpg" alt="slika" width="10%" class="rounded m-3">

            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque arcu ipsum, vestibulum at odio a, condimentum vestibulum magna. 
                Vestibulum iaculis eros id orci bibendum, a feugiat justo ultrices. 
            
            </p>
            <p>
                Donec id libero lacinia, molestie felis nec, pulvinar nisi. 
                Aenean euismod quam ex, in finibus mi finibus eu. 
            </p>
            <p>
                Pellentesque quis semper tellus, a placerat dui. Nulla ultricies felis vel nulla pellentesque varius. 
                Vestibulum ut consectetur leo. Cras nec finibus sapien, ac semper mauris.
            </p>
            <p>
                Praesent porta purus ullamcorper sem tristique, at dapibus magna volutpat. 
                Etiam arcu purus, mollis a turpis at, vehicula rhoncus dui. Curabitur nisl lacus, finibus a accumsan sit amet, blandit ut tellus. Maecenas in risus a dolor egestas congue.
            </p>
            <p>
                Praesent mauris ex, scelerisque in cursus ut, dictum quis nibh. Phasellus et erat vitae sapien feugiat convallis. 
                Sed viverra felis eu mi lobortis, id fringilla nisl finibus. 
            </p>
        </div>
    </div>

    <div class="d-flex justify-content-center">

        <div class="m-3">
            <h2 class="fw-bold text-danger fs-4 opacity-50">Najljubše povezave</h2>
            <ul>
                <li><a class="text-dark" href="https://github.com/ozbejz" target="_blank">Moj github</a></li>
                <li><a class="text-dark" href="https://www.instagram.com/hoodsatire/" target="_blank">Meme page</a></li>
                <li><a class="text-dark" href="https://www.vreme.si/napoved/Ljubljana/graf" target="_blank">Vreme</a></li>
                <li><a class="text-dark" href="https://www.rtvslo.si/" target="_blank">RTV</a></li>
                <li><a class="text-dark" href="https://www.youtube.com/" target="_blank">YouTube</a></li>
            </ul>
        </div>

        <div class="m-3">
            <h2 class="fw-bold text-danger fs-4 opacity-50">Najljubši filmi</h2>
            <ul>
                <li>The big short</li>
                <li>The Mummy</li>
                <li>Indiana Jones</li>
                <li>The Godfather</li>
                <li>All Quiet on the Western Front</li>
            </ul>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <table class="table-bordered m-2">
            <tr>
                <th class="p-2 bg-danger text-white">username</th>
                <th class="p-2 bg-danger text-white">followers</th>
                <th class="p-2 bg-danger text-white">following</th>
                <th class="p-2 bg-danger text-white">posts</th>
                <th class="p-2 bg-danger text-white">avg. likes</th>
            </tr>
            <tr>
                <td class="p-2">doof3d</td>
                <td class="p-2">1,301,984</td>
                <td class="p-2">241</td>
                <td class="p-2">2,903</td>
                <td class="p-2">12,737</td>
            </tr>
            <tr>
                <td class="p-2">eclipsegotban</td>
                <td class="p-2">2,110,870</td>
                <td class="p-2">812</td>
                <td class="p-2">2,563</td>
                <td class="p-2">31,694</td>
            </tr>
            <tr>
                <td class="p-2">negusflex</td>
                <td class="p-2">1,011,135</td>
                <td class="p-2">264</td>
                <td class="p-2">1,780</td>
                <td class="p-2">16,781</td>
            </tr>
            <tr>
                <td class="p-2">spankedhutt</td>
                <td class="p-2">89,401</td>
                <td class="p-2">36</td>
                <td class="p-2">1,317</td>
                <td class="p-2">973</td>
            </tr>
            <tr>
                <td class="p-2">hoodsatire</td>
                <td class="p-2">63,067</td>
                <td class="p-2">18</td>
                <td class="p-2">554</td>
                <td class="p-2">645</td>
            </tr>
        </table>
    </div>
    <?php

        include("footer.php");

    ?>
</body>
</html>