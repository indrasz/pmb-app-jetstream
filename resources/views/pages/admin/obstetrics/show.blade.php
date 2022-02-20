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
       
                <div class="card">
                  
                  <div class="card-body">
                    
                    <table class="table-auto w-100">
                      <tbody>
                        <style>
                            th{
                                width: 35%
                            }
                        </style>
                          <tr>
                              <th class="border px-4 py-2">Nama Ibu</th>
                              <td class="border px-4 py-2">{{ $item->patient->name }}</td>
                              
                          </tr>
                          <tr>
                              <th class="border px-4 py-2 ">Kehamilan Ke </th>
                              <td class="border px-4 py-2">{{ $item->pregnancy_to }}</td>
                          </tr>
                          <tr>
                              <th class="border px-4 py-2 ">Tahun</th>
                              <td class="border px-4 py-2">{{ $item->year }}</td>
                          </tr>
                          <tr>
                              <th class="border px-4 py-2 ">Lahir Hidup/Mati/Abortus</th>
                              <td class="border px-4 py-2">{{ $item->still_born }}</td>
                          </tr>
                          
                          <tr>
                              <th class="border px-4 py-2 ">Lahir Aterm/Pre Aterm/Post Term</th>
                              <td class="border px-4 py-2">{{ $item->aterm_born }}</td>
                          </tr>
                          <tr>
                              <th class="border px-4 py-2 ">Lahir Spontan/SC/Lainnya</th>
                              <td class="border px-4 py-2">{{ $item->spontant_born }}</td>
                          </tr>
                          <tr>
                              <th class="border px-4 py-2 ">Berat/Panjang Lahir</th>
                              <td class="border px-4 py-2">{{ $item->weight_height }}</td>
                          </tr>
                          <tr>
                              <th class="border px-4 py-2 ">Tempat Bersalin, nakes</th>
                              <td class="border px-4 py-2">{{ $item->maternity_place }}</td>
                          </tr>
                          <tr>
                              <th class="border px-4 py-2 ">Kondisi Anak</th>
                              <td class="border px-4 py-2">{{ $item->condition }}</td>
                          </tr>
                          <tr>
                            <th class="border px-4 py-2 ">Komplikasi Kehamilan/Persalinan</th>
                            <td class="border px-4 py-2">{{ $item->complication }}</td>
                          </tr>
                      </tbody>
                    </table>
                    <div class="row">
                      <div class="col ">
                        <a href="{{ route('dashboard.obstetric.index') }}" class="btn btn-primary mt-3 px-5">
                          
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

