
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
                            <h4 class="mb-1 text-capitalize" id="modalExampleDemoLabel"> {{__('ui/validation/login.modalTitle')}}  </h4>
                        </div>
                        <input type="hidden" value="0" id="project_id">
                        <div class="row p-3">
                            <!--***** login ui en *****-->
                            <div class="col-md-6">
                                <div class="p-1 pb-0">
                                    <div class="mb-2">
                                        <label class="col-form-label" for="login_title_ja">{{ __('login.LOGIN_TITLE') }}(en)</label>
                                        <input class="form-control" id="login_title_en" name="login_title_en" type="text" placeholder="{{ __('login.LOGIN_TITLE') }}" />
                                        <span class="text-danger error mt-1"></span>
                                    </div>
                                    <div class="mb-2">
                                        <label class="col-form-label" for="email_address_en">{{ __('login.EMAIL_ADDRESS') }}(en)</label>
                                        <input class="form-control" id="email_address_en" name="email_address_en" type="text" placeholder="{{ __('login.EMAIL_ADDRESS') }}"/>
                                        <span class="text-danger error mt-1"></span>
                                    </div>
                                    <div class="mb-2">
                                        <label class="col-form-label" for="password_en">{{ __('login.PASSWORD') }}(en)</label>
                                        <input class="form-control" id="password_en" name="password_en" type="text" placeholder="{{ __('login.PASSWORD') }}"/>
                                        <span class="text-danger error mt-1"></span>
                                    </div>
                                    <div class="mb-2">
                                        <label class="col-form-label" for="login_btn_en">{{ __('login.SUBMIT') }}(en)</label>
                                        <input class="form-control" id="login_btn_en" name="login_btn_en" type="text" placeholder="{{ __('login.SUBMIT') }}"/>
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



    <div class="card mb-3">
        <div class="bg-holder d-none d-lg-block bg-card" style="background-image:url(../../assets/img/icons/spot-illustrations/corner-4.png);"></div> <!--/.bg-holder-->
        <div class="card-body position-relative">
          <div class="row">
            <div class="col-lg-8">
              <h3>Ui</h3>
              <p class="mt-2">The page header is a nice little feature to add appropriate spacing around the headings on a page. This is particularly helpful on a web page where you may have several post titles and need a way to add distinction to each of them.</p><a class="btn btn-link ps-0 btn-sm" href="../../documentation/getting-started.html" target="_blank">Get Started<span class="fas fa-chevron-right ms-1 fs--2"></span></a>
            </div>
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
