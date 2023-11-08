
@extends("temp")
@section('bodyContent')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Bentham|Playfair+Display|Raleway:400,500|Suranna|Trocchi" rel="stylesheet">



    <title>Document</title>
</head>
<body>
    {{-- {{dd($restOfBudget)}} --}}


<section class="blog top mt-3" id="blog">
    <div class="container">
      <div class="heading">
        <h5>OUR PLACES</h5>
        <h3>Discover your best trip in Aswan</h3>
      </div>
      <h1>The rest of Your Budget After Booking the Rooms  is {{$restOfBudget}}</h1>
<!-- CARD ==================================================================-->

<form action="{{route('bookPlaces',['order'=>$order])}}" method="POST" >
  @csrf
@if(!empty($availablePlaces))
  @foreach ($availablePlaces as $place )

  <div class="wrapper" >
    <div class="product-img">      
     <img src="{{url('http://localhost:8000/storage/imgs/'.$place->cover_img)}}" height="250" width="327">
    </div>
    <div class="product-info" style="text-align: center;">
      <div class="product-text">
        <h3 class="title">{{$place->name}}</h3>
        <span class="post">{{$place->id}}</span>
        <h5 class="name">
          <a href="#">
            <a >{{$place->name}}</a>
          </a>
        </h5>   
        <span> {{$place->price}}</span> 
        </div>
      <div class="product-price-btn">
       
        <a type="button" href="{{route('showPlace',['placeID'=>$place->id])}}"><button>show More</button></a>
        <a  class="mx-1"><i class="fa fa-link m-1  border border-2 rounded-5" style="color: rgb(12, 115, 249);"></i> Book  <input type="checkbox" name="place_id[]"  value="{{$place->id}}" class="btn btn-warning"></a><span ></span>

      </div>
    </div>
  </div>
  @endforeach

    <input type="text" name="percent" value="{{ $percent }}" hidden>
    <input type="text" name="restOfBudget" value="{{ $restOfBudget }}" hidden>
    <button type="submit">Book</button>

   

  @else
    <form action="{{route('getAvailableTourguides',['order'=>$order->id])}}">
        <input type="text" name="restOfBudget" value="{{ $restOfBudget }}" hidden>
        <button type="submit">Next step</button>
    </form>
    <form action="{{route('getAvailablePlaces',['order'=>$order->id])}}">
        <input type="text" name="percent" value="{{ $percent }}" hidden>
  
        <input type="text" name="restOfBudget" value="{{ $restOfBudget }}" hidden>
        <button type="submit">back step</button>
    </form>
    <form action="{{route('MUTE',['order'=>$order])}}">
        <input type="text" name="restOfBudget" value="{{ $restOfBudget }}" hidden>
        <button type="submit">Finish My trip ^^ </button>
    </form>
    <form action="{{route('cancelOrder',['orderID'=>$order->id])}}" method="POST">
      @csrf
      <button type="submit" class="btn btn-danger "style="margin-left:80rem">cancel the Trip</button>
    </form>
  </div>
  @endif
</section>
</form>









<div class="container-fluid py-5">
  <div class="container pt-5 pb-3">
      <div class="text-center mb-3 pb-3">
          <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Custom places </h6>
          <h1>Our Places</h1>
      </div>

    
      
      <div class="row pb-3">
        <form action="{{route('bookPlaces',['order'=>$order])}}" method="POST" >
           @csrf
          @if(!empty($availablePlaces))
           @foreach ($availablePlaces as $place )
        
            <div class="col-lg-4 col-md-6 mb-4 pb-2">
       
              <div class="blog-item">
                  <div class="position-relative">
                      <img class="img-fluid w-100" src="{{url('http://localhost:8000/storage/imgs/'.$place->cover_img)}}" height="250" width="327">
                    <div class="blog-date">
                          <h6 class="font-weight-bold mb-n1">{{$place->id}}</h6>
                          <small class="text-white text-uppercase">{{$place->price}}</small>
                    </div>
                  </div>
                  <div class="bg-white p-4">
                      <div class="d-flex mb-2">
                          <a class="text-primary text-uppercase text-decoration-none" href="">Aswan</a>
                          <span class="text-primary px-2">|</span>
                          <a class="text-primary text-uppercase text-decoration-none" href="">{{$place->name}}</a>
                      </div>
                      <a class="h5 m-0 text-decoration-none" href="">
                        <a type="button" href="{{route('showPlace',['placeID'=>$place->id])}}"><button>show More</button></a>
                        <a  class="mx-1"><i class="fa fa-link m-1  border border-2 rounded-5" style="color: rgb(12, 115, 249);"></i> Book  <input type="checkbox" name="place_id[]"  value="{{$place->id}}" class="btn btn-warning"></a><span ></span>
                
                      </a>
                  </div>
              </div>
       
           </div>
           @endforeach

           <input type="text" name="percent" value="{{ $percent }}" hidden>
           <input type="text" name="restOfBudget" value="{{ $restOfBudget }}" hidden>
           <button type="submit">Book</button>
  
     
  
          @else
          <form action="{{route('getAvailableTourguides',['order'=>$order->id])}}">
            <input type="text" name="restOfBudget" value="{{ $restOfBudget }}" hidden>
           <button type="submit">Next step</button>
          </form>
       <form action="{{route('getAvailablePlaces',['order'=>$order->id])}}">
          <input type="text" name="percent" value="{{ $percent }}" hidden>
    
          <input type="text" name="restOfBudget" value="{{ $restOfBudget }}" hidden>
          <button type="submit">back step</button>
       </form>
       <form action="{{route('MUTE',['order'=>$order])}}">
          <input type="text" name="restOfBudget" value="{{ $restOfBudget }}" hidden>
          <button type="submit">Finish My trip ^^ </button>
       </form>
       <form action="{{route('cancelOrder',['orderID'=>$order->id])}}" method="POST">
        @csrf
        <button type="submit" class="btn btn-danger "style="margin-left:80rem">cancel the Trip</button>
       </form>
       @endif
      </div>
 
  </div>



</div>











</html>






































