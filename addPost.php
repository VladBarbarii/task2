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
                <option>Leisure time</option>
                <option>Fun and games</option>
                <option>Arts</option>
                <option>Collecting things</option>
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
</body>
</html>