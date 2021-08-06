

<x-panel-layout>

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
                                <div class="col-lg-3"> <a href="{{route('admin.category.create')}}" class="add btn btn-info font-bold " style="font-size:large;opacity: 70%;">Add category  <span class=" material-icons font-bold " style="font-size:x-large;top:3px">add</span> </a></div>
                                    <div class="col-lg-5"></div>
                                    <div class="col-lg-3" style="padding:0px;"><input class="form-control "  type="search" name ="search" placeholder="Search" aria-label="Search" ></div>
                                    <div class="col-lg-1" style="padding: 3px 3px 0px 10px;"> <button class="search btn btn-danger" style="margin: 0px;opacity: 70%;" type="submit">Search</button></div>
                                </form>
                            </div>
                            @if (session()->has('success')) 
      <div class=" alert alert-success" style="opacity: 70%;">
        {{session()->get('success')}} 
      </div>
     @endif 

                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr style="background:red; color:white;opacity: 80%;">
                
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Readers</th>
                                            <th>Total news</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr style="background:red; color:white;opacity: 80%;">
                                            
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Readers</th>
                                            <th>Total news</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($categories as $category)
                                        <tr>
                                            
                                            <td>{{$category->title}}</td>
                                            <td>{{$category->description}}</td>
                                            <td><span @if($category->status=="active") class="btn btn-success" @else class="btn btn-danger "@endif> {{$category->status}}</span></td>
                                            <td>{{$category->visitor}}</td>
                                            <td>{{$category->total_news}}</td>
                                            <td>
                                                <a href="{{route('admin.category.edit',$category->id)}}"><span class="material-icons btn btn-primary " style=" margin-right: 20px; font-size: large;opacity: 80%">mode_edit</span></a>
                                               <form action="{{route('admin.category.delete',$category->id)}}" method="post" style="display: inline;" >
                                                  @csrf 
                                                  @method('delete')
                                                <button type="submit" id="delete" class=" btn btn-danger" style="opacity: 80%"> <span class="material-icons " style="font-size: 20px;top:2px;opacity: 80%">delete</span>
                                                </button>   
                                            </form>
                                            </td>

                                        </tr>
                                        
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <div class="container " style=" margin-bottom:10px">

<a href="{{route('home')}}" style="color:red"> Go to the website<span class="material-icons">trending_flat</span></a>

</div>
</span></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->

        </div>
    </section>

</x-panel-layout>