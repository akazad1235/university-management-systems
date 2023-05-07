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
                <a href="{{ route('permission.role') }}"><button title="go back" class="btn btn-info"><i class="fas fa-arrow-left"></i></button></a>
            </div>
          </div>
        </div>
        <div class="card-body pt-0">
            <form action="{{ route('permission.role.store') }}" method="post">
                @csrf
                <div class="row mb-3">
                  <label for="role" class="col-sm-2 col-form-label">Role Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" id="role">
                  </div>
                </div>
                <div class="form-group">
                    <label for="">Permission</label>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="check-permission-all">
                        <label for="check-permission-all">All</label>
                    </div>
                    <hr>
                    <div class="row">
                        @php
                            $i=1;
                        @endphp
                        @foreach ($groupByPermissions as $groupByPermission)
                        <div class="col-md-3">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="{{ $i }}Management" name="group_name" value="{{ $groupByPermission->name }}" onclick="checkPermissionGroup('role-{{$i}}-management-checkbox', this)">
                                <label for="check-permission-all">{{ $groupByPermission->name }}</label>
                            </div>
                        </div>
                        @php
                          // $user = new \App\Models\User;
                            $permissionNames = \App\Models\User::getPermissionByGroupName($groupByPermission->name);
                            $j=1;
                        @endphp
                        <div class="col-md-9 role-{{$i}}-management-checkbox">
                            @foreach ($permissionNames as $permissionName)
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="permissions[]" value="{{ $permissionName->name }}" id="check">
                                    <label for="check">{{ $permissionName->name }}</label>
                                </div>
                                @php
                                    $j++;
                                @endphp
                            @endforeach
                        </div>
                        @php
                            $i++;
                        @endphp
                        @endforeach
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
