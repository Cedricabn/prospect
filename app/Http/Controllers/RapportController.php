<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prospect;
use Maatwebsite\Excel\Facades\Excel;

use App\Exports\RapportsExport;
use App\Models\Rapport;


class RapportController extends Controller
{
    public function index()
    {
        $rapports = Prospect::where('sale_concluded', true)->get();

        return view('rapports', compact('rapports'));
    }
    public function filtrerRapports(Request $request)
    {
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');
    
        // Récupérez la liste des rapports de prospection avec ventes conclues filtrés par période
        $rapports = Prospect::where('sale_concluded', true)
                            ->whereBetween('date', [$start_date, $end_date])
                            ->get();
    
        // Retournez la vue des rapports filtrés avec les rapports récupérés
        return view('rapport', compact('rapports', 'start_date', 'end_date'));
    }
    public function exporterRapports()
{
    $rapports = Prospect::where('sale_concluded', true)->get();
 return Excel::download(new RapportsExport($rapports), 'rapports.xlsx');
}

    

}
