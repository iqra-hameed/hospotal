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
            <a class="nav-link active" aria-current="page" href="{{ route('refrel.referal')}}">index</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('refrel.refrel_create')}}">create</a>
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
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
            <div class="card">
                <div class="card-body">
                    <div class="form-validation">
                        <form action="{{ route('save') }}" method="POST">

                            @csrf
                            <div class="mb-10">
                                <label for="exampleFormControlInput1" class="required form-label">Name</label>
                                <input type="text" name="name" class="form-control form-control-solid"  placeholder="Enter Name"/>
                            </div>
                            <div class="mb-10">
                                <label for="exampleFormControlInput1" class="required form-label">Phone</label>
                                <input type="text" name="phone" class="form-control form-control-solid" placeholder="Enter Phone"/>
                            </div>
                            <div class="mb-10">
                                <label for="exampleFormControlInput1" class="required form-label">balance</label>
                                <input type="text" name="balance" class="form-control form-control-solid" placeholder="Enter balance"/>
                            </div>

                            <div class=" mb-10 form-group">
                                <label for="exampleFormControlInput1" class="required form-label px-4">Status</label>
                                <select class="form-control form-control-solid px-auto" name="status" id="exampleFormControlInput1">
                                  <option value="1" >Active</option>
                                  <option value="2">Started</option>
                                  <option value="3" >Runnung</option>
                                  <option value="4" >Completed</option>

                                </select>
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

@endsection
