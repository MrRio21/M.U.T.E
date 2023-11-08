<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{asset("assets/css/hotels.css")}}">
    <title>Hotels</title>
</head>
<body>
  @extends("temp")
  @section('bodyContent')
  
  
    <!-- HERO SECTION -->

    {{-- <section class="home" id="home" style="background-image:url('.assets/asset/img/hotel4.jpg')" >
        <div class="container">
      
       
          <p>Discover your best stay</p>
        </div>
    </section> --}}
    {{-- <h1  style="color:rgb(11, 9, 49);text-align:center">{{$hotelInfo->name}}</h1> --}}

      <!-- ABOUT HOTEL -->
      <section class="area top">
        <div class="container">
          <div class="heading">
            <h5>hotel info</h5>
            <h3>{{$hotelInfo ["name"]}}</h3>
          </div>
          <div class="content flex mtop">
            <div class="left">
              <img src="{{url('http://localhost:8000/storage/imgs/'.$hotelInfo->cover_img)}}" alt="" style="height: 16rem; width:23rem">

            </div>
            <div class="left   m-5">
              <ul>
                <li> <h3>{{$hotelInfo ["type"]}}</h3></li>
              </ul>
              <!-- DESCRIPTION IF EXIST -->
                <p> <h4>{{$hotelInfo ["address"]}}</h4><p>
            </div>
          </div>

     
        </div>
      </section>

      <!-- rooms type -->
      <section class="offer mtop" id="services">
        <div class="container">
          <div class="heading">
            <h5>ROOMS TYPE</h5>
            <h3>You can get what you need</h3>
          </div>
          <!-- room type -->
          <div class="content grid2 mtop">

            @foreach($rooms as $room)
            <div class="box flex" >
              <div class="left ">
                <img src="{{url('http://localhost:8000/storage/imgs/'.$room->cover_img)}}" alt="" style="height: 16rem; width:20rem">

              </div>
           
              <div class="right">
                <h4>{{$room->type}}</h4>
                <div class="rate flex">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <h3>{{$room->n_of_available_rooms}}</h3>
                <h2>{{$room->price}}L.E/day</h2>
                <button class="flex1">
                  <span>
                    <a href="{{route('roomm',['id'=>$room->id])}}">Show<i class='far fa-long-arrow-alt-right'></i></a>
                  </span>
                  <i class="fas fa-arrow-circle-right"></i>
                </button>
              </div>

             

          
          </div>
          @endforeach
          </div>

    




        </div>
      </section>
    

  @endsection
</body>
</html>












