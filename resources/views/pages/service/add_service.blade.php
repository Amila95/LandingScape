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

                      <form action="" method='post' >
                            {{csrf_field()}}  
                        <div class="body">
                        <h2 class="card-inside-title">Service Name</h2>
                        <div class="row">                        <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line focused">
                                            <input type="text" class="form-control"  placeholder="Service Name " />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6"></div>
                                </div>

                            <h2 class="card-inside-title">Description </h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="4" class="form-control no-resize" placeholder="Description"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2 class="card-inside-title">Image </h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input name="file" type="file" multiple />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <button  type="reset" class="btn btn-warning pull-right"  Value="Cancel">Cancel</button>
                                <button name="submit" type="submit" class="btn btn-primary pull-right"  Value="Add Service">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </section>
@endsection

