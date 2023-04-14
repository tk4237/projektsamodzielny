<?php
    require_once"systemClass.php";
    require_once"layoutClass.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        SystemClass::printHead("./styles/main.css", "Sklep internetowy");
    ?>
</head>
<body>
    <?php
        LayoutClass::printHeader();
    ?>
        <section class='hero'>
            <div class='hero__container'>
            <h1>SKLEP GAMINGOWY</h1>
            <p>Lorem ipsum</p>
            <button type='button'>
                <a>Przycisk</a>
            </button>
            </div>
        </section>


</html>