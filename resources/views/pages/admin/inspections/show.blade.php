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
       
                <div class="card">
                  
                  <div class="card-body">
                    
                    <table class="table-auto w-100">
                      <tbody>
                        <style>
                            th{
                                width: 25%
                            }
                        </style>
                          <tr>
                              <th class="border px-4 py-2">Nama Ibu</th>
                              <td class="border px-4 py-2">{{ $item->patient->name }}</td>
                              
                          </tr>
                          <tr>
                              <th class="border px-4 py-2 ">Nama Pemeriksa, Tempat Pelayanan, Paraf </th>
                              <td class="border px-4 py-2">{{ $item->examiner }}</td>
                          </tr>
                          <tr>
                              <th class="border px-4 py-2 ">Tanggal</th>
                              <td class="border px-4 py-2">{{ $item->date }}</td>
                          </tr>
                          <tr>
                              <th class="border px-4 py-2 ">Keluhan</th>
                              <td class="border px-4 py-2">{{ $item->complaint }}</td>
                          </tr>
                          
                          <tr>
                              <th class="border px-4 py-2 ">U.K (mg)</th>
                              <td class="border px-4 py-2">{{ $item->uk_mg }}</td>
                          </tr>
                          <tr>
                              <th class="border px-4 py-2 ">BB (kg)</th>
                              <td class="border px-4 py-2">{{ $item->bb_kg }}</td>
                          </tr>
                          <tr>
                              <th class="border px-4 py-2 ">TD (mmHg)</th>
                              <td class="border px-4 py-2">{{ $item->td_mmhg }}</td>
                          </tr>
                          <tr>
                              <th class="border px-4 py-2 ">LILA (cm)</th>
                              <td class="border px-4 py-2">{{ $item->lila_cm }}</td>
                          </tr>
                          <tr>
                              <th class="border px-4 py-2 ">Tinggi Fundus (cm)</th>
                              <td class="border px-4 py-2">{{ $item->fundus_hight }}</td>
                          </tr>
                          <tr>
                            <th class="border px-4 py-2 ">Letak Janin, DJJ</th>
                            <td class="border px-4 py-2">{{ $item->fetus_location }}</td>
                          </tr>
                          <tr>
                            <th class="border px-4 py-2 ">Imunisasi</th>
                            <td class="border px-4 py-2">{{ $item->immunization }}</td>
                          </tr>
                          <tr>
                            <th class="border px-4 py-2 ">Tablet Tambah Darah</th>
                            <td class="border px-4 py-2">{{ $item->add_blood_tablet }}</td>
                          </tr>
                          <tr>
                            <th class="border px-4 py-2 ">Lab</th>
                            <td class="border px-4 py-2">{{ $item->lab }}</td>
                          </tr>
                          <tr>
                            <th class="border px-4 py-2 ">Analisa</th>
                            <td class="border px-4 py-2">{{ $item->analysis }}</td>
                          </tr>
                          <tr>
                            <th class="border px-4 py-2 ">Tata Laksana</th>
                            <td class="border px-4 py-2">{{ $item->governance }}</td>
                          </tr>
                          <tr>
                            <th class="border px-4 py-2 ">Konseling</th>
                            <td class="border px-4 py-2">{{ $item->counseling }}</td>
                          </tr>
                          
                      </tbody>
                    </table>
                    <div class="row">
                      <div class="col ">
                        <a href="{{ route('dashboard.inspection.index') }}" class="btn btn-primary mt-3 px-5">
                          
                          Kembali
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
             
            </div>
        </div>

    </div>
   
@endsection

