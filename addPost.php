<?php include "engine/helpers.php"; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php echo loadCss("template/css/") ?>
    <title>Document</title>
</head>
<body>
<form>
    <div class="container mt-5">
        <h3 class="my-3">Enter post data:</h3>
        <hr>
        <div class="form-group mt-5">
            <label for="usr">Post Name</label>
            <input type="text" class="form-control" id="usr">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Select category</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>Category 1</option>
                <option>Catogory 2</option>
                <option>Category 3</option>
                <option>Category 4</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect2">Select by tag</label>
            <select multiple class="form-control" id="exampleFormControlSelect2">
                <option>Leisure time</option>
                <option>Fun and games</option>
                <option>Arts</option>
                <option>Collecting things</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Content</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Choose post image</label>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </div>
</form>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>