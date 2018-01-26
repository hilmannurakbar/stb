<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\projectitem;
use PDF;
class PDFController extends Controller
{
    //
    public function pdf()
    {
    	$projectitem = projectitem::all();
    	$pdf = PDF::loadView('pdf', ['projectitem' => $projectitem]);
    	return $pdf -> download('projectitem.pdf'); 
    }
}
