
@extends('layout.app')
@section('title', 'login UI Setting')
@include('layout.navbar')

@section('mainContent')
    <div class="row pb-4 pt-2">
        <div class="col-12 text-end btn-lg">
            <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#create-project-modal">{{ __('static_data.project.projectCreate')  }}</button>
        </div>
    </div>

    {{-- Add ui login Modal --}}
    <div class="modal fade" id="create-project-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content position-relative">
                <div class="position-absolute top-0 end-0 mt-2 me-2 z-1">
                    <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                            data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('ui.login.store') }}" method="post" id="form">
                    @csrf
                    <div class="modal-body p-0">
                        <div class="rounded-top-3 py-3 ps-4 pe-6 bg-light">
                            <h4 class="mb-1" id="modalExampleDemoLabel"> Create login UI  </h4>
                        </div>
                        <input type="hidden" value="0" id="project_id">
                        <div class="row p-3">
                            <div class="col-md-6">
                                <div class="p-1 pb-0">
                                    <div class="mb-2">
                                        <label class="col-form-label" for="login_title_ja">{{ __('login.LOGIN_TITLE') }}(en)</label>
                                        <input class="form-control" id="login_title_ja" name="login_title_ja" type="text" placeholder="{{ __('login.LOGIN_TITLE') }}(en)" />
                                    </div>
                                    <div class="mb-2">
                                        <label class="col-form-label" for="email_address_en">{{ __('login.EMAIL_ADDRESS') }}(en)</label>
                                        <input class="form-control" id="email_address_en" name="email_address_en" type="text" placeholder="{{ __('login.EMAIL_ADDRESS') }}(en)"/>
                                    </div>
                                    <div class="mb-2">
                                        <label class="col-form-label" for="password_en">{{ __('login.PASSWORD') }}(en)</label>
                                        <input class="form-control" id="password_en" name="password_en" type="text" placeholder="{{ __('login.PASSWORD') }}(en)"/>
                                    </div>
                                    <div class="mb-2">
                                        <label class="col-form-label" for="login_btn_en">{{ __('login.SUBMIT') }}(en)</label>
                                        <input class="form-control" id="login_btn_en" name="login_btn_en" type="text" placeholder="{{ __('login.SUBMIT') }}(en)"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-1 pb-0">
                                    <div class="mb-2">
                                        <label class="col-form-label" for="title">{{ __('login.LOGIN_TITLE') }}(ja)</label>
                                        <input class="form-control" id="title" name="login_title_ja" type="text" placeholder="{{ __('login.LOGIN_TITLE') }}(ja)" />
                                    </div>
                                    <div class="mb-2">
                                        <label class="col-form-label" for="email_add">{{ __('login.EMAIL_ADDRESS') }}(ja)</label>
                                        <input class="form-control" id="email_add" name="email_address_ja" type="text" placeholder="{{ __('login.EMAIL_ADDRESS') }}(ja)"/>
                                    </div>
                                    <div class="mb-2">
                                        <label class="col-form-label" for="password">{{ __('login.PASSWORD') }}(ja)</label>
                                        <input class="form-control" id="password" name="password_ja" type="text" placeholder="{{ __('login.PASSWORD') }}(ja)"/>
                                    </div>
                                    <div class="mb-2">
                                        <label class="col-form-label" for="login_btn_ja">{{ __('login.SUBMIT') }}</label>
                                        <input class="form-control" id="login_btn_ja" name="login_btn_ja" type="text" placeholder="{{ __('login.SUBMIT') }}"/>
                                    </div>
                                </div>
                            </div>
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

@endsection
@endsection
