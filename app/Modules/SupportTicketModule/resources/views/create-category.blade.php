@extends('dashboard') @section('title','User List')

@section('css')
@stop

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 align-self-center">
                <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Category Management</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="#">Category</a></li>
                            <li class="breadcrumb-item"><a href="#">Create</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- basic table -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Add Category</h4>

                            <div class="row">
                                <div class="col-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <form class="mt-4" method="post" action="{{ url('/category/store') }}">
                                                @csrf
                                                <div class="form-body">
                                                    <label>Category Name </label>
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" name="category" value="{{ old('name') }}"
                                                                        placeholder="Name">
                                                                        @if($errors->has('category'))
                                                                            <label id="label-error" style="color: red" class="error" for="user_role">{{$errors->first('category')}}</label>
                                                                        @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <fieldset class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" id="status" name="status"  value="true"> Status
                                                                    </label>
                                                                </fieldset>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-actions mt-2">
                                                    <div class="text-left">
                                                        <button type="submit" class="btn btn-info">Submit</button>
                                                        <button type="reset" class="btn btn-dark">Reset</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@stop

@section('js')
@stop

