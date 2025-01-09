
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guessing Game - Amine Amadlane - 545f808a</title> <!-- Inclure votre nom et le code dans le titre -->
</head>
<body>
    <h1>Bienvenue dans le Jeu de Deviner le Nombre !</h1>
    <form method="GET">
        <label for="guess">Devinez un nombre :</label>
        <input type="text" id="guess" name="guess">
        <input type="submit" value="Soumettre">
    </form>
    <?php
// Le nombre correct à deviner (à ajuster pour chaque étudiant)
$correct_answer = 75; // Remplacez par le nombre correct généré par l'autograder

// Vérifier si le paramètre 'guess' est présent
if (!isset($_GET['guess'])) {
    echo "<p>Missing guess parameter</p>";
} else {
    $guess = $_GET['guess'];

    // Vérifier si la valeur de 'guess' est vide ou trop courte
    if (strlen($guess) < 1) {
        echo "<p>Your guess is too short</p>";
    }
    // Vérifier si 'guess' est un nombre
    elseif (!is_numeric($guess)) {
        echo "<p>Your guess is not a number</p>";
    }
    // Vérifier si la devinette est trop basse
    elseif ($guess < $correct_answer) {
        echo "<p>Your guess is too low</p>";
    }
    // Vérifier si la devinette est trop haute
    elseif ($guess > $correct_answer) {
        echo "<p>Your guess is too high</p>";
    }
    // Si la devinette est correcte
    else {
        echo "<p>Congratulations - You are right</p>";
    }
}
?>
</body>
</html>
