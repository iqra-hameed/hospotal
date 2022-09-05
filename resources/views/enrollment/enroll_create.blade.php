@extends('main_body')
@section('main_section')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Enrollment_Contents</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                            href="{{ route('enrollment.enrollments') }}">index</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('enrollment.enroll_create') }}">Enroll-create</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
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
                            <form action="{{ route('saving') }}" method="POST">
                                {{-- <td>{{ $user->name }}</td> --}}
                                @csrf
                                <div class="mb-10 form-group">
                                    <label for="exampleFormControlInput1" class="required form-label px-4">lead_id</label>
                                    <select name="lead_id" class="form-control form-control-solid " style="padding: 1%"
                                        id="sel1">
                                        @forelse($leads as $lead)
                                            <option value="{{ $lead->id }}">{{ $lead->name }}</option>
                                        @empty
                                            <option> No leads Found</option>
                                        @endforelse
                                    </select>
                                </div>
                                <div class="mb-10">
                                    <label for="exampleFormControlInput1" class="required form-label">father_name</label>
                                    <input type="text" name="father_name" class="form-control form-control-solid"
                                        placeholder="Enter Father Name" />
                                </div>
                                <div class="mb-10 form-group">
                                    <label for="exampleFormControlInput1" class="required form-label px-4">Course</label>
                                    <select name="course" class="form-control form-control-solid " style="padding: 1%"
                                        id="sel1">
                                        @forelse($courses as $course)
                                            <option value="{{ $course->id }}">{{ $course->course_name }}</option>
                                        @empty
                                            <option> No Couses Found</option>
                                        @endforelse
                                    </select>
                                </div>
                                <div class="mb-10">
                                    <label for="exampleFormControlInput1" class="required form-label">Discount</label>
                                    <input type="text" name="discount" class="form-control form-control-solid"
                                        placeholder="Enter Discount" />
                                </div>
                                <div class=" mb-10 form-group">
                                    <label for="exampleFormControlInput1"
                                        class="required form-label px-4">Installments</label>
                                    <select class="form-control form-control-solid " style="padding:1%" name="installments"
                                        id="exampleFormControlInput1">
                                        <option value="1">fullpay</option>
                                        <option value="2">half</option>
                                        <option value="3">2 installments</option>


                                    </select>

                                </div>
                                <div class=" mb-10 form-group">
                                    <label for="exampleFormControlInput1" class="required form-label px-4">Course
                                        Status</label>
                                    <select class="form-control form-control-solid " style="padding:1%"
                                        name="course_status" id="exampleFormControlInput1">
                                        <option value="1">Active</option>
                                        <option value="2">Started</option>
                                        <option value="3">Runnung</option>
                                        <option value="4">Completed</option>

                                    </select>
                                </div>
                                <div class="mb-10">
                                    <label for="exampleFormControlInput1"
                                        class="required form-label">Admission_date</label>
                                    <input type="date" name="admission_date" class="form-control form-control-solid"
                                        placeholder="Enter Admission_date" />
                                </div>
                                <div class="mb-10">
                                    <label for="exampleFormControlInput1" class="required form-label">Fee_date</label>
                                    <input type="date" name="fee_date" class="form-control form-control-solid"
                                        placeholder="Enter Fee_date" />
                                </div>
                                <div class=" mb-10 form-group">
                                    <label for="exampleFormControlInput1" class="required form-label px-4">Status</label>
                                    <select class="form-control form-control-solid " style="padding:1%" name="status"
                                        id="exampleFormControlInput1">
                                        <option value="1">Active</option>
                                        <option value="2">Started</option>
                                        <option value="3">Runnung</option>
                                        <option value="4">Completed</option>

                                    </select>
                                </div>
                                <div class="mb-10 form-group">
                                    <label for="exampleFormControlInput1" class="required form-label px-4">refrel</label>
                                    <select name="refrel" class="form-control form-control-solid " style="padding: 1%"
                                        id="sel1">
                                        @forelse($refrels as $refrel)
                                            <option value="{{ $refrel->id }}">{{ $refrel->name }}</option>
                                        @empty
                                            <option> No Refrel Found</option>
                                        @endforelse
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

                                <div class="mb-10 form-group">
                                    <label for="exampleFormControlInput1" class="required form-label px-4">Batch
                                        id</label>
                                    <select name="batch_id" class="form-control form-control-solid " style="padding: 1%"
                                        id="sel1">
                                        @forelse($batches as $batch)
                                            <option value="{{ $batch->id }}">{{ $batch->name }}</option>
                                        @empty
                                            <option> No Batch Found</option>
                                        @endforelse
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
