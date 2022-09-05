@extends('main_body')
@section('main_section')

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('refrel.referal')}}">Refrel <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('refrel.refrel_create')}}">create</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
<table class="table table-bordered">
    <tr class="pl-4">
        {{-- <th>no</th> --}}
        <th class="text-center"> <strong class="text-primary">Name</strong></th>
        <th class="text-center"> <strong class="text-primary">Phone </strong></th>
        <th class="text-center"> <strong class="text-primary">Balance</strong></th>
        <th class="text-center"> <strong class="text-primary">Status</strong></th>


        {{-- <th class="text-center">Action</th> --}}
    </tr>
     @foreach($data as $data)
            <tr >
            {{-- <th scope="row">{{$loop->iteration}}</th> --}}
            <td class="text-center">{{$data->name}}</td>
            <td class="text-center">{{$data->phone}}</td>
            <td class="text-center">{{$data->balance}}</td>
            <td class="text-center">{{$data->status}}</td>





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
