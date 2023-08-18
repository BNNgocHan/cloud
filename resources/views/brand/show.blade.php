@extends('brand.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Show Brand</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('brand.index') }}">Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ $brand->brandname }}</h4>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .product-image {
        max-width: 200px;
    }

    .container {
        margin-top: 30px
    }

    .card-body {
        margin-left: 10px
    }
</style>
@endsection
