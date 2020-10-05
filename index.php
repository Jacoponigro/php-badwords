<!-- /* dichiarazione variabili php e str_replace */ -->
<?php
$bad_word = "jacopo";
$paragraph ="Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas ipsum vero blanditiis, jacopo campione perspiciatis aliquid enim soluta assumenda vel cupiditate totam pariatur asperiores exercitationem beatae fuga animi labore nisi quibusdam.";
$clean = str_replace($bad_word, "***", $paragraph);
?>

<!-- /* corpo html */ -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <title>badword</title>
  </head>
  <body>
    <p><?php echo $clean;?></p>
  </body>
</html>
