@extends('index')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Services</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                <table>
                    <thead>
                        <tr>
                            <th>Service </th>
                            <th> Description</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($services)>0)
                            @foreach($services ->all() as $service)
                                <tr>
                                    <td>{{$service->service_name}}</td>
                                    <td>{{$service->description}}</td>
                                    <td>{{$service->img_path}}</td>
                                    <td>pending</td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection