@extends('main_body')
@section('main_section')

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Leads_Contents</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('course.course_index')}}">index</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('course.courses')}}">create</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
</nav>

<table class="table table-bordered">
    <tr class="pl-4">
        {{-- <th>no</th> --}}
        <th class="text-center"> <strong class="text-primary">Course Name</strong></th>
        <th class="text-center"> <strong class="text-primary">Course Duration </strong></th>
        <th class="text-center"> <strong class="text-primary">course fee</strong></th>
        <th class="text-center"> <strong class="text-primary">Status</strong></th>


        {{-- <th class="text-center">Action</th> --}}
    </tr>
     @foreach($data as $data)
            <tr >
            {{-- <th scope="row">{{$loop->iteration}}</th> --}}
            <td class="text-center">{{$data->course_name}}</td>
            <td class="text-center">{{$data->course_duration}}</td>
            <td class="text-center">{{$data->course_fee}}</td>
            <td class="text-center">{{$data->course_status}}</td>





                <td>
                    {{-- <form action="" method="POST">

                        {{-- <a href="{{route('lead-edit',$data->id)}}" title="show">
                            <i class=" btn  btn-success  fa-lg"> edit</i>
                        </a>

                        <a href="{{route('lead-delete',$data->id)}}">
                            <i class="btn btn-danger  fa-lg"> delete</i>
                        </a>

                        @csrf
                        @method('DELETE')


                    </form> --}}
                </td>
            </tr>
        @endforeach
 </table>
@endsection
