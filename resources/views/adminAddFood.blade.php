@extends('layouts.adminTemplate')

@section('content')

<div class="container-fluid">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            @if(session('message'))
                <div class="alert alert-success alert-dismissible">
                    {{ session('message') }}
                </div>
            @endif
                
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Add New Food</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="#" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="foodTitle">Food Title</label>
                            <input type="text" name="food_id" class="form-control" id="foodTitle" placeholder="Ex: Adobo">
                        
                        </div>
                        <div class="form-group">
                            <label for="InputDescription">Description</label>
                            <textarea type="text" name="description" class="form-control" id="InputDescription" placeholder="Enter Description" maxlength="200"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="InputAuthor">Price</label>
                            <input type="text" name="Price" class="form-control" id="InputPrice" placeholder="Enter Price">
                            
                        </div>                        
                        <div class="form-group">
                            <label for="InputCategories">Categories</label>
                            <select name="categories" id="InputCategories" class="form-control">
                                <option value="Beverage">Beverage</option>
                                <option value="Desert">Desert</option>
                                <option value="MainDish">Main Dish</option>
                            </select>
                            
                        </div>
                      
                        <div class="form-group">
                            <label for="exampleInputFile">Image</label>
                            <div class="input-group">
                                <input class="form-control" type="file" name="image">
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                        
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
