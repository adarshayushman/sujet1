<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $email = $_POST['email'];

    if (empty($prenom) || empty($nom) || empty($email)) {
        header("Location: index.php?error=Veuillez remplir tous les champs obligatoires.");
        exit();
    }

    // Récupérer les réponses du formulaire
    $carres = $_POST['carres'] ?? null;
    $horizontaux = $_POST['horizontaux'] ?? null;

    // Initialiser la variable quiz à 0
    $quiz = 0;

    // Vérifier si les deux réponses sont correctes
    if ($carres == '40' && strtolower($horizontaux) == 'oui') {
        $quiz = 1;
    }

    echo ($quiz == 1) ? 'Bravo, toutes vos réponses sont correctes !' : 'Désolé, vos réponses sont incorrectes.';
}
?>
