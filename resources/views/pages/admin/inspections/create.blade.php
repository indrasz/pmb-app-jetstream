@extends('layouts.admin')

@section('content')
   
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Catatan Pemeriksaan Pasien</h1>
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
              <form action="{{ route('dashboard.patient.inspection.store', $patient->id) }}" method="POST" >
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
                          <h5> {{ $patient->name }}</h5>
                          
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Nama Pemeriksa, Tempat Pelayanan, Paraf</label>
                          <input type="text" class="form-control" name="examiner" required />
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Tanggal</label>
                          <input type="text" class="form-control" name="date" required />
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Keluhan</label>
                          <input type="text" class="form-control" name="complaint" required />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>U.K (mg)</label>
                          <input type="text" class="form-control" name="uk_mg"  required />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>BB (kg)</label>
                          <input type="text" class="form-control" name="bb_kg"  required />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>TD (mmHg)</label>
                          <input type="text" class="form-control" name="td_mmhg"  required />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>LILA (cm)</label>
                          <input type="text" class="form-control" name="lila_cm"required />
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Tinggi Fundus (cm)</label>
                          <input type="text" class="form-control" name="fundus_hight" required />
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Letak Janin, DJJ</label>
                          <input type="text" class="form-control" name="fetus_location" required />
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Imunisasi</label>
                          <input type="text" class="form-control" name="immunization" required />
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Tablet Penambah Darah</label>
                          <input type="text" class="form-control" name="add_blood_tablet" required />
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Lab</label>
                          <input type="text" class="form-control" name="lab" required />
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Analisa</label>
                          <input type="text" class="form-control" name="analysis" required />
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Tata Laksana</label>
                          <input type="text" class="form-control" name="governance" required />
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Konseling</label>
                          <input type="text" class="form-control" name="counseling" required />
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

