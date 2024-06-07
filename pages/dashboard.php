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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css" />

</head>

<body>
    <main>
        <div class="container">
            <!--TITLE--->
            <div class="row">
                <div class="container-sm mt-5 px-2">
                    <h1>Simple Crud Using PHP</h1>
                    <p class="fw-normal">Create Update Delete</p>
                </div>
                <div class="container-sm mt-4 py-2 d-flex justify-content-end border-top border-bottom border-light-subtle">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#insertUser">
                        Add User
                    </button>
                </div>
                <div class="container-fluid mt-5">
                    <!---table--->
                    <table id="myTable" class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#id</th>
                                <th scope="col">FirstName</th>
                                <th scope="col">MiddleName</th>
                                <th scope="col">LastName</th>
                                <th scope="col">Age</th>
                                <th scope="col">Dob</th>
                                <th scope="col">email</th>
                                <th scope="col">job</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($row as $data): ?>
                            <tr>
                                <th scope="row"><?=$data['id']?></th>
                                <td><?=$data['firstName']?></td>
                                <td><?=$data['middleName']?></td>
                                <td><?=$data['lastName']?></td>
                                <td><?=$data['age']?></td>
                                <td><?=$data['dob']?></td>
                                <td><?=$data['email']?></td>
                                <td><?=$data['job']?></td>
                                <td><button>Edit</button><button>Delete</button></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
    <?php include('../modals/modal.php') ?>
    <!-- jQuery library -->
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                responsive: true
            });
        });
    </script>

</body>

</html>