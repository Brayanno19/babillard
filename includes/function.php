<script>
// Fonction JavaScript pour afficher le PDF dans l'iframe
function afficherPdf(chemin) {
    const viewer = document.getElementById('pdfViewer');
    viewer.src = chemin;
}
</script>

<?php


function afficherPdfBoutons($dossier) {
    if (is_dir($dossier)) {
        $fichiers = scandir($dossier);
        foreach ($fichiers as $fichier) {
            $chemin = $dossier . '/' . $fichier;
            if (is_file($chemin) && pathinfo($chemin, PATHINFO_EXTENSION) === 'pdf') {
                echo '<button  onclick="afficherPdf(\'' . $chemin . '\')">' . basename($chemin) . '</button><br>';
            }
        }
    } else {
        echo "Le dossier spécifié n'existe pas.";
    }
}

function afficherPdfSurPage($cheminPdf) {
    if (is_file($cheminPdf) && pathinfo($cheminPdf, PATHINFO_EXTENSION) === 'pdf') {
        echo '<iframe id="pdfViewer" src="' . $cheminPdf . '" width="90%" height="500"></iframe>';
    } else {
        // echo "Le fichier spécifié n'est pas un PDF valide.";
    }
}

function afficheElement($dossier) {
    if (is_dir($dossier)) {
        $fichiers = scandir($dossier);
        foreach ($fichiers as $fichier) {
            $chemin = $dossier . '/' . $fichier;
            if (is_file($chemin) && pathinfo($chemin, PATHINFO_EXTENSION) === 'pdf') {
                echo '<button onclick="window.open(\'' . $chemin . '\')">' . basename($chemin) . '</button><br>';
            }
        }
    } else {
        echo "Le dossier spécifié n'existe pas.";
    }
}

?>