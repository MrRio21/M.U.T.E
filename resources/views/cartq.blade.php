        
@extends("temp")
@section('bodyContent')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:300;400;600;700;800&display=swap" rel="stylesheet">

        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{asset('./assets/css/addCart.css')}}" rel="stylesheet">
    </head>

    <body>





        <div class="wrapper">
            <div class="sidebar">
                <div class="sidebar-text d-flex flex-column h-100 justify-content-center text-center">
                    <img class="mx-auto d-block w-75 bg-primary img-fluid rounded-circle mb-4 p-3" src=".asset/asset/img/team-4.jpg" alt="Image">
                    <h1 class="font-weight-bold">
                        {{-- {{auth()->user->name}} --}}
                    </h1>
                    <p class="mb-4">
                        {{-- {{auth()->user->phone}} --}}
                           
                    </p>
                    <p class="mb-4">
                        {{-- {{auth()->user->email}} --}}
                    </p>
                    <div class="d-flex justify-content-center mb-5">
                        <a class="btn btn-outline-primary mr-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-primary mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-primary mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-primary mr-2" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                    <a  class="btn btn-lg btn-block btn-primary mt-auto">M.U.T.E.</a>
                </div>
                <div class="sidebar-icon d-flex flex-column h-100 justify-content-center text-right">
                    <i class="fas fa-2x fa-angle-double-right text-primary"></i>
                </div>
            </div>
            <div class="content">
  
                <!-- Carousel Start -->
                <div class="container p-0">
                    <div id="blog-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="w-100" src="./assets/R (1).jfif" alt="Image">
                                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                    <h2 class="mb-3 text-white font-weight-bold">Your Trips In Aswan</h2>
                                    <div class="d-flex text-white">
                                        <small class="mr-2"><i class="fa fa-calendar-alt"></i> 01-Jan-2045</small>
                                        <small class="mr-2"><i class="fa fa-folder"></i> Web Design</small>
                                        <small class="mr-2"><i class="fa fa-comments"></i> 15 Comments</small>
                                    </div>
                                    <a href="" class="btn btn-lg btn-outline-light mt-4">Read More</a>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="w-100" src="./assets/R (1).jfif" alt="Image">
                                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                    <h2 class="text-white font-weight-bold">Lorem ipsum dolor sit amet</h2>
                                    <div class="d-flex">
                                        <small class="mr-2"><i class="fa fa-calendar-alt"></i> 01-Jan-2045</small>
                                        <small class="mr-2"><i class="fa fa-folder"></i> Web Design</small>
                                        <small class="mr-2"><i class="fa fa-comments"></i> 15 Comments</small>
                                    </div>
                                    <a href="" class="btn btn-lg btn-outline-light mt-4">Read More</a>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="w-100" src="./assets/R (1).jfif" alt="Image">
                                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                    <h2 class="text-white font-weight-bold">Lorem ipsum dolor sit amet</h2>
                                    <div class="d-flex">
                                        <small class="mr-2"><i class="fa fa-calendar-alt"></i> 01-Jan-2045</small>
                                        <small class="mr-2"><i class="fa fa-folder"></i> Web Design</small>
                                        <small class="mr-2"><i class="fa fa-comments"></i> 15 Comments</small>
                                    </div>
                                    <a href="" class="btn btn-lg btn-outline-light mt-4">Read More</a>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                </div>
                {{-- {{dd(auth()->user()->name)}} --}}
                <!-- Carousel End -->
                
                
                <!-- Blog List Start -->
                <form action="{{route('PayForMUTE')}}" method="get">
                    @csrf
                <div class="container bg-white pt-5">
               
                    <div class="row blog-item px-3 pb-5">
                        @if($BookedRooms)
                        @foreach($BookedRooms as $room)
                       
                        <div class="col-md-5">
                            <img class="img-fluid mb-4 mb-md-0" src="img/blog-1.jpg" alt="Image">
                        </div>
                      
                        <div class="col-md-7">
                            <h3 class="mt-md-4 px-md-3 mb-2 py-2 bg-white font-weight-bold">{{isset($order->User->name)?$order->User->name:Ahmed}}</h3>
                            <div class="d-flex mb-3">
                                <small class="mr-2 text-muted"><i class="fa fa-calendar-alt"></i> 01-Jan-2045</small>
                                <small class="mr-2 text-muted"><i class="fa fa-folder"></i> Web Design</small>
                                <small class="mr-2 text-muted"><i class="fa fa-comments"></i> 15 Comments</small>
                            </div>
                          
                            <p>
                             <h3>   Booked Rooms Status :</h3>
                                {{$room->room_status}}
                                {{$room->Hotel->name}}
                            </p>
                            <a class="btn btn-link p-0" href="">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                        @endforeach
                        @endif
                    </div>


                    <div class="row blog-item px-3 pb-5">
                        @if($BookedTourguide)
                        @foreach($BookedTourguide as $room)
                       
                        <div class="col-md-5">
                            <img class="img-fluid mb-4 mb-md-0" src="img/blog-1.jpg" alt="Image">
                        </div>
                      
                        <div class="col-md-7">
                            <h3 class="mt-md-4 px-md-3 mb-2 py-2 bg-white font-weight-bold">{{isset($order->User->name)?$order->User->name:Ahmed}}</h3>
                            <div class="d-flex mb-3">
                                <small class="mr-2 text-muted"><i class="fa fa-calendar-alt"></i> 01-Jan-2045</small>
                                <small class="mr-2 text-muted"><i class="fa fa-folder"></i> Web Design</small>
                                <small class="mr-2 text-muted"><i class="fa fa-comments"></i> 15 Comments</small>
                            </div>
                          
                            <p>
                             <h3>   Booked Rooms Status :</h3>
                                {{$room->room_status}}
                                {{$room->Hotel->name}}
                            </p>
                            <a class="btn btn-link p-0" href="">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                        @endforeach
                        @endif
                    </div>



                    <div class="row blog-item px-3 pb-5">
                       
                        @if($orderedPlaces)
                      <h1> Number of Places You Booked is : {{count($orderedPlaces)}} Places</h1>
                         <div class="col-md-5">
                     {{-- <img class="img-fluid mb-4 mb-md-0" src="./assets/imgs/3.png.jpg" alt="Image"> --}}
                    </div>
                    <div class="col-md-7">
                        <h3 class="mt-md-4 px-md-3 mb-2 py-2 bg-white font-weight-bold">
                        </h3> 
                        {{-- {{(auth()->user()->name)}} --}}
                          @endif
                        </div>
                        @if($totalPaidInPlaces !=0)
                        <h1 align="center">Your Payment {{$totalPaidInPlaces[0]->sum + $totalPaidInRooms[0]->sum + $totalPaidInRooms[0]->sum * $order->n_of_days + $totalPaidInTourguide}} EGP</h1>
                        <h1>totalPaidInPlaces :{{$totalPaidInPlaces[0]->sum}} EGP</h1>
                        @endif
                        @if($totalPaidInRooms!=0  )
                        <h1>totalPaidInRooms :{{isset($totalPaidInRooms[0]->sum)}} EGP per day <br>
                            totalPaidInRooms in {{$order->n_of_days}} days  :{{$totalPaidInRooms[0]->sum * $order->n_of_days}} EGP </h1>
                            @endif
                       
                            @if($totalPaidInTourguide[0]->sum !=0 )
                        <h1>totalPaidInTourguide :{{$totalPaidInTourguide[0]->sum}}EGP</h1>
                        @endif
                    </div>

                    <button class="btn btn-success" type="submit">send</button>

                  
                </div>
                <!-- Blog List End -->
                
              </form>
    <form action="{{route('cancelOrder',['orderID'=>$order->id])}}" method="POST">
        @csrf
        <button type="submit" class="btn btn-danger "style="margin-left:50rem">cancel the Trip</button>
      </form>      

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
     


        <!-- Template Javascript -->
        <script src="assets/asset/Js/addCart.js"></script>


</body>
</html>

@endsection