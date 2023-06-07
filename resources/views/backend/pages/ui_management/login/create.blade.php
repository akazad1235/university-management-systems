
@extends('layout.app')
@section('title', 'login UI Setting')
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
                <form action="" method="post" id="form">
                    <div class="modal-body p-0">
                        <div class="rounded-top-3 py-3 ps-4 pe-6 bg-light">
                            <h4 class="mb-1" id="modalExampleDemoLabel"> Create login UI  </h4>
                        </div>
                        <input type="hidden" value="0" id="project_id">
                        <div class="p-4 pb-0">
                            <div class="row">
                                <div class="col-md-6"></div>
                            </div>
                            <div class="mb-2">
                                <label class="col-form-label" for="title">Title</label>
                                <input class="form-control" id="title" name="title" type="text" placeholder="title" />
                            </div>
                            <div class="mb-2">
                                <label class="col-form-label" for="label_name">Label Name</label>
                                <input class="form-control" id="label_name" name="label_name" type="text" placeholder="label name"/>
                            </div>
                            <div class="mb-2">
                                <label class="col-form-label" for="label_password">Label Password</label>
                                <input class="form-control" id="label_password" name="label_password" type="text" placeholder="password label"/>
                            </div>
                            <div class="mb-2">
                                <label class="col-form-label" for="login_btn">Login Button Name</label>
                                <input class="form-control" id="login_btn" name="login_btn" type="text" placeholder="login button name"/>
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
        <!-- ***** active tab ***** -->
        <div class="tab-pane fade show active" id="tab-active-project" role="tabpanel" aria-labelledby="home-tab">
            <div class="row" data-bs-theme="light">
                    <div class="col-12 mb-4">
                        <div class="card text-white bg-success">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <a href="">
                                            <div class="card-title">sdfdsfsdf</div>
                                        </a>
                                        <p class="card-text">desctiogkldk</p>
                                    </div>
                                    @hasrole('admin|super-admin')
                                    <div class="col-md-4 text-end">
                                        <button class="btn btn-warning update-project" type="button" data-bs-toggle="modal" data-bs-target="#create-project-modal"
                                        >
                                            {{ __('static_data.project.editBtn') }}
                                        </button>
                                        <a class="btn btn-danger" onclick="return confirm('Are you sure in active the project')" href="">{{ __('static_data.project.inactiveBtn') }}</a>
                                    </div>
                                    @endhasrole
                                </div>

                            </div>
                        </div>
                    </div>
            </div>

        </div>
        {{--        inactive tab--}}
        <div class="tab-pane fade" id="tab-inactive-project" role="tabpanel" aria-labelledby="profile-tab">
            <div class="row" data-bs-theme="light">

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
