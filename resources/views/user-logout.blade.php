@extends('layouts.logout-header')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Good Bye {{ Auth::user()->name }} </div>

                <div class="panel-body">
                    We hope to meet you again!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
