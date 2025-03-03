<?php $_SESSION["annoce"]="notes"; ?>
<div class="content">
            <aside class="sidebar">
                <h2>Annonces</h2>
                <div id="typeInfo">
                    <button id="infos" onclick="<?php ;?>">Info</button>
                    <button id="programmes" onclick="<?php  $_SESSION['annoce']='programme';?>">Programme</button>
                    <button id="notes" onclick="<?php  $_SESSION['annoce'];?>">notes</button>
                </div>
                <br>
                <div id="fichier">
                    <?php
                        include_once("./includes/function.php");
                            // Utilisation de la fonction
                        afficherPdfBoutons($_SESSION['annoce']);

                        $_SESSION["location"]="./notes/PV Délibération L2A 2023-2024  11-10-2024.pdf";
                        ?>
                </div>

            </aside>
            <section class="articles">
                <?php
            // Utilisation de la fonction
afficherPdfSurPage($_SESSION["location"]);?>

            </section>
        </div>