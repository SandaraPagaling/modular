<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modern Layout</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <header>
    <h1>Cities</h1>
  </header>

  <main class="container">
    <nav>
      <ul>
        <li><a href="london.php">London</a></li>
        <li><a href="paris.php">Paris</a></li>
        <li><a href="tokyo.php">Tokyo</a></li>
      </ul>
    </nav>

    <article>
      <h2>Welcome</h2>
      <p>This is a modern refactor of the old float-based layout. Now using flexbox for responsive design.</p>
    </article>
  </main>

  <?php include "partials/footer.php"; ?>

  <script src="script.js"></script>
</body>
</html>
