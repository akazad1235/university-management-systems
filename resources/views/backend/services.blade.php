{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('assets/css/theme.min.css') }}" rel="stylesheet" id="style-default">
</head>
<body>
    <button class="btn btn-info">Service</button>
        <div class="col-md-12">
            <ul class="list-group">
                @foreach ($services as $service)
                    <a href="{{ route('service.dashboard',[ $service->slug, base64_encode($service->id)]) }}" class="list-group-item">{{ $service->name }}</a>
                @endforeach
            </ul>
        </div>

    <script src="{{asset('vendors/popper/popper.min.js')}}"></script>
    <script src="{{ asset('vendors/bootstrap/bootstrap.min.js') }}"></script>
</body>
</html> --}}

@extends('layout.app')
@section('title', 'Projects')
@include('layout.navbar')

@section('mainContent')
    <div class="row pb-4 pt-2">
        <div class="col-12 text-end btn-lg">
            <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#create-project-modal">Create
                Project</button>
        </div>
    </div>

    {{-- Add Project Modal --}}
    <div class="modal fade" id="create-project-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
            <div class="modal-content position-relative">
                <div class="position-absolute top-0 end-0 mt-2 me-2 z-1">
                    <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                    <div class="rounded-top-3 py-3 ps-4 pe-6 bg-light">
                        <h4 class="mb-1" id="modalExampleDemoLabel">Create a New Project </h4>
                    </div>
                    <div class="p-4 pb-0">
                        <form>
                            <div class="mb-2">
                                <label class="col-form-label" for="recipient-name">Project Name</label>
                                <input class="form-control" id="recipient-name" type="text" />
                            </div>
                            <div class="mb-2">
                                <label class="col-form-label" for="recipient-name">Project Description</label>
                                <input class="form-control" id="recipient-name" type="text" />
                            </div>

                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary" type="button">Create </button>
                </div>
            </div>
        </div>
    </div>


    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="active-project-tab" data-bs-toggle="tab" href="#tab-active-project"
                role="tab" aria-controls="tab-home" aria-selected="true">Active Project</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#tab-inactive-project" role="tab"
                aria-controls="tab-profile" aria-selected="false">Inactive Project</a>
        </li>

    </ul>
    <div class="tab-content border border-top-0 p-3" id="myTabContent">
        <div class="tab-pane fade show active" id="tab-active-project" role="tabpanel" aria-labelledby="home-tab">
            <div class="row" data-bs-theme="light">
                @foreach ($services as $service)
                    <div class="col-12 mb-4">
                        <div class="card text-white bg-success">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <a
                                            href="{{ route('service.dashboard', [$service->slug, base64_encode($service->id)]) }}">
                                            <div class="card-title">{{ $service->name }}</div>
                                        </a>
                                        <p class="card-text">Demo project description</p>
                                    </div>
                                    <div class="col-md-4 text-end">
                                        <button class="btn btn-danger">Edit</button>
                                        <button class="btn btn-danger">Inactive</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
        <div class="tab-pane fade" id="tab-inactive-project" role="tabpanel" aria-labelledby="profile-tab">
            <h1>Inactive project</h1>

        </div>
    </div>

@endsection
