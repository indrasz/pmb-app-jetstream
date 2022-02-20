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
                                  width: 30%
                              }
                          </style>
                          <tr>
                              <th class="border px-4 py-2">Nama Ibu</th>
                              <td class="border px-4 py-2">{{ $item->name }}</td>
                              
                          </tr>
                          <tr>
                              <th class="border px-4 py-2 ">Tempat/Tanggal Lahir</th>
                              <td class="border px-4 py-2">{{ $item->date_birth }}</td>
                          </tr>
                          <tr>
                              <th class="border px-4 py-2 ">Kehamilan ke</th>
                              <td class="border px-4 py-2">{{ $item->pregnancy_to }}</td>
                          </tr>
                          <tr>
                              <th class="border px-4 py-2 ">Anak Terakhir Umur</th>
                              <td class="border px-4 py-2">{{ $item->last_chield_age }}</td>
                          </tr>
                          
                          <tr>
                              <th class="border px-4 py-2 ">Agama</th>
                              <td class="border px-4 py-2">{{ $item->religion }}</td>
                          </tr>
                          <tr>
                              <th class="border px-4 py-2 ">Pendidikan</th>
                              <td class="border px-4 py-2">{{ $item->education }}</td>
                          </tr>
                          <tr>
                              <th class="border px-4 py-2 ">Golongan Darah</th>
                              <td class="border px-4 py-2">{{ $item->blood_type }}</td>
                          </tr>
                          <tr>
                              <th class="border px-4 py-2 ">Pekerjaan</th>
                              <td class="border px-4 py-2">{{ $item->job }}</td>
                          </tr>
                          <tr>
                              <th class="border px-4 py-2 ">No. JKN / BPJS</th>
                              <td class="border px-4 py-2">{{ $item->bpjs_number }}</td>
                          </tr>
                          <tr>
                            <th class="border px-4 py-2 ">Alamat Rumah</th>
                            <td class="border px-4 py-2">{{ $item->address }}</td>
                          </tr>
                          <tr>
                              <th class="border px-4 py-2 ">No Telepon</th>
                              <td class="border px-4 py-2">{{ $item->phone_number }}</td>
                          </tr>
                      </tbody>
                    </table>
                    <div class="row">
                      <div class="col ">
                        <a href="{{ route('dashboard.patient.index') }}" class="btn btn-primary mt-3 px-5">
                          
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

