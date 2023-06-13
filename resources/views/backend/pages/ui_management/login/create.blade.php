
@extends('layout.app')
@section('title', 'login UI Setting')
@include('layout.navbar')

@section('mainContent')
    <div class="row pb-4 pt-2">
        <div class="col-12 text-end btn-lg">
            <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#ui-login-modal">{{ __('static_data.project.projectCreate')  }}</button>
        </div>
    </div>

    <!--***** login ui Modal *****-->
    <div class="modal fade" id="ui-login-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content position-relative">
                <div class="position-absolute top-0 end-0 mt-2 me-2 z-1">
                    <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                            data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form id="form">
                    <div class="modal-body p-0">
                        <div class="rounded-top-3 py-3 ps-4 pe-6 bg-light">
                            <h4 class="mb-1" id="modalExampleDemoLabel"> Create login UI  </h4>
                        </div>
                        <input type="hidden" value="0" id="project_id">
                        <div class="row p-3">
                            <!--***** login ui en *****-->
                            <div class="col-md-6">
                                <div class="p-1 pb-0">
                                    <div class="mb-2">
                                        <label class="col-form-label" for="login_title_ja">{{ __('login.LOGIN_TITLE') }}(en)</label>
                                        <input class="form-control" id="login_title_en" name="login_title_ja" type="text" placeholder="{{ __('login.LOGIN_TITLE') }}(en)" />
                                        <span class="text-danger error mt-1"></span>
                                    </div>
                                    <div class="mb-2">
                                        <label class="col-form-label" for="email_address_en">{{ __('login.EMAIL_ADDRESS') }}(en)</label>
                                        <input class="form-control" id="email_address_en" name="email_address_en" type="text" placeholder="{{ __('login.EMAIL_ADDRESS') }}(en)"/>
                                        <span class="text-danger error mt-1"></span>
                                    </div>
                                    <div class="mb-2">
                                        <label class="col-form-label" for="password_en">{{ __('login.PASSWORD') }}(en)</label>
                                        <input class="form-control" id="password_en" name="password_en" type="text" placeholder="{{ __('login.PASSWORD') }}(en)"/>
                                        <span class="text-danger error mt-1"></span>
                                    </div>
                                    <div class="mb-2">
                                        <label class="col-form-label" for="login_btn_en">{{ __('login.SUBMIT') }}(en)</label>
                                        <input class="form-control" id="login_btn_en" name="login_btn_en" type="text" placeholder="{{ __('login.SUBMIT') }}(en)"/>
                                        <span class="text-danger error mt-1"></span>
                                    </div>
                                </div>
                            </div>
                            <!--***** end login ui en *****-->
                            <!--***** login ui ja *****-->
                            <div class="col-md-6">
                                <div class="p-1 pb-0">
                                    <div class="mb-2">
                                        <label class="col-form-label" for="title">{{ __('login.LOGIN_TITLE') }}(ja)</label>
                                        <input class="form-control" id="title" name="login_title_ja" type="text" placeholder="{{ __('login.LOGIN_TITLE') }}(ja)" />
                                        <span class="text-danger error mt-1"></span>
                                    </div>
                                    <div class="mb-2">
                                        <label class="col-form-label" for="email_add">{{ __('login.EMAIL_ADDRESS') }}(ja)</label>
                                        <input class="form-control" id="email_add" name="email_address_ja" type="text" placeholder="{{ __('login.EMAIL_ADDRESS') }}(ja)"/>
                                        <span class="text-danger error mt-1"></span>
                                    </div>
                                    <div class="mb-2">
                                        <label class="col-form-label" for="password">{{ __('login.PASSWORD') }}(ja)</label>
                                        <input class="form-control" id="password" name="password_ja" type="text" placeholder="{{ __('login.PASSWORD') }}(ja)"/>
                                        <span class="text-danger error mt-1"></span>
                                    </div>
                                    <div class="mb-2">
                                        <label class="col-form-label" for="login_btn_ja">{{ __('login.SUBMIT') }}</label>
                                        <input class="form-control" id="login_btn_ja" name="login_btn_ja" type="text" placeholder="{{ __('login.SUBMIT') }}"/>
                                        <span class="text-danger error mt-1"></span>
                                    </div>
                                </div>
                            </div>
                            <!--***** end login ui ja *****-->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">{{ __('login.CANCEL') }}</button>

                        <button class="btn btn-primary" type="submit" id="submit">{{ __('login.SUBMIT') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ***** end login ui Modal ***** -->

    <!--***** tab container *****-->
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
        {{--inactive tab--}}
        <div class="tab-pane fade" id="tab-inactive-project" role="tabpanel" aria-labelledby="profile-tab">
            <div class="row" data-bs-theme="light">
                <form action="{{ route('ui.login.store') }}" method="post">
                    @csrf
                    <input type="text" name="login_title_ja">
                    @error('login_title_ja')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <input type="submit" value="submit">
                </form>
            </div>
        </div>
    </div>
    <!-- ***** end tab container *****-->
@section('script')
    <script>
        let form = document.getElementById('form');
        form.addEventListener('submit', function (e) {
            e.preventDefault();
            let formContainer = $(this); //current form submit
            let formData = new FormData(form)

            //for en field
            let login_title_en = formData.get('login_title_en');
            let email_address_en = formData.get('email_address_en');
            let password_en = formData.get('password_en');
            let login_btn_en = formData.get('login_btn_en');

            //for ja field
            let login_title_ja = formData.get('login_title_ja');
            let email_address_ja = formData.get('email_address_ja');
            let password_ja = formData.get('password_ja');
            let login_btn_ja = formData.get('login_btn_ja');
            let data = {
                'login_title_en' : login_title_en,
                'email_address_en' : email_address_en,
                'password_en' : password_en,
                'login_btn_en' : login_btn_en,
                'login_title_ja' : login_title_ja,
                'email_address_ja' : email_address_ja,
                'password_ja' : password_ja,
                'login_btn_ja' : login_btn_ja,
            }
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{route('ui.login.store')}}",
                type: "post",
                data: data,
                success: function (res) {
                    console.log(res)
                  //  console.log(res.errors)

                  //if errro any field
                    if(res.status == false){
                        $('.error').empty();
                        $.each(res.errors, function(field, messages) {
                            var inputField = formContainer.find('[name="' + field + '"]');
                            var errorContainer = inputField.siblings('.text-danger');

                            // Clear previous error messages
                           // errorContainer.empty();

                            // Append new error messages
                            $.each(messages, function(index, message) {
                                errorContainer.append('<span>' + message + '</span>');
                            });
                        });
                        // $.each(res.errors,function (key, value){
                        //     console.log(key);
                        //     if(key ===  'login_title_ja'){
                        //         $("#login_title_en_error").text(value[0])
                        //     }
                        //     if(key ===  'email_address_en'){
                        //         $("#email_address_en_error").text(value[0])
                        //     }
                        // })
                        $('#ui-login-modal').modal('show');

                    }else{
                        $('#ui-login-modal').modal('hide');
                    }
                },
                error:function (error){
                    let err = error.responseJSON;
                    $.each(err.errors,function (inx, value){
                        console.log(value)
                    })
                    console.log(error)
                }
            });
           // console.log(formData.get('login_title_ja'));
            // $("input[name='firstName']").val();
        })

    </script>
@endsection
@endsection
