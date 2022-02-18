<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use PDF;

class EmployeeController extends Controller
{
    public function showEmployees()
    {
        $employees = Employee::all();
        return view('index', compact('employees'));
    }

    // Generate PDF
    public function createPDF()
    {
        // retreive all records from db
        $employees = Employee::all();

        // share data to view
        view()->share('employees', $employees);
        $pdf = PDF::loadView('pdf_view', compact('employees'));
        
        // download PDF file with download method
        return $pdf->download('employee_2022.pdf');
    }
}
