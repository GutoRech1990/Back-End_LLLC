<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom"> <br>

        <label for="mail">Email</label>
        <input type="email" name="mail" id="mail"> <br>

        <label for="color">Your favourite color: </label>
        <select name="color" id="color">
            <option value="">---Choisir une couleur---</option>
            <option value="Rouge">Rouge</option>
            <option value="Vert">Vert</option>
            <option value="Bleu">Bleu</option>
        </select> <br>

        <label for="message">Message:</label>
        <textarea name="message" id="message" rows="4"></textarea> <br>

        <input type="radio" name="contact_methode" id="phone" value="phone">
        <label for="phone">I want to be contacted by phone</label> <br>
        <input type="radio" name="contact_methode" id="mail" value="mail">
        <label for="mail">I want to be contacted by mail</label> <br>
        <input type="checkbox" name="accept" id="accept" value="accepted">
        <label for="accept">I accept</label> <br>

        <input type="submit" value="Submit">

    </form>

    <?php
    if (isset($_POST["color"])) {
        echo $_POST["color"];
    }


    ?>
</body>

</html>