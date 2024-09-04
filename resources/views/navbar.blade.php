<div class="bg-white bg-white w-100 shadow-sm mainNavbar">
        <a class=" text-decoration-none col-4" href="{{ session('subFolder') }}/">
          <h5 class="text-dark fw-bold">CMS</h5>
        </a>
    
        <div class="col-md-6 col-8 ">
          <div class="row display-flex justify-content-end flex-nowrap pe-md-2 pe-1">
            <div style="width:100px"  class=" d-flex align-items-center justify-content-around ">
              
              <div><i class="fa fa-bell me-3"></i></div>
              <div class="dropdown ">
                <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="https://github.com/mdo.png" alt="" class="rounded-circle me-2" width="32" height="32">
                  {{-- <strong>mdo</strong> --}}
                </a>
                <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                  <li class="px-3 text-center"><h6 style="font-size: 11px;font-weight:600;" class="">Welcome Super Admin!</h6></li>
                  <li><a class="dropdown-item" href="#">Settings</a></li>
                  <li><a class="dropdown-item" href="#">Profile</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="/">Sign out</a></li>
                </ul>
              </div>
            </div>

            <div class="text-end bar1" style="width:50px"><i class="fa fa-bars f3"></i></div>

          </div>
        </div>

  </div>