


@extends("temp")
@section('bodyContent') 


<section class="section about" >
    <!-- <img src="../../assets/img/footer-dec.png" style="width: max-content; position:absolute ; z-index: -1"> -->
  <style>
    
.about-text,
.about-item-text {
  color:  hsl(0, 0%, 53%);
  font-size: 1.2rem;
 
}


.about-text { margin-bottom: 30px; }



.about-item {
  display: flex;
  align-items: flex-start;
  gap: 15px;
}

.about-item-icon {
  background:   #082565;
  color: white;
  font-size: 26px;
  padding: 16px;
  border-radius: 50%;
  margin-top: 5px;
}

.about-item-title {
  color: hsl(0, 0%, 40%);
  font-weight: 600;
  margin-bottom: 5px;
}



  /**
   * ABOUT
   */

   .about .container {
      display: grid;
      grid-template-columns: 0.8fr 1fr;
      align-items: center;
      gap: 30px;
    }
  
    .about-content { margin-bottom: 0; }



    @media (min-width: 1200px) {
  
    .container { max-width: 1150px; }

  
  
    .about .container { grid-template-columns: 0.7fr 1fr; }
  
  }

    </style>
  
    <div class="container" style="margin-top: 2rem">

        <div class="about-content">

    

            <h1 class="h1 section-title" style="color:#00085b">Discover The Land of Gold</h1>
            <ul class="about-list">

                <li class="about-item">

                    <div class="about-item-icon">
                        <i name="compass"></i>
                    </div>

                    <div class="about-item-content">
                        <h3 class="h3 about-item-title">Booked your Hotel</h3>

                        <p class="about-item-text">
                            Discover your best stay for your Trip                        </p>
                    </div>

                </li>

                <li class="about-item">

                    <div class="about-item-icon">
                        <i name="briefcase"></i>
                    </div>

                    <div class="about-item-content">
                        <h3 class="h3 about-item-title">Begin Your Trip </h3>

                        <p class="about-item-text">
                            custom your Places                       </p>
                    </div>

                </li>

                <li class="about-item">

                    <div class="about-item-icon">
                        <i name="umbrella"></i>
                    </div>

                    <div class="about-item-content">
                        <h3 class="h3 about-item-title">Book Your Tourguide</h3>

                        <p class="about-item-text">Get your trip Accompanying</p>
                    </div>

                </li>

            </ul>

            <a href="{{route('MUT.create')}}" style="background:#0c0248; color:azure; font-weight:bold" class="btn">Begin Your Trip & custom your Places</a>

        </div>

        <figure class="about-banner">
            <img src="./assets/asset/img/about-banner.png" width="556" height="700" loading="lazy" alt="" class="w-100">
        </figure>
     
    </div>
</section>

@endsection