@extends('layouts.base')
@section('content')
<div class="content">
    <div class="row">
        <div class="col">
            <h1>Reports</h1>
            <table class="table">
                @foreach ($expenseReports as $expenseReport)
                    <tr>
                        {{-- title es la columna que llamamos de la tabla --}}
                        <td>{{$expenseReport->title}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection