<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMPLE CRUD OOP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css" />
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   
</head>

<body>
    <main>
        <div class="container">
            <!--TITLE--->
            <div class="row">
                <div class="container-sm mt-5 px-2">
                    <h1>Simple Crud Using PHP & AJAX</h1>
                    <p class="fw-normal">Create Update Delete</p>
                </div>
                <div class="container-sm mt-4 py-2 d-flex justify-content-end border-top border-bottom border-light-subtle">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createUser">
                        Add User
                    </button>
                </div>
                <div class="container-fluid mt-5">
                    <!---table--->
                    <table id="myTable" class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">firstName</th>
                                <th scope="col">middleName</th>
                                <th scope="col">lastName</th>
                                <th scope="col">age</th>
                                <th scope="col">dob</th>
                                <th scope="col">email</th>
                                <th scope="col">job</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                              
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
    
    <script src="../js/script.js"></script>
</body>
</html>
