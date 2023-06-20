<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <title>S01E02</title>
</head>

<body>
    <?php
    include "nav.php"
        ?>
    <p class="h1 mt-2 ms-5">Create Course</p>
    <div class="mb-3 w-50 mx-auto">
        <label for="exampleFormControlInput1" class="form-label">Title</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="mb-3 w-50 mx-auto">
        <label for="exampleFormControlInput1" class="form-label">Image</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="mb-3 w-50 mx-auto">
        <label for="exampleFormControlInput1" class="form-label">Short Description</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="mb-3 w-50 mx-auto">
        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <div class="mb-3 w-50 mx-auto">
        <label for="exampleFormControlTextarea1" class="form-label">Programs</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <div class="mb-3 w-50 mx-auto">
        <label for="exampleFormControlInput1" class="form-label">Hours</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="mb-3 w-50 mx-auto">
        <label for="exampleFormControlInput1" class="form-label">Tarif</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="mb-3 w-50 mx-auto">
        <label for="exampleFormControlInput1" class="form-label">Dates</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="mb-3 w-50 mx-auto">
        <label for="exampleFormControlInput1" class="form-label">Teacher</label>
        <select class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="1">Nicolas R.</option>
            <option value="2">Pierre C.</option>
            <option value="3">Alexandre B.</option>
        </select>
    </div>
    <div class="mb-3 w-50 mx-auto">
        <label for="exampleFormControlInput1" class="form-label">Modality</label>
        <select class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="1">A distance</option>
            <option value="2">Présentiel</option>
            <option value="3">A distance et présentiel</option>
        </select>
    </div>
    <div class="mb-3 w-50 mx-auto">
        <label for="exampleFormControlInput1" class="form-label">Level required</label>
        <select class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="1">Débutant</option>
            <option value="2">Intermédiaire</option>
            <option value="3">Avancé</option>
        </select>
    </div>
    <button type="button" class="btn btn-primary btn-lg">Create</button>
</body>

</html>