<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <link rel="stylesheet" href="./css/sidebar.css">
    <link rel="stylesheet" href="{{asset('assets/css/hotels.css')}}">
    <title>Hotels</title>
</head>
<body>
@extends("temp")
@section("bodyContent")
      <!-- Room CARD -->
     <!-- Room CARD -->
     {{-- {{dd($place)}} --}}
     <section class="room wrapper2 top" id="room">
      <div class="container">
        <div class="heading">
          <h5>OUR Places</h5>
          <h2>Aswan places </h2>
        </div>
        <div class="content flex mtop">
          <div class="left grid2">
            <div class="box">
              <!-- <i class="fas fa-desktop"></i> -->
              <i class="fa-solid fa-bed"></i>
            
              <!-- <i class="fa-solid fa-bed-front"></i> -->
              <p>GARDEN-STATION</p>
              <h3></h3>
            </div>
            <div class="box">
              <i class="fas fa-dollar-sign"></i>
              <p>66L.E</p>
              <h3></h3>
            </div>
 
            <div class="box">
              <!-- <i class="fal fa-alarm-clock"></i> -->
              <i class="fa-regular fa-credit-card"></i>
              <p> Costs you bear</p>
              {{-- <h3><a href="" style="">Book Now</a></h3> --}}
            </div>
            {{-- <h3><a href="{{route('storeRegPlace.store',)}}" style="">Book Now</a></h3> --}}
          </div>
          <!-- room img -->
          <div class="right">
            {{-- <img src="./assets/asset/img/R (1).jfif" alt="" class="src"> --}}
            <img src="{{url('assets/140077313_2780379362217232_2902863178243584331_n.jpg')}}" alt="" style="width: 50rem; height:25rem;">
          </div>
        </div>
        <div>
          {{-- {{dd($roomInfo->RoomImg)}} --}}
  
          <div class="container my-5 " style="display:flex;
          justify-content: center;">
          <style>
            .imgs:hover{
  scale:1.2;  
  border: 7px  rgb(30, 100, 171) solid;       
   }
  
          </style>
            <div class="row">
              {{-- @foreach($place->placeImg as $img)
           <img src="{{url('http://localhost:8000/storage/imgs/'.$img->image)}}" alt="" class="imgs" style="width: 10rem; height:10rem; " >
              @endforeach --}}
            </div>
         
        </div>
        </div>
    
     <!-- Button trigger modal -->
  
  
  <!-- Modal -->

  </div>
    </section>
    @endsection
  
  </body>
  </html>









 




















  