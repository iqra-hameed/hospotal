@extends('main_body')
@section('main_section')
    <div class="container panel panel-default ">
        <div class="row">
            <div class="col-md-12">
                <h2 class="panel-heading p-4 text-center">Enrollment Forum</h2>


                <form action="{{ route('data-save') }}" method="POST">
                    @csrf

                    <div class="col-md-6" style="float: left">
                        <div class="form-group  row">
                            <label for="exampleFormControlInput1" class="required form-label">Select Lead</label>
                            <select class="form-control leads_show " id="lead-dropdown" name="lead_id" style="padding: 4px">
                                @foreach ($leads as $data)
                                    <option value="{{ $data->id }}"> {{ $data->name }} </option>
                                @endforeach
                            </select>

                            <p id="leaddata" class="form-control">

                            </p>
                            {{-- inline form line --}}
                            {{-- <label for="example-text-input" class="col-2 col-form-label">Text</label>
                            <div class="col-10">
                                <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
                            </div> --}}
                        </div>
                        <div class="mb-10">
                            <label for="exampleFormControlInput1" class="required form-label">father_name</label>
                            <input type="text" name="father_name" class="form-control "
                                placeholder="Enter Father Name" />
                        </div>
                        <div class=" mb-10 form-group">
                            <label for="exampleFormControlInput1" class="required form-label px-4">Course Status</label>
                            <select class="form-control " style="padding:1%" name="course_status"
                                id="exampleFormControlInput1">
                                <option value="1">Active</option>
                                <option value="2">Started</option>
                                <option value="3">Runnung</option>
                                <option value="4">Completed</option>

                            </select>
                        </div>
                        <div class="mb-10">
                            <label for="exampleFormControlInput1" class="required form-label">Admission_date</label>
                            <input type="date" name="admission_date" class="form-control "
                                placeholder="Enter Admission_date" />
                        </div>
                        <div class="mb-10">
                            <label for="exampleFormControlInput1" class="required form-label">Fee_date</label>
                            <input type="date" name="fee_date" class="form-control " placeholder="Enter Fee_date" />
                        </div>
                        <div class=" mb-10 form-group">
                            <label for="exampleFormControlInput1" class="required form-label px-4">Status</label>
                            <select class="form-control " style="padding:1%" name="status" id="exampleFormControlInput1">
                                <option value="1">Active</option>
                                <option value="2">Started</option>
                                <option value="3">Runnung</option>
                                <option value="4">Completed</option>

                            </select>
                        </div>
                    </div>

                    <div class="col-md-6 " style="float: right">
                        <div class="form-group ">

                            <label> select batch </label>
                            <select class="form-control leads_show" id="batch-dropdown" name="lead_id" style="padding: 1%">

                                @foreach ($batch as $data)
                                    <option value="{{ $data->id }}"> {{ $data->name }} </option>
                                @endforeach
                            </select>
                            <p id="batchdata" class="form-control"></p>
                        </div>
                    </div>
                    <div class="col-md-6 " style="float: right">
                        <div class="form-group ">
                            <label> select referal name </label>
                            <select class="form-control leads_show" id="refrel-dropdown" name="lead_id" style="padding: 1%">

                                @foreach ($refrel as $data)
                                    <option value="{{ $data->id }}"> {{ $data->name }} </option>
                                @endforeach
                            </select>
                            <label id="refreldata" class="form-control"></label>
                        </div>
                        <div class="mb-10">
                            <label for="exampleFormControlInput1" class="required form-label">Discount</label>
                            <input type="text" name="discount" class="form-control " placeholder="Enter Discount" />
                        </div>

                        <div class=" mb-10 form-group">
                            <label for="exampleFormControlInput1" class="required form-label px-4">Installments
                            </label>
                            <select class="form-select required form-label px-4" name="refrel_percentage"
                                for="exampleFormControlInput1"aria-label="Default select example">
                                <option selected class="form-control form-control-solid "style="padding:1%"
                                    id="exampleFormControlInput1">Enter installmets </option>
                                <option value="1">Full Pay</option>
                                <option value="2">half Pay</option>
                                <option value="3">2 Installments</option>
                            </select>
                        </div>
                        <div class=" mb-10 form-group">
                            <label for="exampleFormControlInput1" class="required form-label px-4">Refreal
                                percentage</label>
                            <select class="form-select required form-label px-4" name="refrel_percentage"
                                for="exampleFormControlInput1"aria-label="Default select example">
                                <option selected class="form-control form-control-solid "style="padding:1%"
                                    id="exampleFormControlInput1">Enter refreal percentage</option>
                                <option value="1">10%</option>
                                <option value="2">20%</option>
                                <option value="3">30%</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group text-center">
                        <button class="btn btn-success" id="submit">Submit</button>
                    </div>
                </form>


            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(document).ready(function() {
            $("#lead-dropdown").change(function() {
                let lead_id = $(this).val();
                $.ajax({
                    url: '/checkrecord',
                    type: 'post',
                    data: 'lead_id=' + lead_id + '&_token={{ csrf_token() }}',
                    success: function(result) {
                        $("#leaddata").html(result);
                    },
                    //      error:function({
                    // alert("issue");
                    //      });
                    error: function() {
                        alert("issue");
                    }
                });
            });
            $("#batch-dropdown").change(function() {
                let batch_id = $(this).val();
                $.ajax({
                    url: '/checkingrecord',
                    type: 'post',
                    data: 'batch_id=' + batch_id + '&_token={{ csrf_token() }}',
                    success: function(result) {
                        $("#batchdata").html(result);
                    },

                    error: function() {
                        alert("issue");
                    }
                });
            });

            $("#refrel-dropdown").change(function() {
                let refrel_id = $(this).val();
                $.ajax({
                    url: '/checkedrecord',
                    type: 'post',
                    data: 'refrel_id=' + refrel_id + '&_token={{ csrf_token() }}',
                    success: function(result) {
                        $("#refreldata").html(result);
                    },

                    error: function() {
                        alert("issue");
                    }
                });
            });
        });
    </script>
@endsection
