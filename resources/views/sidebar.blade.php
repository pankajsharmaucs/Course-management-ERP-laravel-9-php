
<div class="sidebar">
    

    <a class="menulist navigation dashboard active_nav" href="{{ session('subFolder') }}/dashboard">
        <i class="fa fa-dashboard f1"></i>
        <h6 class="ms-lg-3 ms-2">Dashboard</h6>
    </a>

    <div class="w-100 mb-3">
        <div class="dropdownBox " onclick="showOption(1)">
            <div class="col-12  d-flex" >
                <div class="col-md-8 col-9 d-flex">
                    <i class="fa fa-user "></i>
                    <h6 class="mx-lg-3 mx-2">Users</h6>
                </div>
                <i class="fa fa-chevron-down f2" id="arrow1" ></i>    
            </div>  

            <div class="col-12 innerListBox navigation" id="innerListBox1">
                <div class="col-12 inner2"  >
                    <a class="innerMenulist col-12 pt-2"  href="{{ session('subFolder') }}/user/list" >
                        <i class="fa fa-list f1"></i>
                        <h6 class="ms-lg-3 ms-2 pt-2">List User</h6>
                    </a>
                </div>
            </div>

        </div>
    </div>


    <div class="w-100 mb-3">
        <div class="dropdownBox " onclick="showOption(2)">
            
            <div class="col-12 d-flex " >
                <div class="col-md-8 col-9 d-flex">
                    <i class="fa fa-users "></i>
                    <h6 class="mx-lg-3 mx-2">Clients</h6>
                </div>
                <i class="fa fa-chevron-down f2" id="arrow2" ></i>    
            </div>  

            <div class="col-12 innerListBox  navigation" id="innerListBox2">
                <div class="col-12 inner2"  >
                    <a class="innerMenulist col-12 pt-2"  href="{{ session('subFolder') }}/client/list" >
                        <i class="fa fa-list f1"></i>
                        <h6 class="ms-lg-3 ms-2 pt-2">List Clients</h6>
                    </a>
                </div>
            </div>

        </div>
    </div>

    <a class="menulist navigation" href="{{ session('subFolder') }}/consultant/list">
        <i class="fa fa-briefcase   "></i>
        <h6 class="ms-lg-3 ms-2">Consultants</h6>
    </a>

   

 



</div>

<div class="extraSidebar"></div>
