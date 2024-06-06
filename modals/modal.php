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
                <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST" class="my-3" id="insertFormid">
                    <div class="row g-2">
                        <div class="col-md-4">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="fname" name="fname" required placeholder="">
                                <label for="fname">First Name</label>
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="mname" placeholder="">
                                <label for="mname">Middle Name - optional</label>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput"name="lname" required placeholder="">
                                <label for="lname">Last Name</label>
                            </div>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="email" name="email" required placeholder="">
                                <label for="email">Email@example.com</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" id="dob" name="dob" required placeholder="">
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
                        <select class="form-select" name="job" id="jobSelect" required>
                            <option value="" selected>Select Position..</option>
                            <option value="position 1">Position 1</option>
                            <option value="position 2">Position 2</option>
                            <option value="position 3">Position 3</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-secondary" name="submit" id="btnSubmit">Add</button>
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>