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
            <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#create-project-modal">{{ __('static_data.project.projectCreate')  }}</button>
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
                <form action="{{route('project.store')}}" method="post" id="form">
                    @csrf
                    <div class="modal-body p-0">
                        <div class="rounded-top-3 py-3 ps-4 pe-6 bg-light">
                            <h4 class="mb-1" id="modalExampleDemoLabel"> {{ __('static_data.project.modal.title') }}  </h4>
                        </div>
                        <input type="text" value="0" id="project_id">
                        <div class="p-4 pb-0">
                                <div class="row">
                                    <div class="col-md-6"></div>
                                </div>
                                <div class="mb-2">
                                    <label class="col-form-label" for="recipient-name">{{ __('static_data.project.modal.inputName') }}</label>
                                    <input class="form-control" id="name" name="name" type="text" />
                                </div>
                                <div class="mb-2">
                                    <label class="col-form-label" for="recipient-name">{{ __('static_data.project.modal.inputEmail') }}</label>
                                    <input class="form-control" id="email" name="email" type="text" />
                                </div>
                                <div class="mb-2">
                                    <label class="col-form-label" for="recipient-name">{{ __('static_data.project.modal.inputDescription') }}</label>
                                    <textarea class="form-control" id="description" name="description"></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-2">
                                            <label class="col-form-label" for="recipient-name">{{ __('static_data.project.modal.inputStartDate') }}</label>
                                            <input type="date" class="form-control" id="start_date" name="start_date">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-2">
                                            <label class="col-form-label" for="recipient-name">{{ __('static_data.project.modal.inputEndDate') }}</label>
                                            <input type="date" class="form-control" id="end_date" name="end_date">
                                        </div>
                                    </div>
                                </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">{{ __('static_data.project.modal.cancelBtn') }}</button>
                        <button class="btn btn-primary" type="submit" id="submit">{{ __('static_data.project.modal.SubmitBtn') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="active-project-tab" data-bs-toggle="tab" href="#tab-active-project"
                role="tab" aria-controls="tab-home" aria-selected="true">{{ __('static_data.project.activeTab') }} {{session()->get('locale')}}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#tab-inactive-project" role="tab"
                aria-controls="tab-profile" aria-selected="false">{{ __('static_data.project.inactiveTab') }} </a>
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
                                        <p class="card-text">{{ strlen($service->description) > 60 ? substr($service->description, 0 , 60).'...':substr($service->description, 0 , 60) }}</p>
                                    </div>
                                    <div class="col-md-4 text-end">
                                        <button class="btn btn-warning update-project" type="button" data-bs-toggle="modal" data-bs-target="#create-project-modal"
                                        data-id="{{ $service->id}}"
                                        data-name="{{ $service->name}}"
                                        data-email="{{ $service->email}}"
                                        data-description="{{ $service->description}}"
                                        data-start_date="{{ date("Y-m-d", strtotime($service->start_date))}}"
                                        data-end_date="{{ date("Y-m-d", strtotime($service->end_date)) }}"
                                        >
                                            {{ __('static_data.project.editBtn') }}
                                        </button>
                                        <a class="btn btn-danger" onclick="return confirm('Are you sure in active the project')" href="{{ route('project.inactive', base64_encode($service->id))  }}">{{ __('static_data.project.inactiveBtn') }}</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
        <div class="tab-pane fade" id="tab-inactive-project" role="tabpanel" aria-labelledby="profile-tab">
            <div class="row" data-bs-theme="light">
                @foreach ($inactive as $project)
                    <div class="col-12 mb-4">
                        <div class="card text-white bg-success">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <p>
                                            <div class="card-title">{{ $project->name }}</div>
                                        </p>
                                        <p class="card-text">{{ strlen($project->description) > 60 ? substr($project->description, 0 , 60).'...':substr($project->description, 0 , 60) }}</p>
                                    </div>
                                    <div class="col-md-4 text-end">
                                        <a class="btn btn-danger" onclick="return confirm('Are you sure in active the project')" href="{{ route('project.inactive', base64_encode($project->id))  }}">{{ __('static_data.project.inactiveBtn') }}</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @section('script')
        <script>
        let inputs =  $("#form").find('input:input');
        inputs.each(function (){
            $(this).on('click', function (){
            })
        })

        $("form").submit(function (e){
            e.preventDefault();
            let name =  $("input[name='name']",this).val();
            let email =  $("input[name='email']",this).val();
            let description =  $("textarea[name='description']",this).val();
            let start_date =  $("input[name='start_date']",this).val();
            let end_date =  $("input[name='end_date']",this).val();
            let ajaxCallable = true;
            inputs.each(function (){
                if ($.trim($(this).val()) === '') {
                    $(this).attr('class', 'form-control is-invalid')
                   ajaxCallable = false;
                }
                if ($.trim($(this).val()) !== '') {
                    $(this).attr('class', 'form-control')
                    // alert('please input item name or amount');
                }
            })
            if(ajaxCallable == true){
                if($('#project_id').val() > 0){
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: "{{route('project.update')}}",
                        type: "post",
                        data: {
                            _token: '{{ csrf_token() }}',
                            id : $('#project_id').val(),
                            name : name,
                            email : email,
                            description : description,
                            start_date : start_date,
                            end_date : end_date
                        },
                        success: function (data) {
                            if(data.status === 200){
                                callSweetAlert(data.msg, 'success')//call sweetalert from app pages
                                setTimeout(() => { //after success saved data then reload page
                                    location.reload()
                                }, "2000");
                            }else{
                                callSweetAlert(data.msg, 'error')
                            }
                        },
                    });
                }else{

                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: "{{route('project.store')}}",
                        type: "post",
                        data: {
                            _token: '{{ csrf_token() }}',
                            name : name,
                            email : email,
                            description : description,
                            start_date : start_date,
                            end_date : end_date
                        },
                        success: function (data) {
                            if(data.status === 200){
                                callSweetAlert(data.msg, 'success')//call sweetalert from app pages
                                setTimeout(() => { //after success saved data then reload page
                                    location.reload()
                                }, "2000");
                            }else{
                                callSweetAlert(data.msg, 'error')
                            }

                        },
                        error: function (error){
                            callSweetAlert('something wrong!', 'error')
                        }
                    });
                }
            }
        })
        //update data
        $('.update-project').on('click', function (e){
            let id = $(this).data('id');
            let name = $(this).data('name');
            let email = $(this).data('email');
            let description = $(this).data('description');
            let start_date = $(this).data('start_date');
            let end_date = $(this).data('end_date');

            $('#project_id').val(id)
            $('#name').val(name)
            $('#email').val(email)
            $('#description').val(description)
            $('#start_date').val(start_date)
            $('#end_date').val(end_date)


        })

    </script>
    @endsection
@endsection
