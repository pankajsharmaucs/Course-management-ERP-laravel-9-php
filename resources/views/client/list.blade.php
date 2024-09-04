@include("header")

    <div class="mainBox">

        <div class="container">

           <div class="row">
            <div class=" col-lg-12 mb-3">
                <h2 class="maintitle"> List Client </h2>
            </div>  
            </div> 

            {{-- ==============User=table=========== --}}
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-12 mb-4">
                    <div class=" card1  " >
                      <div class="row justify-content-between align-items-center px-4">
                          <h5 class="col-6  card-header">All Clients   </h5>
                          <div class="col-6 text-end">
                              <button class="btn btn-success"  data-bs-toggle="modal" 
                              data-bs-target="#">
                                  Add Client <i class="fa fa-plus"></i></button>   
                          </div>
                      </div>
                      <div class="table table-responsive text-center text-nowrap">
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Client</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Contact</th>
                                <th>Status</th>
                                <th>Action </th>
                              </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                              <tr>
                                  <td>John Corp.</td>
                                  <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>John </strong></td>
                                  <td>john@gmail.com</td>
                                  <td>+1 99889988</td>
                                  <td>
                                    <div class="switcher">
                                        <label for="toggle-0">
                                          <input type="checkbox" checked id="toggle-0"><span><small></small></span><small></small>
                                        </label>
                                      </div>
                                  </td>
                                  <td>
                                    <div class="btn btn-primary py-1">Edit</div>
                                  </td>
                                </tr>

                                <tr>
                                  <td>Kim Inc.</td>
                                  <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>kim </strong></td>
                                  <td>kim@gmail.com</td>
                                  <td>+1 22222222</td>
                                  <td>
                                    <div class="switcher">
                                        <label for="toggle-1">
                                          <input type="checkbox" id="toggle-1"><span><small></small></span><small></small>
                                        </label>
                                      </div>
                                  </td>
                                  <td>
                                    <div class="btn btn-primary py-1">Edit</div>
                                  </td>
                                </tr>
                              
                            </tbody>
                          </table>
                        </div>
                    </div>
              
              </div>

                  

            </div>

        </div>


@include("footer")


