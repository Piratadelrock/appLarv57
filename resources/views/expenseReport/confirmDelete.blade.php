@extends('layouts.base')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col">
                <h1>Delete Report {{$report->id}}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a class="btn btn-secondary" href="/expenseReports">Back</a>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <form action="/expenseReports/{{$report->id}}" method="POST">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
