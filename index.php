<?php  include 'data.php';
  $lang = $_GET['lang'] ?? 'it'; 
?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Google FAQS</title>

  <!-- Stylesheet -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
  <!-- Gilroy font -->
  <link href="http://fonts.cdnfonts.com/css/gilroy-bold" rel="stylesheet">

</head>
<body>
  <!-- Fixed header with logo on left, two button on right and a navbar -->
  <header class="header">
    <div class="container">
      <div class="header-logo">
        <img src="https://www.gstatic.com/images/branding/googlelogo/svg/googlelogo_clr_74x24px.svg" alt="Google Logo">
        <span><?php echo $title[$lang]?></span>
      </div>
      <button class="app">
        <svg viewBox="0 0 24 24">
          <path fill="currentColor"
            d="M6,8c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM12,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM6,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM6,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM12,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM16,6c0,1.1 0.9,2 2,2s2,-0.9 2,-2 -0.9,-2 -2,-2 -2,0.9 -2,2zM12,8c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM18,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM18,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2z">
          </path>
      </svg>
    </button>
    </div>
    <!-- Nav with headernav in links.php -->
    <nav>
      <ul>
        <?php
        foreach ($headerNav[$lang] as $key => $value) {
          echo "<li><a href='$value'>$key</a></li>";
        }
        ?>
      </ul>
    </nav>
  </header>
  <main>
    <?php
      foreach($faqs[$lang] as $faq) {
        faqPrint($faq, 1);
      }
    ?>
  </main>
  <footer>
    <form action="index.php" method="get">
      <select name="lang" id="lang" onchange="this.form.submit()">
        <option value="it" <?php if($lang == 'it') echo 'selected' ?>>Italiano</option>
        <option value="en" <?php if($lang == 'en') echo 'selected' ?>>English</option>
      </select>
    </form>
  </footer>
</body>
</html>
