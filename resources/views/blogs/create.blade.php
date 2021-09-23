@extends('layouts.app')
@section('content')

<div class="page-wrapper">
       <div class="container-fluid">

  <div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Bloging</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
                
            </ol>
         
        </div>
    </div>
</div>


<div class="row">

         <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3 border-right">
                                        <h4>Create New Post</h4>
                                    </div>
                                    <div class="col-md-7">
                                        
                                    </div>
                                    
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-8">
                                        <form action="{{route('blog.add')}}" method="POST" enctype="multipart/form-data">
                                          @csrf
                                          <div class="form-group row">
                                            <label for="text" class="col-12 col-form-label">Enter Post Title</label> 
                                            <div class="col-12">
                                              <input id="text" name="title" placeholder="Enter Title here" class="form-control here" required="required" type="text">
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label for="text" class="col-12 col-form-label">Select Post Category</label> 
                                            <div class="col-12">
                                             <select class="form-control" name="category_id" required>
                                                <option value="">Select Category</option>
                                                @foreach($cats as $cat)
                                                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                                                @endforeach
                                            </select>
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label for="textarea" id="textarea" class="col-12 col-form-label">Post Content</label> 
                                            <div class="col-12">
                                              <textarea id="textarea" name="content" cols="40" rows="5" class="form-control" required></textarea>
                                            </div>
                                          </div> 

                                           <div class="form-group row">
                                            <label for="text" class="col-12 col-form-label">Tags / keywords</label> 
                                            <div class="col-12">
                                              <input id="text" name="tags" placeholder="Enter Tags here" class="form-control here" required="required" type="text" required>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="text" class="col-12 col-form-label">Post Image</label> 
                                            <div class="col-12">
                                              <input type="file" name="image" class="form-control here" required="required">
                                            </div>
                                          </div>


                                          <div class="form-group row">
                                            
                                            <div class="col-12">
                                              <button type="submit" class="btn btn-sm btn-primary">Create New Post</button>
                                            </div>
                                          </div>


                                        </form>

                                        <br>
                   
                                    </div>
                                    <div class="col-md-4 ">
                                       
                                      <div class="card mb-3" style="max-width: 18rem;">
                                              <div class="card-header bg-light ">Categories</div>
                                              <div class="card-body">
                                                <form action="{{route('category.add')}}" method="POST">
                                                     @csrf
                                                  <div class="form-group row">
                                                    <div class="col-9">
                                                      <input id="tags" name="name" placeholder="New Category" class="form-control here" type="text" required>
                                                    </div>
                                                    <div class=" col-3">
                                                      <button name="submit" type="submit" class="btn btn-primary">Add</button>
                                                    </div>
                                                    
                                                  </div> 
                                                </form>
                                              </div>
                                            </div> 


             <!--          <div class="panel-body">
                        <div class="table-responsive">
                            <table id="data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Categories</th>
                                        @canany(['isSuperAdmin','isAdmin'])
                                        <th>Actions</th>
                                        @endcan
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($cats as $cat)
                                        <tr class="odd gradeX">
                                            
                                            <td>{{$cat->name}}</td>
                                          
                                            @canany(['isSuperAdmin','isAdmin'])
                                            <td>


                                                <form method="POST" action="{{route('category.del',$cat->id)}}">
                                                    @method('DELETE')
                                                    @csrf
                                                  
                                                    <input type="submit" class="btn btn-danger delete-cat" value="delete">
                                                </form>




                                            </td>

                                          
                                             @endcan
                                        </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>  -->

                                    </div>
                                    
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
    
</div>

</div>
</div>

@endsection
@section('extra-script')



@endsection

