<!-- Modal insert -->
<div class="modal fade modal-xl" id="insertUser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Insert User</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!--Form -->
                <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST" class="my-3" id="insertFormid">
                    <div class="row g-2">
                        <div class="col-md-4">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="fname" required placeholder="">
                                <label for="fname">First Name</label>
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="mname" placeholder="">
                                <label for="mname">Middle Name - optional</label>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="lname" required placeholder="">
                                <label for="lname">Last Name</label>
                            </div>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" name="email" required placeholder="">
                                <label for="email">Email@example.com</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" name="dob" required autofocus="off" autocomplete="off">
                                <label for="dob">DateOfBirth</label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" min="1" max="100" name="age" required placeholder="">
                                <label for="age">Age</label>
                            </div>
                        </div>
                    </div>
                    <div class="input-group my-3">
                        <label class="input-group-text" for="jobSelect">Job</label>
                        <select class="form-select" name="job" required>
                            <option value="" selected>Select Position..</option>
                            <option value="Employee">Employee</option>
                            <option value="Manager">Manager</option>
                            <option value="Admin">Admin</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-secondary" name="insertSubmit" id="btnSubmit">Add</button>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!----MODAL UPDATE--->
<div class="modal fade modal-xl" id="updateUser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Update User</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!--Form -->
                <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST" class="my-3" id="updateFormId">
                    <input type="hidden" name="userId" id="userId">
                    <div class="row g-2">
                        <div class="col-md-4">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="fname" name="fname" required placeholder="">
                                <label for="fname">First Name</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="mname" name="mname" placeholder="">
                                <label for="mname">Middle Name - optional</label>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="lname" name="lname" required placeholder="">
                                <label for="lname">Last Name</label>
                            </div>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="email" readonly class="form-control" id="email" name="email" placeholder="">
                                <label for="email">Email@example.com</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" id="dob" name="dob" required autofocus="off" autocomplete="off">
                                <label for="dob">DateOfBirth</label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" min="1" max="100" id="age" name="age" required placeholder="">
                                <label for="age">Age</label>
                            </div>
                        </div>
                    </div>
                    <div class="input-group my-3">
                        <label class="input-group-text" for="jobSelect">Job</label>
                        <select class="form-select" name="job" id="job" required>
                            <option value="Employee">Employee</option>
                            <option value="Manager">Manager</option>
                            <option value="Admin">Admin</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-secondary" name="updateSubmit" id="btnSubmit">Update</button>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                </form>
            </div>
        </div>
    </div>
</div>



<!----MODAL DELETE--->
<div class="modal fade modal-md" id="deleteUser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Delete User</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST" class="my-3" id="deleteFormId">
                
                <div class="modal-body">
                    <!--Form -->
                    <input type="hidden" name="userId" id="userIdDelete">
                    <h5>Are you sure you want to Delete this User?</h5>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger" name="deleteSubmit" id="btnSubmit">Delete</button>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>