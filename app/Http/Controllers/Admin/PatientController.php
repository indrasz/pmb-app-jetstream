<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PatientRequest;
use App\Models\Patient;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = Patient::query();

            return Datatables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <div class="btn-group">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle mr-1 mb-1" 
                                    type="button" id="action' .  $item->id . '"
                                        data-toggle="dropdown" 
                                        aria-haspopup="true"
                                        aria-expanded="false">
                                        Aksi
                                </button>
                                <div class="dropdown-menu" aria-labelledby="action' .  $item->id . '">
                                    <a class="dropdown-item text-success" href="' . route('dashboard.patient.obstetric.create', $item->id) . '">
                                        Tambah Riwayat Obsetri
                                    </a>
                                    <a class="dropdown-item text-success" href="' . route('dashboard.patient.inspection.create', $item->id) . '">
                                        Tambah Catatan Pemeriksaan
                                    </a>
                                    <a class="dropdown-item text-primary" type="button" 
                                        href="' . route('dashboard.patient.show', $item->id) . '">
                                        Lihat Data Pasien
                                    </a>
                                </div>
                                
                                
             
                            </div>

                            <div class="edit">
                                <a class="btn btn-secondary mr-1 mb-1" type="button" 
                                    href="' . route('dashboard.patient.edit', $item->id) . '">
                                    Edit
                                </a>
                            </div>

    
                            <div class="show">
                                
                                <a class="btn btn-danger mr-1 mb-1  " href="#" data-toggle="modal" data-target="#patientDelete">             
                                    Hapus
                                </a>
                            </div>
                        </div>

                        <div class="modal fade" id="patientDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Anda Yakin Akan Menghapusnya?</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">Tekan tombol "Cancel" Untuk Membatalkan</div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                        <form action="' . route('dashboard.patient.destroy', $item->id) . '" method="POST">
                                            ' . method_field('delete') . csrf_field() . '
                                            <button type="submit" class="btn btn-danger">
                                                Hapus
                                            </button>
                                            
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>';
                })
                ->rawColumns(['action'])
                ->make();
        }

        return view('pages.admin.patients.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.patients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PatientRequest $request)
    {
        $data = $request->all();
        Patient::create($data);
        return redirect()->route('dashboard.patient.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        return view('pages.admin.patients.show',[
            'item' => $patient
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        return view('pages.admin.patients.edit',[
            'item' => $patient
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $item = Patient::findOrFail($id);
        $item->update($data);
        return redirect()->route('dashboard.patient.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Patient::findorFail($id);
        $item->delete();

        return redirect()->route('dashboard.patient.index');
    }
}
