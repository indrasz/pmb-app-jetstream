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
              <form action="{{ route('dashboard.patient.update', $item->id) }}" method="POST" >
                @method('PUT')
                @csrf
                
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                        <style>
                            label{
                                color: black
                            }
                        </style>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Nama Ibu</label>
                          <input type="text" class="form-control" name="name" value="{{ $item->name }}" required />
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Tempat/Tanggal Lahir</label>
                          <input type="text" class="form-control" value="{{  $item->date_birth }}" name="date_birth" required />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Kehamilan ke</label>
                          <input type="number" class="form-control" value="{{ $item->pregnancy_to }}" name="pregnancy_to" required />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Anak Terakhir umur</label>
                          <input type="text" class="form-control" value="{{ $item->last_chield_age }}"  name="last_chield_age" placeholder="Tahun/Bulan/Hari" required />
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Agama</label>
                          <input type="text" class="form-control"  value="{{ $item->religion }}" name="religion" required />
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Pendidikan</label>
                          <input type="text" class="form-control"  value="{{ $item->education }}" name="education" required />
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Golongan Darah</label>
                          <input type="text" class="form-control"  value="{{ $item->blood_type }}" name="blood_type" required />
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Pekerjaan</label>
                          <input type="text" class="form-control"  value="{{ $item->job }}" name="job" required />
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>No. JKN / BPJS</label>
                          <input type="text" class="form-control"  value="{{ $item->bpjs_number }}" name="bpjs_number" required />
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Alamat Rumah</label>
                          <input type="text" class="form-control" value="{{ $item->address }}" name="address" required />
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>No Telepon yang bisa dihubungi</label>
                          <input type="text" class="form-control"  value="{{ $item->phone_number }}" name="phone_number" required />
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col text-right">
                        <button type="submit"class="btn btn-primary px-5">
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

