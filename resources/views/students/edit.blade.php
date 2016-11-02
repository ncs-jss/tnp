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
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Student Data </h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form method="post" class="form-horizontal" action = "{{URL::route('students.update',$student->id)}}">
                                {{csrf_field()}}
                                {{ method_field('PUT') }}
                                <div class="form-group"><label class="col-sm-2 control-label">Name</label>

                                    <div class="col-sm-10"><input type="text" placeholder="Name Of The Student" name = "name" value = "{{$student->name}}" class="form-control"></div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Roll Number</label>

                                    <div class="col-sm-10"><input type="text" value = "{{$student->rollno}}" placeholder="Roll Number Of The Student" name = "rollno" class="form-control"></div>
                                </div> 
                                <div class="form-group"><label class="col-sm-2 control-label">E-mail</label>

                                    <div class="col-sm-10"><input type="text" value = "{{$student->email}}" placeholder="E-mail Of The Student" name = "email" class="form-control"></div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Contact Number</label>

                                    <div class="col-sm-10"><input type="text" value = "{{$student->contact}}" placeholder="Contact Number Of The Student" name = "contact" class="form-control"></div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Course</label>

                                    <div class="col-sm-10"><input type="text" value = "{{$student->course}}" placeholder="Course Of The Student" name = "course" class="form-control"></div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Branch</label>

                                    <div class="col-sm-10"><input type="text" value = "{{$student->branch}}" placeholder="Branch Of The Student" name = "branch" class="form-control"></div>
                                </div>

                                <div class="form-group"><label class="col-sm-2 control-label">X<sup>th</sup> Marks Type</label>

                                    <div class="col-sm-10"><select class="form-control m-b" name="Xmarkstype">
                                        @if(!strcmp($studentMark->Xmarkstype,"PER"))
                                        <option value = "PER" selected = "selected">Percent (%)</option>
                                        <option value = "CGPA">CGPA</option>
                                        @else
                                        <option value = "PER" >Percent (%)</option>
                                        <option value = "CGPA" selected = "selected">CGPA</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">X<sup>th</sup> Marks</label>

                                <div class="col-sm-10"><input type="text" value = "{{$studentMark->Xmarks}}" placeholder="Marks Obtained in 10th Standard" name = "Xmarks" class="form-control"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">Is Student Diploma Holder?</label>
                                <div class="col-sm-10"><select id = "diploma" class="form-control m-b" onchange = "checkDiploma()" name="diploma">
                                    @if($studentMark->diploma == 1)
                                    <option value = "1" selected = "selected">Yes</option>
                                    <option value = "0">No</option>
                                    @else
                                    <option value = "1" >Yes</option>
                                    <option value = "0" selected = "selected">No</option>
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div id = "XIImarkstype" class="form-group"><label class="col-sm-2 control-label">XII<sup>th</sup> Marks Type</label>

                            <div class="col-sm-10"><select class="form-control m-b" name="XIImarkstype">
                                @if(!strcmp($studentMark->XIImarkstype,"PER"))
                                <option value = "PER" selected = "selected">Percent (%)</option>
                                <option value = "CGPA">CGPA</option>
                                @else
                                <option value = "PER" >Percent (%)</option>
                                <option value = "CGPA" selected = "selected">CGPA</option>
                                @endif
                            </select>
                        </div>
                    </div>
                    <div id = "XIImarks" class="form-group"><label class="col-sm-2 control-label">XII<sup>th</sup> Marks</label>

                        <div class="col-sm-10"><input type="text" value = "{{$studentMark->XIImarks}}" placeholder="Marks Obtained in 10+2th" name = "XIImarks" class="form-control"></div>
                    </div>


                    <div id = "diplomayr1" class="form-group"><label class="col-sm-2 control-label">Diploma 1<sup>st</sup> Year</label>

                        <div class="col-sm-10"><input type="text" value = "{{$studentMark->diplomayr1}}" placeholder="Marks Obtained in Diploma Year 1" name = "diplomayr1" class="form-control">
                            <span class="help-block m-b-none">In Percentage (%).</span>
                        </div>
                    </div>


                    <div id = "diplomayr2"  class="form-group"><label class="col-sm-2 control-label">Diploma 2<sup>nd</sup> Year</label>

                        <div class="col-sm-10"><input type="text" value = "{{$studentMark->diplomayr2}}" placeholder="Marks Obtained in Diploma Year 2" name = "diplomayr2" class="form-control">
                            <span class="help-block m-b-none">In Percentage (%).</span>
                        </div>
                    </div>
                    <div id = "sem1"  class="form-group"><label class="col-sm-2 control-label">1<sup>st</sup> Semester Marks</label>

                        <div class="col-sm-10"><input type="text" value = "{{$studentMark->sem1}}" placeholder="Marks Obtained in Semester 1" name = "sem1" class="form-control">
                            <span class="help-block m-b-none">In Percentage (%).</span>
                        </div>
                    </div>

                    <div  class="form-group"><label class="col-sm-2 control-label">2<sup>nd</sup> Semester Marks</label>

                        <div class="col-sm-10"><input type="text" value = "{{$studentMark->sem2}}" placeholder="Marks Obtained in Semester 2" name = "sem2" class="form-control">
                            <span class="help-block m-b-none">In Percentage (%).</span>
                        </div>
                    </div>
                    <div  class="form-group"><label class="col-sm-2 control-label">3<sup>rd</sup> Semester Marks</label>

                        <div class="col-sm-10"><input type="text" value = "{{$studentMark->sem3}}" placeholder="Marks Obtained in Semester 3" name = "sem3" class="form-control">
                            <span class="help-block m-b-none">In Percentage (%).</span>
                        </div>
                    </div>

                    <div  class="form-group"><label class="col-sm-2 control-label">4<sup>th</sup> Semester Marks</label>

                        <div class="col-sm-10"><input type="text" value = "{{$studentMark->sem4}}" placeholder="Marks Obtained in Semester 4" name = "sem4" class="form-control">
                            <span class="help-block m-b-none">In Percentage (%).</span>
                        </div>
                    </div>

                    <div  class="form-group"><label class="col-sm-2 control-label">5<sup>th</sup> Semester Marks</label>

                        <div class="col-sm-10"><input type="text" value = "{{$studentMark->sem5}}" placeholder="Marks Obtained in Semester 5" name = "sem5" class="form-control">
                            <span class="help-block m-b-none">In Percentage (%).</span>
                        </div>
                    </div>

                    <div  class="form-group"><label class="col-sm-2 control-label">6<sup>th</sup> Semester Marks</label>

                        <div class="col-sm-10"><input type="text" value = "{{$studentMark->sem6}}" placeholder="Marks Obtained in Semester 6" name = "sem6" class="form-control">
                            <span class="help-block m-b-none">In Percentage (%).</span>
                        </div>
                    </div>

                    <div  class="form-group"><label class="col-sm-2 control-label">7<sup>th</sup> Semester Marks</label>

                        <div class="col-sm-10"><input type="text" value = "{{$studentMark->sem7}}" placeholder="Marks Obtained in Semester 7" name = "sem7" class="form-control">
                            <span class="help-block m-b-none">In Percentage (%).</span>
                        </div>
                    </div>

                    <div  class="form-group"><label class="col-sm-2 control-label">8<sup>th</sup> Semester Marks</label>

                        <div class="col-sm-10"><input type="text" value = "{{$studentMark->sem8}}" placeholder="Marks Obtained in Semester 8" name = "sem8" class="form-control">
                            <span class="help-block m-b-none">In Percentage (%).</span>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-2">
                            <a class="btn btn-white" href = "{{URL::route('students.index')}}" type="submit">Cancel</a>
                            <button class="btn btn-primary" type="submit">Save changes</button>
                        </div>
                    </div>
                </form>
                <form method="post" class="form-horizontal" action = "{{URL::route('students.destroy',$student->id)}}">{{csrf_field()}}
                    {{ method_field('DELETE') }}
                    <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-2">
                            <button class="btn btn-danger" type="submit"><i class="fa fa-warning"></i> <span class="bold">Delete Record</span></button>
                        </div>
                    </div>
                </form>

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
<script src="{{URL::asset('js/plugins/footable/footable.all.min.js')}}"></script>
<script>
$(document).ready(function() {

    $('.footable').footable();
    $('.footable2').footable();

});

</script>
<script type="text/javascript">
function checkDiploma(){
    var diploma =  $('#diploma').val();
    if(diploma == 1){
        $('#diplomayr1').show();
        $('#diplomayr2').show();
        $('#XIImarkstype').hide();
        $('#XIImarks').hide();
        $('#sem1').hide();
    }
    else{
        $('#diplomayr1').hide();
        $('#diplomayr2').hide();
        $('#XIImarkstype').show();
        $('#XIImarks').show();
        $('#sem1').show();
    }
}

</script>
<script>
$(document).ready(function() {
    var diploma =  $('#diploma').val();
    if(diploma == 1){
        $('#diplomayr1').show();
        $('#diplomayr2').show();
        $('#XIImarkstype').hide();
        $('#XIImarks').hide();
        $('#sem1').hide();
    }
    else{
        $('#diplomayr1').hide();
        $('#diplomayr2').hide();
        $('#XIImarkstype').show();
        $('#XIImarks').show();
        $('#sem1').show();
    }

});

</script>



</body>
</html>
