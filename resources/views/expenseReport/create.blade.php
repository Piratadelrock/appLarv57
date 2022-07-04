@extends('layouts.base')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col">
                <h1>New Report</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a class="btn btn-secondary" href="/expenseReports">Back</a>
            </div>
        </div>

        <div class="row">
            <div class="col">
                @if($error->any())
                    <div class="alert alert-danger">no information has been added</div>
                @endif       
                <form action="/expenseReports" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" name="title" id="title">
                    </div>
                    <button class="btn btn-primary" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
