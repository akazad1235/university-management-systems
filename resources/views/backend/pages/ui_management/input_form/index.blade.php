
@extends('layout.app')
@section('title', 'input form UI String')
@include('layout.navbar')

@section('mainContent')
    <div class="row pb-4 pt-2">
        <div class="col-12 text-end btn-lg">
            <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#ui-login-modal"><i class="bi bi-plus"></i>{{ __('ui/button.ADD_BUTTON') }}</button>
        </div>
    </div>

    <!--***** login ui Modal *****-->
    <div class="modal fade" id="ui-login-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog  modal-lg modal-dialog-centered" role="document">
            <div class="modal-content position-relative">
                <div class="position-absolute top-0 end-0 mt-2 me-2 z-1">
                    <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                            data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form id="form">
                    <div class="modal-body  p-0">
                        <div class="rounded-top-3  py-3 ps-4 pe-6 bg-light">
                            <h4 class="mb-1 text-capitalize" id="modalExampleDemoLabel"> {{__('ui/validation/login.modalTitle')}}  </h4>
                        </div>
                        <div class="row p-3">
                            <!--***** login ui en *****-->
                            <div class="col-md-6">
                                <div class="p-1 pb-0">
                                    <div class="mb-2">
                                        <label class="col-form-label" for="login_title_ja">Key Name</label>
                                        <input class="form-control" id="key_name" name="key_name" type="text" placeholder="" />
                                        <span class="text-danger error mt-1"></span>
                                    </div>
                                    <div class="mb-2">
                                        <label class="col-form-label" for="label_japan">Label Name Japan</label>
                                        <input class="form-control" id="label_japan" name="label_ja" type="text" placeholder=""/>
                                        <span class="text-danger error mt-1"></span>
                                    </div>
                                    <div class="mb-2">
                                        <label class="col-form-label" for="label_en">Label Name English</label>
                                        <input class="form-control" id="label_en" name="label_en" type="text" placeholder=""/>
                                        <span class="text-danger error mt-1"></span>
                                    </div>

                                </div>
                            </div>
                            <!--***** end login ui en *****-->
                              <!--***** login ui en *****-->
                              <div class="col-md-6">
                                <div class="p-1 pb-0">
                                    <div class="mb-2">
                                        <label class="col-form-label" for="login_title_ja">Type</label>
                                        <select class="form-select" id="types" name="type" aria-label="Default select example">
                                            <option value="">Select One</option>
                                            <option value="1">Login</option>
                                            <option value="2">Project</option>
                                        </select>
                                    </div>
                                    <div class="mb-2">
                                        <label class="col-form-label" for="placeholder_ja">Placeholder Japan Name</label>
                                        <input class="form-control" id="placeholder_ja" name="placeholder_ja" type="text" placeholder=""/>
                                        <span class="text-danger error mt-1"></span>
                                    </div>
                                    <div class="mb-2">
                                        <label class="col-form-label" for="placeholder_en">Placeholder English Name</label>
                                        <input class="form-control" id="placeholder_en" name="placeholder_en" type="text" placeholder=""/>
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
                        <th class="sort" data-sort="japan">Label Ja</th>
                        <th class="sort" data-sort="japan">Label En</th>
                        <th class="sort" data-sort="english">Placeholder Ja</th>
                        <th class="sort" data-sort="english">Placeholder En</th>
                        <th class="sort" data-sort="project">Type</th>
                        <th class="" data-sort="">Action</th>
                      </tr>
                    </thead>
                    <tbody class="list" id="dev-string-list">
                        @foreach ($inputForms as $item)
                        <tr>
                            <td class="name">
                                <p>{{ $item->key_name }}</p>
                            </td>
                            <td class="japan">
                                <input  type="text" class="ja" value="{{ $item->label_ja}}">
                            </td>
                            <td class="japan">
                                <input  type="text" class="ja" value="{{ $item->label_en}}">
                            </td>
                            <td class="english">
                                <input type="text" class="en" value="{{ $item->placeholder_ja }}">
                            </td>
                            <td class="english">
                                <input type="text" class="en" value="{{ $item->placeholder_en }}">
                            </td>
                            <td>project tst</td>
                            <td class="text-center"><button data-id="{{ $item->id }}" class="btn btn-warning me-1 mb-1 btn-sm"><span class="text-300 fas fa-edit"></span></button></td>
                          </tr>
                        @endforeach

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
            let label_ja = formData.get('label_ja');
            let label_en = formData.get('label_en');
            let placeholder_ja = formData.get('placeholder_ja');
            let placeholder_en = formData.get('placeholder_en');
            let type = $("#types").val();

            let data = {
                'key_name' : formData.get('key_name'),
                'label_ja' : formData.get('label_ja'),
                'label_en' : formData.get('label_en'),
                'placeholder_ja' : formData.get('placeholder_ja'),
                'placeholder_en' : formData.get('placeholder_en'),
                'type' : formData.get('type'),
                'store_type' : 'store'
            }
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{route('ui.input_form.store')}}",
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
                                    <input class="ja" type="text" name="ja" value="${res.data.label_ja}" id="japan">
                                </td>
                                <td class="english">
                                    <input class="en" type="text" name="en" value="${res.data.label_en}" id="english">
                                </td>
                                <td class="japan">
                                    <input class="ja" type="text" name="ja" value="${res.data.placeholder_ja}" id="japan">
                                </td>
                                <td class="english">
                                    <input class="en" type="text" name="en" value="${res.data.placeholder_en}" id="english">
                                </td>
                                <td>project tst</td>
                                <td><button class="btn btn-warning me-1 mb-1 btn-sm" data-id="${res.data.id}"><span class="text-300 fas fa-edit"></span></button></td>
                            </tr>
                        `)
                        $('#ui-login-modal').modal('hide');
                    }
                },
                error:function (error){
                    toastr.error(res.message, '', {timeOut: 2000, progressBar: true})
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
        //update
        $("#dev-string-list").on('click', 'button', function(e){
            e.preventDefault();
            let japan = $(this).parent().parent().find('input');
            let english = $(this).parent().parent().find('input');
            let id = $(this).data("id");
            console.log($(this).data("id"));

            let data = {
                'id' : id,
                'key_name' : 'no need',
                'ja' : japan[0].value,
                'en' : english[1].value,
                'type' : 'update',
            }

            // $.ajax({
            //     headers: {
            //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //     },
            //     url: "{{route('ui.project.dev.setting.store')}}",
            //     type: "post",
            //     data: data,
            //     success: function (res) {
            //         console.log(res);
            //         toastr.success(res.message, '', {timeOut: 2000, progressBar: true})
            //     },
            //     error: function(error) {

            //     }
            // })

        })

    </script>
@endsection
@endsection
