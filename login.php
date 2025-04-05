<?php
// Startăm sesiunea
session_start();

// Conectare la baza de date
$servername = "localhost";
$dbUsername = "root"; // Numele de utilizator al bazei de date
$dbPassword = ""; // Parola bazei de date
$dbName = "admin_panel"; // Înlocuiește cu numele bazei tale de date

$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbName);

// Verificăm conexiunea
if ($conn->connect_error) {
    die("Conexiunea la baza de date a eșuat: " . $conn->connect_error);
}

// Verificăm dacă formularul a fost trimis
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Preluăm datele introduse de utilizator
    $inputUsername = $_POST['username'];
    $inputPassword = $_POST['password'];

    // Pregătim o interogare SQL pentru a verifica utilizatorul
    $stmt = $conn->prepare("SELECT password FROM users WHERE username = ?");
    $stmt->bind_param("s", $inputUsername);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Preluăm parola stocată în baza de date
        $row = $result->fetch_assoc();
        $hashedPassword = $row['password'];

        // Verificăm dacă parola introdusă corespunde cu cea din baza de date
        if (password_verify($inputPassword, $hashedPassword)) {
            // Setăm o variabilă de sesiune pentru utilizatorul autentificat
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $inputUsername;

            // Redirecționăm utilizatorul către o altă pagină (de exemplu, dashboard.php)
            header('Location: admin.php');
            exit;
        } else {
            $error = 'Parola este incorectă!';
        }
    } else {
        $error = 'Nume de utilizator inexistent!';
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Autentificare</h2>
    <?php if (!empty($error)): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>
    <form method="POST" action="">
        <label for="username">Nume utilizator:</label><br>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Parolă:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>