<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ObstetricHistoryRequest;
use App\Http\Requests\PatientRequest;
use App\Models\ObstetricHistory;
use App\Models\Patient;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ObstetricHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = ObstetricHistory::with(['patient']);

            return Datatables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <div class="btn-group">
                            
                            <div class="show">
                                
                                <a class="btn btn-primary mr-1 mb-1" type="button"  
                                href="' . route('dashboard.obstetric.show', $item->id) . '">
                                    Lihat
                                </a>
                            </div>
                            <div class="edit">
                                <a class="btn btn-secondary mr-1 mb-1" type="button"  
                                href="' . route('dashboard.obstetric.edit', $item->id) . '">
                                    Edit
                                </a>
                            </div>
                            <div class="delete">        
                                <a class="btn btn-danger mr-1 mb-1  " href="#" data-toggle="modal" data-target="#obstetricDelete">             
                                    Hapus
                                </a>        
                            </div>
                                
                            
                        </div>
                        <div class="modal fade" id="obstetricDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                                        <form action="' . route('dashboard.obstetric.destroy', $item->id) . '" method="POST">
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

        return view('pages.admin.obstetrics.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Patient $patient)
    {
        return view('pages.admin.obstetrics.create', compact('patient'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ObstetricHistoryRequest $request, Patient $patient)
    {
        $data = $request->all();
        $data['patients_id'] = $patient->id;

        ObstetricHistory::create($data);

        return redirect()->route('dashboard.patient.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ObstetricHistory $obstetric)
    {
        return view('pages.admin.obstetrics.show',[
            'item' => $obstetric
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ObstetricHistory $obstetric)
    {
        return view('pages.admin.obstetrics.edit',[
            'item' => $obstetric
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
        $item = ObstetricHistory::findOrFail($id);
        $item->update($data);
        return redirect()->route('dashboard.obstetric.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = ObstetricHistory::findorFail($id);
        $item->delete();

        return redirect()->route('dashboard.obstetric.index');
    }
}
