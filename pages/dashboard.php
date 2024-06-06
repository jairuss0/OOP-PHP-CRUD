<?php
include_once("../includes/readData.inc.php");
include_once("../includes/insertUser.inc.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMPLE CRUD OOP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="../styles/style.css" rel="stylesheet">
    <!-- Sweetalert 2 CSS -->
    <link rel="stylesheet" href="assets/plugins/sweetalert2/sweetalert2.min.css">
</head>

<body>
    <main>
        <div class="container">
            <!--TITLE--->
            <div class="row">
                <div class="container-sm mt-5 px-2">
                    <h1>Simple Crud Using PHP and AJAX</h1>
                    <p class="fw-normal">Create Update Delete</p>
                </div>
                <div class="container-sm mt-4 py-2 d-flex justify-content-end border-top border-bottom border-light-subtle">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#insertUser">
                        Add User
                    </button>
                </div>
                <div class="container-fluid">

                    <!---table--->
                </div>
            </div>
        </div>
    </main>
    <?php include('../modals/modal.php') ?>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Sweetalert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>