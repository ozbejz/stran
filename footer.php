<footer class="container border mt-2">
        <p>Ožbej Zdešar</p>
        <ul>
            <?php
                include("menu.php");

                foreach($links as $x){
                    echo '<li><a href="'.$x["link"].'">'.$x['title'].'</a></li>';
                }

            ?>
        </ul>
</footer>