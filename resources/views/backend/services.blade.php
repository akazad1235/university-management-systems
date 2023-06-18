
@extends('layout.app')
@section('title', 'Projects')
@include('layout.navbar')

@section('mainContent')
    <div class="row pb-4 pt-2">
        <div class="col-12 text-end btn-lg">
            <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#create-project-modal"> {{ __('ui/button.ADD_BUTTON') }}</button>
        </div>
    </div>

    {{-- Add Project Modal --}}
    <div class="modal fade" id="create-project-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content position-relative">
                <div class="position-absolute top-0 end-0 mt-2 me-2 z-1">
                    <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{route('project.store')}}" method="post" id="form">
                    @csrf
                    <div class="modal-body p-0">
                        <div class="rounded-top-3 py-3 ps-4 pe-6 bg-light">
                            <h4 class="mb-1" id="modalExampleDemoLabel"> title  </h4>
                        </div>
                        <input type="hidden" value="0" id="project_id">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="p-4 pb-0 border">
                                    <p class="text-center">Japan</p>
                                    <div class="mb-2">
                                        <label class="col-form-label" for="recipient-name">{{ __('ui/project.PROJECT_NAME.label') }}</label>
                                        <input class="form-control" id="name" name="name_ja" type="text" placeholder="{{ __('ui/project.PROJECT_NAME.placeholder') }}" />
                                    </div>
                                    <div class="mb-2">
                                        <label class="col-form-label" for="recipient-name">description</label>
                                        <textarea class="form-control" id="description" name="description_ja"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-4 pb-0 border">
                                    <p class="text-center">English</p>
                                    <div class="mb-2">
                                        <label class="col-form-label" for="recipient-name">{{ __('ui/project.PROJECT_NAME.label') }}</label>
                                        <input class="form-control" id="name" name="name_en" type="text" placeholder="{{ __('ui/project.PROJECT_NAME.placeholder') }}" />
                                    </div>
                                    <div class="mb-2">
                                        <label class="col-form-label" for="recipient-name">description</label>
                                        <textarea class="form-control" id="description" name="description_en"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-me-12">
                                <div class="mb-2">
                                    <label class="col-form-label" for="recipient-name">{{ __('ui/project.PROJECT_EMAIL.label') }}</label>
                                    <input class="form-control" id="email" name="email" type="text" placeholder="{{ __('ui/project.PROJECT_EMAIL.placeholder') }}" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-2">
                                        <label class="col-form-label" for="recipient-name">start date</label>
                                        <input type="date" class="form-control" id="start_date" name="start_date">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-2">
                                        <label class="col-form-label" for="recipient-name">end date</label>
                                        <input type="date" class="form-control" id="end_date" name="end_date">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">{{ __('ui/button.CANCEL') }}</button>
                        <button class="btn btn-primary" type="submit" id="submit">{{ __('ui/button.SUBMIT') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="active-project-tab" data-bs-toggle="tab" href="#tab-active-project"
                role="tab" aria-controls="tab-home" aria-selected="true">{{ __('ui/button.ACTIVE_TAB') }}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#tab-inactive-project" role="tab"
                aria-controls="tab-profile" aria-selected="false">{{ __('ui/button.INACTIVE_TAB') }}</a>
        </li>

    </ul>
    <div class="tab-content border border-top-0 p-3" id="myTabContent">
        <!-- ***** active tab ***** -->
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
                                            <div class="card-title">{{session()->get('locale') == 'ja' ?  $service->name_ja : $service->name_en}}</div>
                                        </a>
                                        <p class="card-text">
                                            @if (session()->get('locale') == 'ja')
                                                {{strlen($service->description_ja) > 60 ? substr($service->description_ja, 0 , 60).'...':substr($service->description_ja, 0 , 60)}}
                                            @else
                                                {{strlen($service->description_en) > 60 ? substr($service->description_en, 0 , 60).'...':substr($service->description_en, 0 , 60)}}
                                            @endif

                                        </p>
                                    </div>
                                    @hasrole('admin|super-admin')
                                    <div class="col-md-4 text-end">
                                        <button class="btn btn-warning update-project" type="button" data-bs-toggle="modal" data-bs-target="#create-project-modal"
                                        data-id="{{ $service->id}}"
                                        data-name="{{ $service->name_ja}}"
                                        data-email="{{ $service->email}}"
                                        data-description="{{ $service->description_ja}}"
                                        data-start_date="{{ date("Y-m-d", strtotime($service->start_date))}}"
                                        data-end_date="{{ date("Y-m-d", strtotime($service->end_date)) }}"
                                        >
                                            {{ __('ui/button.EDIT_BUTTON') }}
                                        </button>
                                        <a class="btn btn-danger" onclick="return confirm('Are you sure in active the project')" href="{{ route('project.inactive', base64_encode($service->id))  }}">{{ __('ui/button.INACTIVE') }}</a>
                                    </div>
                                    @endhasrole
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
{{--        inactive tab--}}
        <div class="tab-pane fade" id="tab-inactive-project" role="tabpanel" aria-labelledby="profile-tab">
            <div class="row" data-bs-theme="light">
                @foreach ($inactive as $project)
                    <div class="col-12 mb-4">
                        <div class="card text-white bg-success">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <p>
                                            <div class="card-title">{{ $project->name_ja }}</div>
                                        </p>
                                        <p class="card-text">{{ strlen($project->description) > 60 ? substr($project->description, 0 , 60).'...':substr($project->description, 0 , 60) }}</p>
                                    </div>
                                    @hasrole('admin|super-admin')
                                    <div class="col-md-4 text-end">
                                        <a class="btn btn-danger" onclick="return confirm('Are you sure in active the project')" href="{{ route('project.inactive', base64_encode($project->id))  }}">Inactive</a>
                                    </div>
                                    @endhasrole
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

                console.log('teeee')
            })
        })

        $("form").submit(function (e){
            e.preventDefault();

            let ajaxCallable = true;
            let data = {
                'name_ja' : $("input[name='name_ja']",this).val(),
                'name_en' : $("input[name='name_en']",this).val(),
                'email' : $("input[name='email']",this).val(),
                'description_ja' : $("textarea[name='description_ja']",this).val(),
                'description_en' : $("textarea[name='description_en']",this).val(),
                'start_date' : $("input[name='start_date']",this).val(),
                'end_date' : $("input[name='end_date']",this).val(),
            }
            console.log(data)
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
                        data: data,
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
                        data: data,
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
            toastr.success('We do have the Kapua suite available.', '', {timeOut: 2000, progressBar: true})
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
