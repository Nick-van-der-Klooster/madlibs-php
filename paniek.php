<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>onkunde</title>
  <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash" rel="stylesheet">
</head>
<body>
  <h1>Mad Libs </h1>
  <ul>
    <li><a href="madlibs.html">Er heerst paniek...</a></li>
    <li><a href="onkunde.html">Onkunde</a></li>
  </ul>
  <main>
    <h2>Er heerst paniek...</h2>
    <p>Er heerst paniek in het koninkrijk <?php echo $_POST['ja'];?>.
     Koning <?php echo $_POST['6']; ?> is ten einde raad en als koning <?php echo $_POST['6'];?> ten einde raad is,
     dan roept hij zijn ten-einde-raadsheer <?php echo $_POST['2']; ?>.<br></p>
    <p> "<?php echo $_POST['2']; ?>! Het is een ramp! Het is een schande!"<br></p>
    <p>"Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"<br></p>
    <p>"Mijn <?php echo $_POST['1']; ?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?php echo $_POST['5']; ?> voor hem gekocht!"<br></p>
    <p> "Majesteit, uw <?php echo $_POST['1']; ?> komt vast vanzelf terug?"<br></p>
    <p>"Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?php echo $_POST['8']; ?> leren?"<br></p>
    <p>"Maar Sire, daar kunt u toch uw <?php echo $_POST['7']; ?> voor gebruiken."<br></p>
    <p>"<?php echo $_POST['2']; ?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."<br></p>
    <p> "<?php echo $_POST['4']; ?>, Sire."<br></p>
  </main>
  <footer>Deze website is gemaakt door <?php echo $_POST['2']; ?></footer>
  </body>
</html>
