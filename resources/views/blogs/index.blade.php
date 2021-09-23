@extends('layouts.app')
@section('content')

<div class="page-wrapper">
       <div class="container-fluid">

  <div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Posts</h4>
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

         <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                
                                <div class="row">
                                    <div class="col-md-8">
                                

                                        <br>
                    <div class="card-header bg-light "></div>
                      <div class="panel-body">
                        <div class="table-responsive">
                            <table id="data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Date</th>

                                        @canany(['isSuperAdmin','isAdmin'])
                                        <th>Actions</th>
                                        @endcan
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($blogs as $blog)
                                        <tr class="odd gradeX">
                                            <td>{{++$i}}</td>
                                            <td>{{$blog->title}}</td>
                                            <td>{{$blog->category->name}}</td>
                                            <td>{{$blog->created_at}}</td>
                                          
                                            @canany(['isSuperAdmin','isAdmin'])
                                            <td>

                                                
                                               <form method="POST" action="{{route('blog.del',$blog->id)}}">
                                                    @method('DELETE')
                                                    @csrf
                                                    
                                                <!--  -->

                                                    <input type="submit" class="btn btn-danger delete-cat" value="delete">
                                                </form>
                                            </td>
                                            <td>
                                             <a class="btn btn-primary" href="{{route('blog.edit',$blog->id)}}">Edit</a>

                                            </td>

                                          
                                             @endcan
                                        </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                                    </div>


                                    <div class="col-md-4">
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
                    
                      <th>Action</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                   @foreach($cats as $index => $category)
                      <tr class="odd gradeX">
                          <td>{{ ($cats->currentpage()-1) * $cats->perpage() + $index + 1 }} </td>
                          <td>{{$category->name}}</td>
                         
                          <td><a class="btn btn-danger fa fa-trash" href="{{ route('category.delete',$category->id) }}"> delete</a> </td>
                          
                      </tr>
                      
                  @endforeach
                 
                  </tbody>
                </table>
              </div>
            </div>
            
          </div>
                                      
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


