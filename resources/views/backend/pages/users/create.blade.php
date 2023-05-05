@extends('backend.layouts.app')
@section('content')

    @include('backend.includes.topbar2')

    <div class="card mb-3">
        <div class="card-header mb-2">
          <div class="row flex-between-end">
            <div class="col-auto align-self-center">
              <h5 class="mb-0" data-anchor="data-anchor">Create a new user</h5>
            </div>
            <div class="col-auto ms-auto">
                <a href="{{ route('user.index') }}"><button title="go back" class="btn btn-info"><i class="fas fa-arrow-left"></i></button></a>
            </div>
          </div>
        </div>
        <div class="card-body pt-0">
            <form action="{{ route('user.store') }}" method="post">
                @csrf
                <div class="row mb-3">
                  <div class="col-md-6">
                    <label for="role" class=" col-form-label">Name</label>
                    <div class="">
                        <input type="text" class="form-control" name="name" id="role">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label for="role" class="col-form-label">Email</label>
                    <div class="">
                        <input type="text" class="form-control" name="email" id="role">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label for="role" class="col-form-label"> Password</label>
                    <div class="">
                        <input type="password" class="form-control" name="password" id="role">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label for="role" class="col-form-label">Confirm Password</label>
                    <div class="">
                        <input type="password" class="form-control" name="confirm_password" id="role">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="">
                        <label class="col-form-label" for="inputGroupSelect01">Roles</label>
                        <select class="form-select" id="inputGroupSelect01" name="roles[]">
                          <option selected>select role.</option>
                          @foreach ($roles as $role)
                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                          @endforeach

                        </select>
                      </div>

                  </div>
                </div>
                <button type="submit" class="btn btn-primary float-end">Submit</button>
              </form>
        </div>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
      <script>
        // document.getElementById("check-permission-all").addEventListener('click', function(){
        //     console.log('clicked');
        // })

        $("#check-permission-all").click(function(){
            console.log('clicked');
            if($(this).is(':checked')){
                $('input[type=checkbox]').prop('checked', true);
            }else{
                $('input[type=checkbox]').prop('checked', false);
            }
        })
        function checkPermissionGroup(className, checkThis){

          console.log($("."+className+' input'));
          const groupIdName =  $("#"+checkThis.id);
            const classNames = $("."+className+' input');
            console.log(classNames);
            if(groupIdName.is(':checked')){
                classNames.prop('checked', true);
            }else{
                classNames.prop('checked', false);
            }
        }
      </script>
@endsection
