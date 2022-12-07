<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./comment.css">
    <title>Commentaires</title>
</head>
<body>
<?php include('header.php') ?>

    <div class="formcomment">
        <form id="commentform" method=post>
            <label for="comment"></label>
            <textarea id="comment" name="comment" rows="5" cols="33" placeholder="Laissez un commentaire"></textarea>
            <input type="submit" name="submit" value="Publier votre commentaire">
        </form>
    </div>



<?php include('footer.php') ?>
</body>
</html>