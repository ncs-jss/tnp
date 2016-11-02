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

<!-- 
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
        -->


<!-- 
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
    -->
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>All Students Data</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            
                        </div>
                    </div>
                    <div class="ibox-content">

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover dataTables-example" >
                                <thead>
                                    <tr>
                                        <th>Roll Number</th>
                                        <th>Name</th>
                                        <th>E-mail</th>
                                        <th>Course</th>
                                        <th>Branch</th>
                                        <th>X Marks</th>
                                        <th>XII Marks</th>
                                        <th>Sem1</th>
                                        <th>Sem2</th>
                                        <th>Sem3</th>
                                        <th>Sem4</th>
                                        <th>Sem5</th>
                                        <th>Sem6</th>
                                        <th>Sem7</th>
                                        <th>Sem8</th>
                                        <th>Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($students as $st)
                                     <tr class="gradeA">
                                        <td>{{$st->rollno}}</td>
                                        <td>{{$st->name}}</td>
                                        <td>{{$st->email}}</td>
                                        <td>{{$st->course}}</td>
                                        <td>{{$st->branch}}</td>
                                        <td class="center">{{$st->marks->Xmarks}}</td>
                                        <td class="center">{{$st->marks->XIImarks}}</td>
                                        <td class="center">{{$st->marks->sem1}}</td>
                                        <td class="center">{{$st->marks->sem2}}</td>
                                        <td class="center">{{$st->marks->sem3}}</td>
                                        <td class="center">{{$st->marks->sem4}}</td>
                                        <td class="center">{{$st->marks->sem5}}</td>
                                        <td class="center">{{$st->marks->sem6}}</td>
                                        <td class="center">{{$st->marks->sem7}}</td>
                                        <td class="center">{{$st->marks->sem8}}</td>
                                        <td class="center"><a type="button" href = "{{URL::route('students.edit',$st->id)}}" vclass="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a></td>

                                    </tr>
                                    @endforeach
                                    </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Roll Number</th>
                                        <th>Name</th>
                                        <th>E-mail</th>
                                        <th>Course</th>
                                        <th>Branch</th>
                                        <th>X Marks</th>
                                        <th>XII Marks</th>
                                        <th>Sem1</th>
                                        <th>Sem2</th>
                                        <th>Sem3</th>
                                        <th>Sem4</th>
                                        <th>Sem5</th>
                                        <th>Sem6</th>
                                        <th>Sem7</th>
                                        <th>Sem8</th>
                                        <th>Edit</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>

                    </div>
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
<script src="{{URL::asset('js/plugins/dataTables/datatables.min.js')}}"></script>

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

<!-- Page-Level Scripts -->
<script>
$(document).ready(function(){
    $('.dataTables-example').DataTable({
        dom: '<"html5buttons"B>lTfgitp',
        buttons: [
        { extend: 'copy'},
        {extend: 'csv'},
        {extend: 'excel', title: 'ExampleFile'},
        {extend: 'pdf', title: 'ExampleFile'},

        {extend: 'print',
        customize: function (win){
            $(win.document.body).addClass('white-bg');
            $(win.document.body).css('font-size', '10px');

            $(win.document.body).find('table')
            .addClass('compact')
            .css('font-size', 'inherit');
        }
    }
    ]

});

 


});

function fnClickAddRow() {
    $('#editable').dataTable().fnAddData( [
        "Custom row",
        "New row",
        "New row",
        "New row",
        "New row" ] );

}
</script>
</body>
</html>
