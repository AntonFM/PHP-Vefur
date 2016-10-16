<?php include './title.php';
$errors = [];
$missing = [];
// check if the form has been submitted
if (isset($_POST['send'])) {
  
  /* to prevent an attacker from injecting other variables in
     the $_POST array in an attempt to overwrite your default values. By processing only those variables
     that you expect, your form is much more secure.
  */
    // list expected fields
    $expected = ['ticket','name', 'email', 'card'];
    $required = ['ticket','name', 'card', 'email'];
    // sækjum skrá sem vinnur með input gögnin úr formi, $_POST[]
    require './process.php';
} ?>

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
  <h1>Kaupa Miða Hér</h1>
  <main>
        
        
        <?php if ($missing || $errors) { ?>
            <p class="warning">Please fix the item(s) indicated.</p>
        <?php } ?>
        <form method="post" action="">

        <P>
        	Tegund miða:
  			<input type="radio" name="ticket" value="backrow" required>Bakröð
  			<input type="radio" name="ticket" value="frontrow" required>Framröð
  		</P>
            <p>
                <label for="name">Nafn kaupanda:
                    <?php if ($missing && in_array('name', $missing)) { ?>
                        <span class="warning">Vinsamlegast skráðu inn nafn</span>
                    <?php } ?>
                </label>
                <input name="name" id="name" type="text" required>
            </p>
            <p>
                <label for="email">Netfang kaupanda:
                    <?php if ($missing && in_array('email', $missing)) { ?>
                        <span class="warning">Vinsamlegast sláðu inn netfang</span>
                    <?php } ?>
                </label>
                <input name="email" id="email" type="email" required>
            </p>
            <p>
                <label for="card">Kortanúmer kaupanda:
                    <?php if ($missing && in_array('card', $missing)) { ?>
                        <span class="warning">Vinsamlegast sláðu inn kortanúmer</span>
                    <?php } ?>
                </label>
                <input name="card" id="card" type="card" required>
            </p>
            <p>
                <input name="send" type="submit" value="Kaupa miða">
            </p>
        </form>
        <!--<pre>
        <?php if ($_POST) { print_r($_POST); } ?>
        </pre>-->
    </main>
  
</article>

<?php include './footer.php'; ?>
</div>

</body>
</html>