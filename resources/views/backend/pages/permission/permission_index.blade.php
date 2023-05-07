@extends('backend.layouts.app')
@section('content')

    @include('backend.includes.topbar2')

    <div class="card mb-3">
        <div class="card-header">
          <div class="row flex-between-end">
            <div class="col-auto align-self-center">
              <h5 class="mb-0" data-anchor="data-anchor">Pagination with numbering</h5>
            </div>
            <div class="col-auto ms-auto">
                <a href="{{ route('permission.role.create') }}"><button class="btn btn-info">Create a new role</button></a>
            </div>
          </div>
        </div>
        <div class="card-body pt-0">
          <div class="tab-content">
            <div class="tab-pane preview-tab-pane active" role="tabpanel"
              aria-labelledby="tab-dom-1eae5f9f-6e8e-416e-9e60-4de3e4449a19"
              id="dom-1eae5f9f-6e8e-416e-9e60-4de3e4449a19">
              <div id="tableExample2" data-list='{"valueNames":["name","email","age"],"page":5,"pagination":true}'>
                <div class="table-responsive scrollbar">
                  <table class="table table-bordered table-striped fs--1 mb-0">
                    <thead class="bg-200 text-900">
                      <tr>
                        <th class="sort" data-sort="name">Name</th>
                        <th class="sort" data-sort="name">Permissions</th>
                        <th class="sort" data-sort="age">Action</th>
                      </tr>
                    </thead>
                    <tbody class="list">
                    @foreach($roles as $role)
                        <tr>
                            <td class="name">{{ $role->name  }}</td>
                            <td class="name">
                                @foreach ($role->permissions as $permission)
                                <span class="badge text-bg-secondary">{{ $permission->name }}</span>
                                @endforeach
                            </td>
                            <td class="age">
                                <a href="{{ route('permission.role.edit', base64_encode($role->id)) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
                <div class="d-flex justify-content-center mt-3"><button class="btn btn-sm btn-falcon-default me-1"
                    type="button" title="Previous" data-list-pagination="prev"><span
                      class="fas fa-chevron-left"></span></button>
                  <ul class="pagination mb-0"></ul><button class="btn btn-sm btn-falcon-default ms-1" type="button"
                    title="Next" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection
