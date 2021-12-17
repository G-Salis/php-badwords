<?php

$frase='Il Lonfo non vaterca né gluisce
e molto raramente barigatta,
ma quando soffia il bego a bisce bisce
sdilenca un poco e gnagio s’archipatta.
È frusco il Lonfo! È pieno di lupigna
arrafferia malversa e sofolenta!
Se cionfi ti sbiduglia e ti arrupigna
se lugri ti botalla e ti criventa.

Eppure il vecchio Lonfo ammargelluto
che bete e zugghia e fonca nei trombazzi
fa lègica busìa, fa gisbuto;

e quasi quasi in segno di sberdazzi
gli affarferesti un gniffo. Ma lui zuto
t’alloppa, ti sbernecchia; e tu l’accazzi';




?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<div>
        <?php echo str_replace($_GET['censure'] , "***", $frase)?>
</div>
<div>Questo paragrafo è lungo <?php echo strlen(str_replace($_GET['censure'] , "***", $frase)) ?></div>


</body>
</html>