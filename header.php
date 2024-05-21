<?php
//var_dump(pathinfo($_SERVER["SCRIPT_NAME"]));
//var_dump(pathinfo($_SERVER["SCRIPT_URL"]));
$stran = pathinfo($_SERVER["SCRIPT_NAME"])["filename"];
//echo $stran;
//$extension = isset(pathinfo($_SERVER["SCRIPT_NAME"])["extension"]);
//echo $extension;

?>
<header class="container ps-0 pt-0 pb-0">
        <nav class=" navbar navbar-expand-lg p-0">
            <div class="container m-0 p-0">
                <div class="navbar-header">
                    <a class="navbar-brand" href="http://localhost/dn3/">DN3</a>
                </div>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <?php
                            include("menu.php");
                            foreach($links as $x){
                                $aktivno = ($stran.'.php'==$x["link"])?"aktivno":"";
                                echo '                         
                                <li class="'. $aktivno .' nav-item " >
                                    <a class="nav-link" aria-current="page" href='.$x["link"].'>'.$x['title'].'</a>
                                </li>';
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>