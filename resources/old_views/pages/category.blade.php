@extends('layouts.app')

@section('content')


<div class="row">
  <div class="col-md-8">

    <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header bg-primary text-white">
           
              <h4>Categories</h4>
         
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>S/N</th>
                      <th>Name</th>
                      <th>Description</th>
                    
                      <th>Action</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                   @foreach($categories as $index => $category)
                      <tr class="odd gradeX">
                          <td>{{ ($categories->currentpage()-1) * $categories->perpage() + $index + 1 }} </td>
                          <td>{{$category->name}}</td>
                          <td>{{$category->description}}</td>
                         
                          <td><a class="btn btn-danger fa fa-trash" href="{{ route('category.delete',$category->id) }}"> delete</a> </td>
                          
                      </tr>
                      
                  @endforeach
                 
                  </tbody>
                </table>
              </div>
            </div>
            
          </div>
    
  </div>
  <div class="col-md-4">
     <div class="card mb-3">
            <div class="card-header bg-primary text-white">
           
              <h4>Add Category</h4>
         {{--      <a href="#" class="text-white" data-toggle="modal" data-target="#addSaleModal">
                <span class="float-right">
                  <i class="fa fa-plus"></i>
                  Add New Entry
                </span>
              </a> --}}
            </div>
            <div class="card-body">

     <form class="form-horizontal" action="{{route('addcategory')}}" method="POST">
                                @csrf
                                <fieldset>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Name</label>
                                        <div class="col-md-8">
                                            <input type="text" name="name" class="form-control" placeholder="Enter wallet address" required/>
                                        </div>
                                    </div>

                              
                                      <div class="form-group">
                                        <label class="col-md-4 control-label">Description</label>
                                        <div class="col-md-8">
                                            <textarea name="description" class="form-control" rows="4" placeholder="Enter Description" required ></textarea>
                                        </div>
                                    </div>
                                                                      
                                    <div class="form-group">
                                        <div class="col-md-8 col-md-offset-4">
                                            <button type="submit" class="btn btn-sm btn-primary m-r-5">Submit</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                          </div>
    
  </div>
  
</div>
<div>
         
        
        <!-- Sticky Footer -->

      </div>
@endsection
