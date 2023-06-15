
@extends('layout.app')
@section('title', 'login UI Setting')
@include('layout.navbar')

@section('mainContent')
    <div class="row pb-4 pt-2">
        <div class="col-12 text-end btn-lg">
            <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#ui-login-modal"><i class="bi bi-plus"></i>Add New</button>
        </div>
    </div>

    <!--***** login ui Modal *****-->
    <div class="modal fade" id="ui-login-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered" role="document">
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
                        <div class="row p-3">
                            <!--***** login ui en *****-->
                            <div class="col-md-12">
                                <div class="p-1 pb-0">
                                    <div class="mb-2">
                                        <label class="col-form-label" for="login_title_ja">Key Name</label>
                                        <input class="form-control" id="key_name" name="key_name" type="text" placeholder="" />
                                        <span class="text-danger error mt-1"></span>
                                    </div>
                                    <div class="mb-2">
                                        <label class="col-form-label" for="japan">Japan Name</label>
                                        <input class="form-control" id="ja" name="ja" type="text" placeholder=""/>
                                        <span class="text-danger error mt-1"></span>
                                    </div>
                                    <div class="mb-2">
                                        <label class="col-form-label" for="english">English Name</label>
                                        <input class="form-control" id="english" name="en" type="text" placeholder=""/>
                                        <span class="text-danger error mt-1"></span>
                                    </div>
                                    <div class="mb-2">
                                        <label class="col-form-label" for="login_btn_en">Project</label>
                                        <select class="form-select" name="project_id" aria-label="Default select example">
                                            <option selected="">Select Project</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>

                                        <span class="text-danger error mt-1"></span>
                                    </div>
                                </div>
                            </div>
                            <!--***** end login ui en *****-->
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
            <div class="col-lg-12">
              <h3>Ui</h3>
              <div id="tableExample3" data-list='{"valueNames":["key_name","japan","english"],"page":8,"pagination":true}'>
                <div class="row justify-content-end g-0">
                  <div class="col-auto col-sm-5 mb-3">
                    <form>
                      <div class="input-group"><input class="form-control form-control-sm shadow-none search" type="search" placeholder="Search..." aria-label="search" />
                        <div class="input-group-text bg-transparent"><span class="fa fa-search fs--1 text-600"></span></div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="table-responsive scrollbar">
                    <form action="" id="form">
                  <table class="table table-bordered table-striped fs--1 mb-0">
                    <thead class="bg-200 text-900">
                      <tr>
                        <th class="sort" data-sort="key_name">Key Name</th>
                        <th class="sort" data-sort="japan">Japan</th>
                        <th class="sort" data-sort="english">English</th>
                        <th class="sort" data-sort="project">Project</th>
                        <th class="" data-sort="">Action</th>
                      </tr>
                    </thead>
                    <tbody class="list" id="dev-string-list">
                      <tr>
                        <td class="name">
                            <input type="text">
                        </td>
                        <td class="japan">
                            <input  type="text" value="azad">
                        </td>
                        <td class="english">
                            <input type="text">
                        </td>
                        <td>project tst</td>
                        <td class="text-center"><span class="text-500 fas fa-edit"></span></td>
                      </tr>
                    </tbody>
                  </table>
                </form>
                </div>
                <div class="d-flex justify-content-center mt-3"><button class="btn btn-sm btn-falcon-default me-1" type="button" title="Previous" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                  <ul class="pagination mb-0"></ul><button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next" data-list-pagination="next"><span class="fas fa-chevron-right"> </span></button>
                </div>
              </div>
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
            let key_name = formData.get('key_name');
            let japan = formData.get('ja');
            let english = formData.get('en');
            let project = formData.get('project_id');

            let data = {
                'key_name' : formData.get('key_name'),
                'ja' : formData.get('ja'),
                'en' : formData.get('en'),
                'project_id' : formData.get('project_id'),
            }
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{route('ui.project.dev.setting.store')}}",
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
                        toastr.success(res.message, '', {timeOut: 2000, progressBar: true})
                        $("#dev-string-list").prepend(`
                            <tr>
                                <td class="name">
                                   <p id="key_name">${res.data.key_name}</>
                                </td>
                                <td class="japan">
                                    <input  type="text" name="ja" value="${res.data.ja}" id="japan">
                                </td>
                                <td class="english">
                                    <input  type="text" name="en" value="${res.data.en}" id="english">
                                </td>
                                <td>project tst</td>
                                <td class="text-center"><span class="text-500 fas fa-edit"></span></td>
                            </tr>
                        `)
                        $('#ui-login-modal').modal('hide');
                    }
                },
                error:function (error){
                    toastr.success(res.message, '', {timeOut: 2000, progressBar: true})
                    // let err = error.responseJSON;
                    // $.each(err.errors,function (inx, value){
                    //     console.log(value)
                    // })
                    console.log(error)
                }
            });
           // console.log(formData.get('login_title_ja'));
            // $("input[name='firstName']").val();
        })

    </script>
@endsection
@endsection
