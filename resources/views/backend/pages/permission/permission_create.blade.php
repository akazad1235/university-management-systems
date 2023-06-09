@extends('backend.layouts.app')
@section('content')

    @include('backend.includes.topbar2')

    <div class="card mb-3">
        <div class="card-header mb-2">
          <div class="row flex-between-end">
            <div class="col-auto align-self-center">
              <h5 class="mb-0" data-anchor="data-anchor">Create a new role</h5>
            </div>
            <div class="col-auto ms-auto">
                <a href="{{ route('permission.create') }}"><button title="go back" class="btn btn-info"><i class="fas fa-arrow-left"></i></button></a>
            </div>
          </div>
        </div>
        <hr>
        <div class="card-body pt-0">
            <form action="{{ route('permission.store') }}" method="post">
                @csrf
                <div class="row mb-4">
                  <label for="group_name" class="col-sm-2 col-md-3 col-form-label">Permissin Name</label>
                  <div class="col-md-6">
                    <input type="text" class="form-control" name="group_name" id="group_name">
                  </div>
                </div>
                <div class="form-group">
                    <label for="">Permission</label><div class="form-check m-2">
                        <input type="checkbox" class="form-check-input" id="check-permission-all">
                        <label for="check-permission-all">All</label>
                    </div>
                    <hr>
                    <div class="d-flex">
                        <div class="form-check m-2">
                            <input type="checkbox" class="form-check-input" name="permission[]" value="view" id="view">
                            <label for="view">View</label>
                        </div>
                        <div class="form-check m-2">
                            <input type="checkbox" class="form-check-input" name="permission[]" value="create" id="create">
                            <label for="create">Create</label>
                        </div>
                        <div class="form-check m-2">
                            <input type="checkbox" class="form-check-input" name="permission[]" value="update" id="update">
                            <label for="update">Update</label>
                        </div>
                        <div class="form-check m-2">
                            <input type="checkbox" class="form-check-input" name="permission[]" value="delete" id="delete">
                            <label for="delete">Delete</label>
                        </div>
                        <div class="form-check m-2">
                            <input type="checkbox" class="form-check-input" name="permission[]" value="approve" id="approve">
                            <label for="approve">Approve</label>
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
