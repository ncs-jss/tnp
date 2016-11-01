<!DOCTYPE html>
<html>

<head>
    @include('common.header')
</head>

<body>
    <div id="wrapper">
        @include('common.leftnavigation')
        <div id="page-wrapper" class="gray-bg dashbard-1">
            @include('common.topnavigation')
            <div class="wrapper wrapper-content animated fadeIn">


               <div class="row">

                 <div class="col-lg-3">
                    <div class="widget style1 red-bg">
                        <div class="row">
                            <div class="col-xs-4 text-center">
                                <i class="fa fa-automobile fa-5x"></i>
                            </div>
                            <div class="col-xs-8 text-right">
                                <span> Total dealers added</span>

                                <h2 class="font-bold"></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="widget style1 navy-bg">
                        <div class="row">
                            <div class="col-xs-4 text-center" > 
                                <i class="fa fa-male fa-5x"></i>
                            </div>
                            <div class="col-xs-8 text-right">
                                <span>Registered Customers</span>
                                <h2 class="font-bold"></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="widget style1 lazur-bg">
                        <div class="row">
                            <div class="col-xs-4">
                                <i class="fa fa-inr fa-5x"></i>
                            </div>
                            <div class="col-xs-8 text-right">
                                <span>Total income</span>
                                <h2 class="font-bold"></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="widget style1 yellow-bg">
                        <div class="row">
                            <div class="col-xs-4">
                                <i class="fa fa-mobile fa-5x"></i>
                            </div>
                            <div class="col-xs-8 text-right">
                                <span>Total sale</span>
                                <h2 class="font-bold"></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            

            <div class="p-w-md m-t-sm">
                <div class="row">

                 
                    <div class="col-sm-4">
                    </div>
                    
                    <div class="col-sm-4 text-center">

                        


                        <table class="table small m-t-sm">
                            
                        </table>



                    </div>

                </div>



                <div class="wrapper wrapper-content animated fadeIn">
               

            </div>




            
        </div>


    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="wrapper wrapper-content">
                <div class="row">

                </div>
            </div>
            @include('common.footer')
        </div>
    </div>

</div>
</div>

@include('common.js')
@if(Session::has('success'))
<script>
$(document).ready(function() {
    setTimeout(function() {
        toastr.options = {
            closeButton: true,
            progressBar: true,
            showMethod: 'slideDown',
            timeOut: 4000
        };
        toastr.success("{{Session::get('success')}}");

    }, 1300);

});
</script>
@endif

@if(Session::has('failure'))
<script>
$(document).ready(function() {
    setTimeout(function() {
        toastr.options = {
            closeButton: true,
            progressBar: true,
            showMethod: 'slideDown',
            timeOut: 4000
        };
        toastr.error("{{Session::get('failure')}}");

    }, 1300);

});
</script>
@endif
<script src="js/plugins/footable/footable.all.min.js"></script>
<script>
$(document).ready(function() {

    $('.footable').footable();
    $('.footable2').footable();

});

</script>


</body>
</html>
