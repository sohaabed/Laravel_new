
<x-panel-layout>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h1 style="color: red;opacity:80%;">DASHBOARD</h1>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">TOTAL READERS</div>
                            <div class="number count-to" data-from="0" data-to="{{$total_visit}}" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">list</i>
                        </div>
                        <div class="content">
                            <div class="text">TOTAL CATEGORIES</div>
                            <div class="number count-to" data-from="0" data-to="{{$total_category}}" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">edit</i>
                        </div>
                        <div class="content">
                            <div class="text">TOTAL NEWS</div>
                            <div class="number count-to" data-from="0" data-to="{{$total_new}}" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person</i>
                        </div>
                        <div class="content">
                            <div class="text">TOTAL USERS</div>
                            <div class="number count-to" data-from="0" data-to="{{$total_user}}" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- #END# Widgets -->
            <!-- CPU Usage -->
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6">
                                    <h2>CPU USAGE (%)</h2>
                                </div>
                                <div class="col-xs-12 col-sm-6 align-right">
                                    <div class="switch panel-switch-btn">
                                        <span class="m-r-10 font-12">REAL TIME</span>
                                        <label>OFF<input type="checkbox" id="realtime" checked><span class="lever switch-col-cyan"></span>ON</label>
                                    </div>
                                </div>
                            </div>
                            <ul class="header-dropdown m-r--5">
                               
                            </ul>
                        </div>
                        <div class="body">
                            <div id="real_time_chart" class="dashboard-flot-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# CPU Usage -->
           
           

            <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="card">
                        <div class="header">
                            <h2>TASK INFOS</h2>
                            
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover dashboard-task-infos">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Category</th>
                                            <th>Total News</th>
                                            <th>Readers</th>
                                            <th>Progress</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{$count=0}}
                                       
                                        @foreach($categories as $category)
                                       
                                        <tr >
                                            
                                            <td>{{$count++}}</td>
                                            <td>{{$category->title}}</td>
                                            <td>{{$category->total_news}}</td>
                                            <td>{{$category->visitor}}</td>
                                            <td>
                                                {{$progress=$category->visitor/$total_visit*100}}
                                                <div class="progress">
                                                    <div class="progress-bar @if($progress<50) bg-red @elseif($progress>50&&$progress<60) bg-orange @else bg-green @endif"
                                                     role="progressbar"  aria-valuemin="0" aria-valuemax="100"  ></div>
                                               
                                                    </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                       
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="container " style=" margin-bottom:10px">

<a href="{{route('home')}}" style="color:red"> Go to the website<span class="material-icons">trending_flat</span></a>

</div>
                </div>
                <!-- #END# Task Info -->
                <!-- Browser Usage -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="header">
                            <h2>BROWSER USAGE</h2>
                            
                        </div>
                        <div class="body">
                            <div id="donut_chart" class="dashboard-donut-chart"></div>
                        </div>
                    </div>
                </div>
                <!-- #END# Browser Usage -->
            </div>
    
        </div>
    </section>
</x-panel-layout>