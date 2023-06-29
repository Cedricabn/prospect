<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class RapportsExport implements FromCollection, WithHeadings
{
    protected $rapports;

    public function __construct($rapports)
    {
        $this->rapports = $rapports;
    }

    public function collection()
    {
        return $this->rapports;
    }

    public function headings(): array
    {
        return [
            'Numero deprospect',
            'Nom Agent',
            'Nom Client',
            'Adresse Client',
            'Date',
            'Heure debut',
            'Heure fin',
            'Duree', 
            'Produit',
            'Observations Client',    
            'Conclue?',
        ];
    }
}
