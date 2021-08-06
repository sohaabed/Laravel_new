<x-user-panel-component>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">

            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">

                            <h1 style="color:red;opacity: 80%;">
                                CATEGOTY TABLE
                            </h1>

                        </div>
                        <div class="body">


                            <div>

                                <form class="row">

                                    <div class="col-lg-6">
                                   
   <select  name="category" class="selectpicker" style="width: 300px;" >
      <option value="">All Categories</option>
       @foreach($categories as $category)
       <option value="{{$category->id}}"@if (old('category')==$category->id) selected @endif >{{$category->title}}</option>
       @endforeach
   </select>
   <style>
       button.btn.dropdown-toggle.btn-default.bs-placeholder{
           width: 500px !important;
       }
   </style>

                                    </div>
                                    <div class="col-lg-4" style="padding:0px;"><input class="form-control " type="search" name="search" placeholder="Search" aria-label="Search"></div>
                                    <div class="col-lg-1" style="padding: 3px 3px 0px 10px;"> <button class="search btn btn-danger" style="margin: 0px;opacity: 70%;" type="submit">Search</button></div>
                                </form>
                            </div>
                            <div >
                                <a href="{{route('user.content.create')}}" class="add btn btn-info font-bold " style="font-size:x-large;opacity: 70% !important;text-align:center">Add New
                                    <span class=" material-icons font-bold " style="font-size:x-large;top:3px;">add new</span>
                                </a>
                            </div>

                            @if (session()->has('success'))
                            <div class=" alert alert-success" style="opacity: 60%;margin-top: 10px;">
                                {{session()->get('success')}}
                            </div>
                            @endif

                            <div class="table-responsive" style="margin-top: 30px;">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>

                                        <tr style="background:red; color:white;opacity: 80%;">
                                            
                                            <th>Category Name</th>
                                            <th>Description</th>
                                            <th>Readers</th>
                                            <th>image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr style="background:red; color:white;opacity: 80%;">
                                            
                                            <th>Category Name</th>
                                            <th>Description</th>
                                            <th>Readers</th>
                                            <th>image</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @if($contents->total()!=0)
                                        @foreach($contents as $content)
                                        <tr >
                                       
                                           
                                            <td style=" line-height: 121px;">{{$content->category->title}}</td>
                                            <td style=" line-height: 121px;">{{$content->short_description}}</td>
                                            <td style=" line-height: 121px;">{{$content->visitor}}</td>
                                            <td style=" line-height: 121px;"><img src="{{$content->image_url}}" alt="{{$content->image_url}}" height="100px" width="80px"></td>
                                            
                                            <td style=" line-height: 121px;">
                                                <a href="{{route('user.content.edit',$content->id)}}"><span class="material-icons btn btn-primary " style=" margin-right: 20px; font-size: large;opacity: 80%">mode_edit</span></a>
                                                
                                                <form action="{{route('user.content.delete',$content->id)}}" method="post" style="display: inline;">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" id="delete" class=" btn btn-danger" style="opacity: 80%"> <span class="material-icons " style="font-size: 20px;top:2px;opacity: 80%">delete</span>
                                                    </button>
                                                </form>
                                            </td>

                                        </tr>

                                        @endforeach
                                      @else
                                      <tr>
                                          <td colspan="5" style="text-align:center;font-weight: bold" > There is no content for you</td>
                                      </tr>
                                      @endif
                                    </tbody>
                                </table>
                            </div>

                            <div class="container d-felx justify-content-center">

{{ $contents->links() }}

</div>

<div class="container " style=" margin-bottom:10px">

<a href="{{route('home')}}" style="color:red"> Go to the website<span class="material-icons">trending_flat</span></a>

</div>
                        </div>
                 
<style>
    span.page-link {
    background: red !important;
    border: white !important;
    opacity: 85%;
    color: white !important;
}
</style>
                    </div>
                    
                </div>


            </div>
            <!-- #END# Basic Examples -->
    
</div>
        </div>
    </section>

</x-user-panel-component>