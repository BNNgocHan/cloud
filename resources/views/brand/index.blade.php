<!DOCTYPE html>

<html>
    <head>
        <title>Manage Brand</title>
        
</head>
<body>
    <div id="wrapper">
        @include('brand.sidebar')
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-left">
                                <h2>Brand Management</h2>
                            </div>

                            <div class="pull-right">
                                <a class="btn btn-success" href="{{ route('brand.create') }}"> Create New Brand</a>
                            </div>
                        </div>
                    </div>

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <table class="table table-bordered">
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th width="500px">Action</th>
                        </tr>

                        @foreach($brands->reverse() as $key => $brands)

                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{ $brands->brandname }}</td>
                            <td>
                                <form action="{{ route('brand.destroy',$brands->id) }}" method="POST">
                                    <a class="btn btn-info" href="{{ route('brand.show',$brands->id) }}">Show</a>
                                    <a class="btn btn-primary" href="{{ route('brand.edit',$brands->id) }}">Edit</a>
                                    <a class="btn btn-primary" href="{{ route('brand.destroy',$brands->id) }}">Delete</a>
                                </form>
                            </td>
                        </tr>

                        @endforeach

                    </table>
                </div>
            </div>
            @include('layout.footer')


            @include('layout.js')
        </div>
    </div>
</body>
</html>