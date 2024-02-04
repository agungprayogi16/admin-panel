<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\YourModel; // Gantilah dengan model yang sesuai

class ChartController extends Controller
{
    public function lineChart()
    {
        $data = YourModel::all(); // Gantilah dengan query atau data yang sesuai
        return view('line-chart', compact('data'));
    }
}
