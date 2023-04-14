<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Rejestracja</title>
  </head>
  <body>
    <?php
      session_start();
      if (isset($_SESSION['username'])) {
        header('Location: index.php');
        exit();
      }
    ?>
    <h1>Rejestracja</h1>
    <form action="welcome.php" method="POST">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" placeholder="Wprowadź adres email" required><br><br>
      <label for="password1">Hasło:</label>
      <input type="password" id="password1" name="password1" placeholder="Wprowadź hasło" required><br><br>
      <label for="password2">Powtórz hasło:</label>
      <input type="password" id="password2" name="password2" placeholder="Wprowadź hasło ponownie" required><br><br>
      <label>
        <input type="checkbox" name="regulamin" required> Akceptuję regulamin.
      </label><br><br>
      <input type="submit" value="Dodaj użytkownika">
    </form>
    <?php
    session_start();
    if (password1 !== password2) {
        echo "Podane hasła są różne.";
        exit();
      }
    ?>
    <p>
      <a href="regulamin.php">Zapoznaj się z regulaminem.</a>
    </p>
  </body>
</html>
