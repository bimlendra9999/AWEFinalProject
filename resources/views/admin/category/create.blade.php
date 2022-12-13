@extends('admin.layout.master')

@section('content')

<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                <p class="font-weight-bold">Add New Category</p>
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.category')}}" class="btn btn-success pull-right">All Category</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal col-md-8">
                            <div class="form-group">
                                <label class="control-label">Category Name</label>
                                <input type="text" placeholder="Category Name" class="form-control input-md">
                            </div>

                            <div class="form-group">
                                <label class="control-label">Category Slug</label>
                                <input type="text" placeholder="Category Slug" class="form-control input-md">
                            </div>
                            <button type="submit" class="btn btn-primary form-control input-md">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
