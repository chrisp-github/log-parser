@extends('layouts.app')

@section('title', 'Process Log')

@section('sidebar')
    @parent
@endsection

@section('content')
    <h1>Process Log</h1>

    <form method="POST" action="/logparser/public/parselog" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="exampleInputFile">Log input</label>
            <input type="file" name="file" id="exampleInputFile">
        </div>

        <button type="submit" class="btn btn-default">Submit</button>
    </form>
@endsection