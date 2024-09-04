@include("header")

    <div class="mainBox">

        <div class="container">

           <div class="row">
            <div class=" col-lg-12 mb-3">
                <h2 class="maintitle"> Dashboard </h2>
            </div>  
            </div> 

{{-- ============Tabs====== --}}
            <div class="row">
                
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6 mb-4">
                    <a href="#" >
                       <div class=" card1  " >
                         <div class="row justify-content-around align-items-center ">
                            <div class="col-4">
                                <div class="avatar avtar_c1 flex-shrink-0">
                                    <img src="{{Url::asset('images/user.png')}}" alt="chart success" class="rounded">
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="card-title d-flex align-items-start justify-content-between"></div>
                                <span class="fw-semibold d-block mb-1">Total Delegates</span>
                                <h3 class="card-title mb-2">120</h3>
                            </div>
                          </div>
                    </div>
                 </a>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6 mb-4">
                    <a href="#" >
                       <div class=" card1  " >
                         <div class="row justify-content-around align-items-center ">
                            <div class="col-4">
                                <div class="avatar avtar_c2 flex-shrink-0">
                                    <img src="{{Url::asset('images/client.png')}}" alt="chart success" class="rounded">
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="card-title d-flex align-items-start justify-content-between"></div>
                                <span class="fw-semibold d-block mb-1">Total Clients</span>
                                <h3 class="card-title mb-2">50</h3>
                            </div>
                          </div>
                    </div>
                 </a>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6 mb-4">
                    <a href="#" >
                       <div class=" card1  " >
                         <div class="row justify-content-around align-items-center ">
                            <div class="col-4">
                                <div class="avatar avtar_c3 flex-shrink-0">
                                    <img src="{{Url::asset('images/consultant.png')}}" alt="chart success" class="rounded">
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="card-title d-flex align-items-start justify-content-between"></div>
                                <span class="fw-semibold d-block mb-1">Total Consultant</span>
                                <h3 class="card-title mb-2">40</h3>
                            </div>
                          </div>
                    </div>
                 </a>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6 mb-4">
                    <a href="#" >
                       <div class=" card1  " >
                         <div class="row justify-content-around align-items-center ">
                            <div class="col-4">
                                <div class="avatar avtar_c4 flex-shrink-0">
                                    <img src="{{Url::asset('images/course.png')}}" alt="chart success" class="rounded">
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="card-title d-flex align-items-start justify-content-between"></div>
                                <span class="fw-semibold d-block mb-1">Total Courses</span>
                                <h3 class="card-title mb-2">150</h3>
                            </div>
                          </div>
                    </div>
                 </a>
                </div>
            </div>

{{-- ==============User=table=========== --}}
<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-12 mb-4">
         <div class=" card1  " >
          <h5 class="card-header">Active Clients  </h5>
          <div class="table table-responsive text-center text-nowrap">
              <table class="table">
                <thead>
                  <tr>
                    <th>Client </th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Status</th>
                    <th>Action </th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                  <tr>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>ABC Pvt. Ltd.</strong></td>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>John smith</strong></td>
                    <td>smith@gmail.com</td>
                    <td>+1 12345678</td>
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
                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>XYZ Inc. </strong></td>
                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>mike </strong></td>
                <td>mike@xyz.com</td>
                <td>+1 12345678</td>
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


           <tr>
            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>ABC Pvt. Ltd.</strong></td>
            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>John smith</strong></td>
            <td>smith@gmail.com</td>
            <td>+1 12345678</td>
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
        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>XYZ Inc. </strong></td>
        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>mike </strong></td>
        <td>mike@xyz.com</td>
        <td>+1 12345678</td>
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

