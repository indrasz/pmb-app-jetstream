@extends('layouts.admin')

@section('content')
   
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Riwayat Obstetri Pasien</h1>
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
              <form action="{{ route('dashboard.obstetric.update', $item->id) }}" method="POST" >
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
                          <h5> {{ $item->patient->name }}</h5>
                          
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Kehamilan ke</label>
                          <input type="number" class="form-control" name="pregnancy_to" value="{{ $item->pregnancy_to }}" required />
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Tahun</label>
                          <input type="text" class="form-control" name="year" value="{{ $item->year }}" required />
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Lahir Hidup/Mati/Abortus</label>
                          <input type="text" class="form-control" name="still_born" placeholder="Hidup/Mati/Abortus" value="{{ $item->still_born }}" required />
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Lahir Aterm/Pre Term/Post Term</label>
                          <input type="text" class="form-control" name="aterm_born" placeholder="Aterm/Pre Term/Post Term" value="{{ $item->aterm_born }}" required />
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Lahir Spontan/SC/Lainnya</label>
                          <input type="text" class="form-control" name="spontant_born" placeholder="Spontant/SC/Lainnya" value="{{ $item->spontant_born }}" required />
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Berat Lahir / Panjang Lahir</label>
                          <input type="text" class="form-control" name="weight_height" placeholder="(g) / (cm) " value="{{ $item->weight_height }}" required />
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Tempat Bersalin, Nakes</label>
                          <input type="text" class="form-control" name="maternity_place" value="{{ $item->maternity_place }}" required />
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Kondisi Anak Saat Ini</label>
                          <input type="text" class="form-control" name="condition" value="{{ $item->condition }}" required />
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Komplikasi Kehamilan/Persalinan</label>
                          <input type="text" class="form-control" name="complication" value="{{ $item->complication }}" required />
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

