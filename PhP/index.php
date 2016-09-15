<?php include './title.php'; 
	include './rand_img.php'; 
?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<title>Gallery VSH <?php echo "&#8212; {$title}"; ?></title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="flex-container">

<?php include './header.php'; ?>

<nav class="nav">

<?php require './menu.php'; ?>

</nav>

<article class="article">
  <h1>Gallery</h1>
  <p>Þetta gallery mun birta myndir</p>

  <figure>
  <img src="<?= $selectedImage; ?>" alt="Random image">
  <figcaption></figcaption>
  </figure>

</article>

<?php include './footer.php'; ?>
</div>

</body>
</html>