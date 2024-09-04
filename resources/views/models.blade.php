<!-- Add User modal -->

  <div class="modal fade"  id="addUserModel" tabindex="-1" aria-labelledby="addUserModelLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addUserModelLabel">Add User </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            
            <div class="row">
                <div class="mb-3 col-lg-3 col-md-4 col-sm-6 col-12">
                    <label for="name" class="form-label">First name </label>
                    <input type="text" class="form-control" id="fname" placeholder="John">
                  </div>

                  <div class="mb-3 col-lg-3 col-md-4 col-sm-6 col-12">
                    <label for="lname" class="form-label">Last name </label>
                    <input type="text" class="form-control" id="lname" placeholder="doe">
                  </div>
    
                  <div class="mb-3 col-lg-3 col-md-4 col-sm-6 col-12">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="demo@example.com">
                  </div>

                  <div class="mb-3 col-lg-3 col-md-4 col-sm-6 col-12">
                    <label for="mobile" class="form-label">Mobile </label>
                    <input type="text" class="form-control" id="mobile" placeholder="Enter mobile ">
                  </div>


                  <div class="mb-3 col-lg-3 col-md-4 col-sm-6 col-12">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Min. length 6 ">
                  </div>


                  <div class="mb-3 col-lg-3 col-md-4 col-sm-6 col-12">
                    <label for="mobile" class="form-label">Select Role </label>
                    <select name="role" id="role" class="form-select">
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                        <option value="client">Client</option>
                        <option value="consultant">Consultant</option>
                        <option value="delegates">Delegates</option>
                    </select>
                  </div>

                 

            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </div>
  </div>
{{-- ========================================= --}}


<!-- Add User modal -->

  <div class="modal fade"  id="addClientModel" tabindex="-1" aria-labelledby="addClientModelLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addClientModelLabel">Add Client </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            
            <div class="row">
                <div class="mb-3 col-lg-3 col-md-4 col-sm-6 col-12">
                    <label for="name" class="form-label">First name </label>
                    <input type="text" class="form-control" id="fname" placeholder="John">
                  </div>

                  <div class="mb-3 col-lg-3 col-md-4 col-sm-6 col-12">
                    <label for="lname" class="form-label">Last name </label>
                    <input type="text" class="form-control" id="lname" placeholder="doe">
                  </div>
    
                  <div class="mb-3 col-lg-3 col-md-4 col-sm-6 col-12">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="demo@example.com">
                  </div>

                  <div class="mb-3 col-lg-3 col-md-4 col-sm-6 col-12">
                    <label for="mobile" class="form-label">Mobile </label>
                    <input type="text" class="form-control" id="mobile" placeholder="Enter mobile ">
                  </div>


                  <div class="mb-3 col-lg-3 col-md-4 col-sm-6 col-12">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Min. length 6 ">
                  </div>


                  <div class="mb-3 col-lg-3 col-md-4 col-sm-6 col-12">
                    <label for="mobile" class="form-label">Select Role </label>
                    <select name="role" id="role" class="form-select">
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                        <option value="client">Client</option>
                        <option value="consultant">Consultant</option>
                        <option value="delegates">Delegates</option>
                    </select>
                  </div>

                 

            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </div>
  </div>