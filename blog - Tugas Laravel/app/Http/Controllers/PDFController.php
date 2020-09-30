<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    public function pdf()
    {
        $data = "Halo Apa kabar semuanya?";
        $pdf = PDF::loadView('pdf.invoice', compact('data'));
        return $pdf->download('invoice.pdf');
    }
}
