 @extends('main_body')
@section('main_section')



<nav class="navbar navbar-expand-lg navbar-dark bg-primary text-center " >
    <div class="container-fluid ">

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="font-size: 15px">
          <li class="nav-item " >
            <a class="nav-link active" aria-current="page" href="{{route('lead.index')}}">Index</a>
          </li>
          <li class="nav-item " >
            <a class="nav-link active" aria-current="page" href="{{route('lead.leads')}}">Create</a>
          </li>
        </ul>

    </div>
</nav>

<section class="h-100 h-custom" >
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-8 col-xl-6">
          <div class="card rounded-3">


            <div class="card-body p-4 p-md-5">

 <div class="container-fluid " >
    <div class="row py-5 ">

        <div class="col-md-12 text-center">
       <form class="form-inline" action="{{ route('store') }}" method="POST">
      @csrf

        <div class="m-10 ">
            <label for="exampleFormControlInput1" class="required form-label">Name</label>
            <input type="text" name="name" class="form-control "  placeholder="Enter Name"/>
          <span class="text-danger">
            @error('name')
                {{$message}}
            @enderror
          </span>
           </div>


                 <div class="m-10">
                    <label for="exampleFormControlInput1" class="required form-label">Phone</label>
                    <input type="text" name="phone" class="form-control " placeholder="Enter Phone"/>
                    <span class="text-danger">
                        @error('phone')
                            {{$message}}
                        @enderror
                      </span>
                </div>


                    <div class="m-10">
                                <label for="exampleFormControlInput1" class="required form-label">Date</label>
                                <input type="date" name="date" class="form-control " placeholder="Enter Date"/>
                                <span class="text-danger">
                                    @error('date')
                                        {{$message}}
                                    @enderror
                                  </span>
                        </div>
                        <div class="m-10">
                        <label for="exampleFormControlInput1" class="required form-label">Purpose</label>
                        <input type="text" name="purpose" class="form-control " placeholder="Enter Purpose"/>
                        <span class="text-danger">
                            @error('purpose')
                                {{$message}}
                            @enderror
                          </span>
                        </div>

                            <div class=" m-10 ">
                                <label for="exampleFormControlInput1" class="required form-label">Status</label>
                                <select type="text" class="form-control  " style="padding: 1%" name="lead_status" id="exampleFormControlInput1">
                                  <option value="1" >Active</option>
                                  <option value="1">Started</option>
                                  <option value="3" >Runnung</option>
                                  <option value="4" >Completed</option>

                                </select>
                              </div>

                            <div class="m-10 ">
                                <label for="exampleFormControlInput1" class="required form-label ">refrel</label>
                                <select  type="text" name="refrel"  class="form-control" style="padding: 1%" id="sel1">
                                    @forelse($refrels as $refrel)
                                  <option value="{{$refrel->id}}">{{$refrel->name}}</option>
                                  @empty
                                  <option> No  Refrel Found</option>
                                  @endforelse
                                  </select>
                              </div>
                           </div>





                            <div class="form-group row">
                                <div class="col-lg-8 ml-auto">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
   <script>
    $(document).ready(function () {
    $('#form').validate({ // initialize the plugin
        rules: {

            number: {
                required: true,
                digits: true

            },
        }
    })
 } );
 </script>
@endsection
{{-- <section class="h-100 h-custom" style="background-color: #8fc4b7;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-8 col-xl-6">
          <div class="card rounded-3">

              class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
              alt="Sample photo">
            <div class="card-body p-4 p-md-5">
              <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Registration Info</h3>

              <form class="px-md-2"> --}}


