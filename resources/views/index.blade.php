<x-home-component>
        <!-- Top News Start-->
        <div class="top-news">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 tn-left">
                        <div class="row tn-slider">
                          @foreach($important as $import)
                            <div class="col-md-6">
                                <div class="tn-img">
                                    <img src="{{$import->image_url}}"  height="344px" width="540px"/>
                                    <div class="tn-title">
                                        <a  href="{{route('home.show',$import->id)}}">{{$import->short_description}}</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-6 tn-right">
                        <div class="row">
                            @foreach($tops as $top)
                            <div class="col-md-6">
                                <div class="tn-img">
                                    <img src="{{$top->image_url}}" height="172px" width="270" />
                                    <div class="tn-title">
                                        <a href="{{route('home.show',$top->id)}}">{{$top->short_description}}</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top News End-->

        <!-- Category News Start-->
        <div class="cat-news">
            <div class="container">
                <div class="row">
                    @foreach($categories as $category)
                              
                    <div class="col-md-6">
                        <h2>{{$category->title}}</h2>
                        <div class="row cn-slider">

                            @foreach($contents as $content)
                            @if($content->category_id==$category->id)
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <img src="{{$content->image_url}}" height="223px" width="285px" />
                                    <div class="cn-title">
                                        <a href="{{route('home.show',$content->id)}}">{{$content->short_description}}</a>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                          
                        </div>
                    </div>
                    @endforeach
                  
                    
                </div>
            </div>
        </div>
        <!-- Category News End-->
        
        <!-- Tab News Start-->
        <div class="tab-news">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="nav nav-pills nav-justified">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="#featured">Featured News</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#latest">Latest News</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div id="featured" class="container tab-pane active">
                                @foreach($important_3 as $important)
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="{{$important->image_url}}" />
                                    </div>
                                    <div class="tn-title">
                                        <a href=" {{route('home.show',$important->id)}} ">{{$important->short_description}}</a>
                                    </div>
                                </div>
                               @endforeach
                            </div>
                            
                                
                               
                            <div id="latest" class="container tab-pane fade">
                            @foreach($most_recent as $recent)   
                            <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="{{$recent->image_url}}" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="{{route('home.show',$recent->id)}}">{{$recent->short_description}}</a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <ul class="nav nav-pills nav-justified">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="#m-viewed">Most Viewed</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#m-recent">Most Recent</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div id="m-viewed" class="container tab-pane active">
                                @foreach($most_viewed as $viewed)
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="{{$viewed->image_url}}" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="{{route('home.show',$viewed->id)}}">{{$viewed->short_description}}</a>
                                    </div>
                                </div>
                                @endforeach
                                
                            </div>
                            
                            <div id="m-recent" class="container tab-pane fade">
                            @foreach($most_recent as $recent)   
                            <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="{{$recent->image_url}}" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="{{route('home.show',$recent->id)}}">{{$recent->short_description}}</a>
                                    </div>
                                </div>
                                @endforeach
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tab News Start-->

        <!-- Main News Start-->
        <div class="main-news">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="row">
                            @foreach($acontents as $content)
                           
                            <div class="col-md-4">
                                <div class="mn-img">
                                    <img src="{{$content->image_url}}"  style="height: 143.44px;"/>
                                    <div class="mn-title">
                                        <a href="{{route('home.show',$content->id)}}">{{$content->short_description}}</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                           
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="mn-list">
                            <h2>Read More</h2>
                            <ul>
                            @foreach($acontents as $content)
                                <li><a href="{{route('home.show',$content->id)}}">{{$content->short_description}}</a></li>
                               @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main News End-->

        </x-home-component>
