@extends('layouts.admin')

@section('content')
   
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Pasien</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
        </div>

        <div class="row">
            <div class="col-12">
              @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
              <form action="{{ route('dashboard.user.update', $item->id) }}" method="POST" >
                @method('PUT')
                @csrf
                
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Nama User</label>
                          <input type="text" class="form-control" name="name" value="{{ old('name') ?? $item->name }}" required />
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Email User</label>
                          <input type="text" class="form-control" name="email" value="{{ old('email') ?? $item->email }}" required />
                        </div>
                      </div>
                      
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Roles</label>
                          <select name="roles" required class="form-control">
                            <option value="{{ $item->roles }}">{{ $item->roles }}</option>
                            <option disabled>-------</option>
                            <option value="ADMIN">ADMIN</option>
                            <option value="USER">USER</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col text-right">
                        <button
                          type="submit"
                          class="btn btn-success px-5"
                        >
                          Save Now
                        </button>
                      </div>
                  </div>
                </div>
              </form>
            </div>
        </div>

    </div>
   
@endsection

