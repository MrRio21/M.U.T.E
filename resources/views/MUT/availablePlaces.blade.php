<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


    @extends("temp")
    @section('bodyContent')

    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Custom places </h6>
                <h1>Our Places</h1>
            </div>




       <form action="{{route('bookPlaces',['order'=>$order])}}" method="POST" >
                 @csrf
         @if(!empty($availablePlaces))
         <div class="row pb-3">
            @foreach ($availablePlaces as $place )

               <div class="col-lg-4 col-md-6 mb-4 pb-2">

    <div class="blog-item">
        <div class="position-relative">
            <img class="img-fluid w-100" src="{{url('http://localhost:8000/storage/imgs/'.$place->cover_img)}}" style="height:15rem;width:8rem">
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
                <a type="button" href="{{route('showPlace',['placeID'=>$place->id])}}"><div style="background-color: rgb(6, 15, 40);padding:0.5rem;color:rgb(237, 237, 245)">show More</div></a>
                <a  class="mx-1"><i class="fa fa-link m-1  border border-2 rounded-5" style="color: rgb(246, 247, 252);"></i> Book  <input type="checkbox" name="place_id[]"  value="{{$place->id}}" class="btn btn-warning"></a><span ></span>
            </a>
        </div>
    </div>

    <button type="submit" style="background-color: rgb(6, 15, 40);padding:0.5rem;color:rgb(237, 237, 245); height:50px;">Book</button>
</div>


                </div>

            @endforeach

            <div class="">
                <input type="text" name="percent" value="{{ $percent }}" hidden>
                <input type="text" name="restOfBudget" value="{{ $restOfBudget }}" hidden>
                <button type="submit" style="background-color: rgb(6, 15, 40);padding:0.5rem;color:rgb(237, 237, 245); height:50px;">Book</button>
            </div>

         @else
               <form action="{{route('getAvailableTourguides',['order'=>$order->id])}}">
                  <input type="text" name="restOfBudget" value="{{ $restOfBudget }}" hidden>
    <div type="submit">Next step</div>
               </form>
             <form action="{{route('getAvailablePlaces',['order'=>$order->id])}}">
                <input type="text" name="percent" value="{{ $percent }}" hidden>

                <input type="text" name="restOfBudget" value="{{ $restOfBudget }}" hidden>
                <div type="submit" style="margin-left:500rem">back step</div>
             </form>
             <form action="{{route('MUTE',['order'=>$order])}}">
                <input type="text" name="restOfBudget" value="{{ $restOfBudget }}" hidden>
                <div type="submit" style="margin-left:10rem">Finish My trip ^^ </div>
             </form>
             <form action="{{route('cancelOrder',['orderID'=>$order->id])}}" method="POST">
              @csrf
              <div type="submit" class="btn btn-danger "style="margin-left:80rem">cancel the Trip</div>
             </form>

         </div>
         @endif
        </form>

        </div>





@endsection
</body>
</html>
