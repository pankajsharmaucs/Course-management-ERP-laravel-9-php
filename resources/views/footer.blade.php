    
<script>
    $('.bar1').click(function(){
        if($('.sidebarBox').css("margin-left")=="0px"){
            $('.sidebarBox').css({"margin-left":"-100%"})
        }else{
            $('.sidebarBox').css({"margin-left":"0px"})
        }
    })

    $('.extraSidebar').click(function(){
            $('.sidebarBox').css({"margin-left":"-100%"})
    })

    function showOption(n){
        if($('#innerListBox'+n).css("display")=="block"){
            $('.innerListBox').css({"display":"none"})
            $('#innerListBox'+n).css({"display":"none"})
        }else{
            $('.innerListBox').css({"display":"none"})
            $('#innerListBox'+n).css({"display":"block"}).slideIn();
        }
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>




@php
     use Illuminate\Support\Facades\Route;
     $currentPath= Route::getFacadeRoot()->current()->uri();
 @endphp

 {{-- <script>

    let url="<?= $currentPath ?>";
    if(url=="dashboard"){
        $('.navigation').removeClass('active_nav');
        $('.dashboard').addClass("active_nav");
    }else(url=="dashboard"){

    }
 </script> --}}


<div class="footer text-center py-3 fixed-bottom bg-white shadow" style="font-size: 12px" >
    Copyright &copy; {{date("Y")}} &mdash; Designed by <a class="text-primary" href="https://3sitservices.com/">3S IT Services</a>
</div>


@include("models")


</div>
</div>



</body>
</html>