@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Error</div>
                <div class="text-danger" style="padding:5px 5px 5px 12px;">
                    Sorry, you are not allowed to access this website, as your age is under 18.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
