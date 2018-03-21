@extends('layouts.kami')

@section('content')

<!-- //navigation -->
    <!-- main-slider -->
    <div>
    <center>
        <img src="img/bgo.jpg" alt="" class="col-md-12" />
    </center>
    <!-- //main-slider -->
    <!-- //top-header and slider -->
    <!-- top-brands -->
    <div class="top-brands">
        <div class="container">
        <h2>Top selling offers</h2>
            
                <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                    
                    
                        

                        @php
                        $ket = App\Keterrangan::paginate(3);
                        @endphp
                        @foreach($ket as $data)
                            <div class="agile_top_brands_grids">
                                <div class="col-md-4 top_brand_left">
                                    <div class="hover14 column">
                                        <div class="agile_top_brand_left_grid">
                                            <div class="agile_top_brand_left_grid_pos">
                                                <img src="images/offer.png" alt=" " class="img-responsive" />
                                            </div>
                                            <div class="agile_top_brand_left_grid1">
                                                <figure>
                                                    <div class="snipcart-item block" >
                                                        <div class="snipcart-thumb">
                                                            <a href=#"><img title=" " alt=" " src="{{ asset('/img/'.$data->motorrrs->foto.'') }}" width="150" height="150" /></a>        
                                                            <p>{{$data->motorrrs->nama}}</p>
                                                            <div class="stars">
                                                                <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                                            </div>
                                                            <h4>{{$data->harga}}</h4>
                                                        </div>
                                                        
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 @endforeach
                            </div>
                        </div>
                            
                        
                    

            </div>
        </div>
    </div>
<!-- //top-brands -->
 <!-- Carousel
    ================================================== -->
    <!-- /.carousel -->   
<!--banner-bottom-->
                
<!--banner-bottom-->
<!--brands-->
    <div class="brands">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
        <p><center><img src="images/brand/rb1.png" alt=" " class="img-responsive" width="500" height="250" /></center></p>
       
        </div>
        <div class="item">
        <p><center><img src="images/brand/rb2.png" alt=" " class="img-responsive" width="500" height="250" /></center></p>
         
        </div>
        <div class="item">
        <p><center><img src="images/brand/rb3.png" alt=" " class="img-responsive" width="500" height="250" /></center></p>
          
        </div>

        <div class="item">
        <p><center><img src="images/brand/rb4.jpg" alt=" " class="img-responsive" width="500" height="250" /></center></p>
         
        </div>

        <div class="item">
        <p><center><img src="images/brand/rb5.jpg" alt=" " class="img-responsive" width="500" height="250" /></center></p>
         
        </div>
      </div>
    
    </div>
</div>
<!--//brands-->
<!-- new -->
    
<!-- //new -->

@endsection