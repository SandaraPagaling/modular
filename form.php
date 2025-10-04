<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

header {
  background-color: pink;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}

nav {
  float: left;
  width: 30%;
  height: 300px; 
  background: skyblue;
  padding: 20px;
}

nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  padding: 20px;
  width: 70%;
  background-color: yellow;
  height: 300px; 
}

section::after {
  content: "";
  display: table;
  clear: both;
}

footer {
  background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;
}

@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
</style>
</head>
<body>


<header>
  <h2>Cities</h2>
</header>

<section>
  <nav>
    <ul>
      <li><a href="index.php?page=london" class="<?php echo (isset($_GET['page']) === 'london') ? 'active' : '';?>">London</a></li>
      <li><a href="index.php?page=paris" class="<?php echo (isset($_GET['page']) === 'paris') ? 'active' : '';?>">Paris</a></li>
      <li><a href="index.php?page=tokyo" class="<?php echo (isset($_GET['page']) === 'tokyo') ? 'active' : '';?>">Tokyo</a></li>
    </ul>
  </nav>
  
  <article>
    <?php
        if (isset($_GET['page'])){
          $page =$_GET['page'];
          switch ($page) {
            case 'london':
              include 'london.php';
              break;
              case 'paris':
                include 'paris.php';
                break;
                case 'tokyo':
                  include 'tokyo.php';
                  break;
          }
        }
        ?>
  </article>
</section>

<footer>
  <p>Footer</p>
</footer>

</body>
</html>

