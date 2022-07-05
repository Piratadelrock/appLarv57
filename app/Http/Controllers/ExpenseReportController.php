<?php

namespace App\Http\Controllers;

use App\ExpenseReport;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ExpenseReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('expenseReport.index',[
            'expenseReports' => ExpenseReport::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('expenseReport.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // valores correctos o no, filtrados
        $validData = $request->validate([
            'title'=>'required|min:3'
        ]);
        // dd($valideData);
        $report = new ExpenseReport();
        $report-> title = $validData['title'];
        $report-> save();

        return redirect('expenseReports');
    }

    /**
     * Display the specified resource.
     *
     * @param  ExpenseReport $expenseReport
     * @return \Illuminate\Http\Response
     */
    public function show(ExpenseReport $expenseReport)
    {
        return view('expenseReport.show',['report'=>$expenseReport]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //id representado que viene desde la ruta,
        $report = ExpenseReport::findOrFail($id);
        return view('expenseReport.edit',['report'=>$report]);
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
        // dd('put update');
        $report = ExpenseReport::find($id);
        $report ->title = $request->get('title') ;
        $report-> save();
        
        return redirect('expenseReports');
    }

    public function confirmDelete($id)
    {
        // dd('CONFIRM DELETE '. $id);
        $report = ExpenseReport::find($id);

        return view('expenseReport.confirmDelete', [
            'report' => $report
        ]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $report = ExpenseReport::find($id);
        $report-> delete();
        
        return redirect('expenseReports');
    }
    

}
