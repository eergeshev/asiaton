<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use Facades\PDF;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function catalog($id){
        $catalog = Catalog::findOrFail($id);

        $pdf = \App::make('dompdf.wrapper');
        $pdf->set_paper('a4','landscape');

        $output = '<style>
                        @page {
                            size: a3 landscape;
                            margin: 0;
                            padding: 0;
                        }
                        .pdf-image {
                            width: 100%;
                        }
                    </style>
                    <img class="pdf-image" src="../public/storage/'.$catalog->pdf_image.'">';
        $pdf->loadHTML($output);
        return $pdf->stream();

    }
}
