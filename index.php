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

      $lang = $_POST['lang'] ?? 'ita';

      foreach($faqs[$lang] as $faq) {
        faqPrint($faq, 1);
      }
    ?>
  </main>
  <footer>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
      <select name="lang" id="lang" onchange="this.form.submit()">
        <option value="ita" <?php if($lang == 'ita') echo 'selected' ?>>Italiano</option>
        <option value="eng" <?php if($lang == 'eng') echo 'selected' ?>>English</option>
      </select>
    </form>
  </footer>
</body>
</html>
