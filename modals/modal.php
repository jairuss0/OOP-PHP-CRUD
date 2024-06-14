<!-- Modal insert -->
<div class="modal fade modal-xl" id="createUser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Create User</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!--Form -->
                <div class="row g-2">
                    <div class="col-md-4">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="fname" id="fname_insert" required placeholder="">
                            <label for="fname">First Name</label>
                        </div>

                    </div>
                    <div class="col-md-3">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="mname" id="mname_insert" placeholder="">
                            <label for="mname">Middle Name - optional</label>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="lname" id="lname_insert" required placeholder="">
                            <label for="lname">Last Name</label>
                        </div>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" name="email" id="email_insert" required placeholder="">
                            <label for="email">Email@example.com</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating mb-3">
                            <input type="date" class="form-control" name="dob" id="dob_insert" required autofocus="off" autocomplete="off">
                            <label for="dob">DateOfBirth</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" min="1" max="100" name="age" id="age_insert" required placeholder="">
                            <label for="age">Age</label>
                        </div>
                    </div>
                </div>
                <div class="input-group my-3">
                    <label class="input-group-text" for="jobSelect">Job</label>
                    <select class="form-select" name="job" id="job_insert" required>
                        <option value="" selected>Select Position..</option>
                        <option value="Employee">Employee</option>
                        <option value="Manager">Manager</option>
                        <option value="Admin">Admin</option>
                    </select>
                </div>
                <button class="btn btn-primary" id="createBtnSubmit">Add User</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>

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
                <input type="hidden" name="userId" id="userId_update">
                <div class="row g-2">
                    <div class="col-md-4">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="fname_update" name="fname" required placeholder="">
                            <label for="fname">First Name</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="mname_update" name="mname" placeholder="">
                            <label for="mname">Middle Name - optional</label>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="lname_update" name="lname" required placeholder="">
                            <label for="lname">Last Name</label>
                        </div>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="email" readonly class="form-control" id="email_update" name="email" placeholder="">
                            <label for="email">Email@example.com</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating mb-3">
                            <input type="date" class="form-control" id="dob_update" name="dob" required autofocus="off" autocomplete="off">
                            <label for="dob">DateOfBirth</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" min="1" max="100" id="age_update" name="age" required placeholder="">
                            <label for="age">Age</label>
                        </div>
                    </div>
                </div>
                <div class="input-group my-3">
                    <label class="input-group-text" for="jobSelect">Job</label>
                    <select class="form-select" name="job" id="job_update" required>
                        <option value="Employee">Employee</option>
                        <option value="Manager">Manager</option>
                        <option value="Admin">Admin</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-secondary" id="updateBtnSubmit">Update</button>
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>



<!----MODAL DELETE--->
<div class="modal fade modal-md" id="deleteUser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Delete</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!--Form -->
                <input type="hidden" name="userId" id="userId_delete">
                <h5>Delete This User Permanently</h5>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" id="deleteBtnSubmit">Proceed</button>
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>