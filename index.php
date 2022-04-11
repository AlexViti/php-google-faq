<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Google FAQS</title>
</head>
<body>
  <main>
    <?php include 'faqs.php';

      $lang = $_GET['lang'] ?? 'it';

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
