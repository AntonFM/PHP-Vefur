<?php include './title.php'; 
	
# use keyword must be declared at the top level of a script. It cannot be nested inside a conditional statement.
use File\Upload; # declaration, so you can refer to the class as Upload rather than using the fully qualified name

if (isset($_POST['upload'])) {
    
    // echo "<pre>";
    // print_r($_FILES);  # Skoðum skráarupplýsingar
    // echo "</pre>";
    // define the path to the upload folder
    $destination = $_SERVER['DOCUMENT_ROOT'] . "/2t/3003922969/images/";  # Þú þarft að breyta slóð.
    // svo við getum notað class með t.d. move() fallið og getMessage() ogsfrv...
    require_once 'File/Upload.php';
    // Because the object might throw an exception
    try {
        // búum til upload object til notkunar.  Sendum argument eða slóðina að upload möppunni sem á að geyma skrá
        $loader = new Upload($destination);
        // köllum á og notum move() fallið sem færir skrá í upload möppu, þurfum að gera þetta strax.
        $loader->upload();
        // köllum á getMessage til að fá skilaboð (error or not).
        $result = $loader->getMessages();

    } catch (Exception $e) {
        echo $e->getMessage();  # ef við náum ekki að nota Upload class
    }
}

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
  <h1>Gallery Sala</h1>
  <p>Hér geturðu selt verkin þín</p>

    <form action="" method="post" enctype="multipart/form-data" id="uploadImage">
        <p>
            <label for="image">Hladdu upp verkinu þínu:</label>
            <input type="file" name="image" id="image">
        </p>
        <p>
            <input type="submit" name="upload" id="upload" value="Senda Inn">
        </p>
        <?php
        // Keyrir bara ef það er búið að smella á submit 
        if (isset($result)) {
            echo '<ul>';
            //  Birta skilboðin úr messages array (Upload class).
            foreach ($result as $message) {
                echo "<li>$message</li>";
            }
            echo '</ul>';
        }
    ?>
    </form>
  

</article>

<?php include './footer.php'; ?>
</div>

</body>
</html>