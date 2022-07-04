@extends('layouts.base')
@section('content')
<div class="content">
    <div class="row">
        <div class="col">
            <h1>Reports</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-primary" href="/expenseReports/create">Create a new report</a>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <table class="table">
                @foreach ($expenseReports as $expenseReport)
                    <tr>
                        <td>{{$expenseReport->title}}</td>
                        <td>
                            <a class="btn btn-success" href="expenseReports/{{$expenseReport->id}}/edit">Edit</a>
                        </td>
                        <td>
                            <a class="btn btn-danger" href="expenseReports/{{$expenseReport->id}}/confirmDelete">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>


       
        </div>
    </div>
</div>
@endsection