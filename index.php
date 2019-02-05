<?php include "engine/helpers.php"; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php echo loadCss("template/css/") ?>
<!--    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">-->
<!--    <link rel="stylesheet" href="template/css/index.css">-->
    <title>Blog posts</title>
</head>
<body>

<?php include "template/partials/navbar.php"; ?>

<div class="container">

    <div class="row">

        <?php include "template/partials/card1.php"; ?>

        <?php include "template/partials/card2.php"; ?>

        <?php include "template/partials/categories.php"; ?>

        <?php include "template/partials/tags.php"; ?>

        </div>
    </div>

<?php include "template/partials/pagination.php"; ?>



<?php include "template/partials/footer.php"; ?>



<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>