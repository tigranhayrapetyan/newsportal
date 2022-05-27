@extends('layouts.master_home')

@section('home_content')


<main id="main">



<!-- ======= Contact Section ======= -->
<div class="map-section">
  <iframe style="border:0; width: 100%; height: 350px;" src="https://maps.google.com/maps?q=aghababyans&t=&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0" allowfullscreen></iframe>
</div>

<section id="contact" class="contact">
  <div class="container">

    <div class="row justify-content-center" data-aos="fade-up">

      <div class="col-lg-10">

        <div class="info-wrap">
          <div class="row">
            <div class="col-lg-4 info">
              <i class="icofont-google-map"></i>
              <h4>Location:</h4>
             
              <p>{{$contacts->address}}<hr></p>

        
            </div>

            <div class="col-lg-4 info mt-4 mt-lg-0">
              <i class="icofont-envelope"></i>
              <h4>Email:</h4>

              <p>{{$contacts->email}}<hr></p>

            </div>

            <div class="col-lg-4 info mt-4 mt-lg-0">
              <i class="icofont-phone"></i>
              <h4>Call:</h4>

              <p>{{$contacts->phone}}<hr></p>

            </div>
          </div>
        </div>
      </div>

    </div>

    <div class="row mt-5 justify-content-center" data-aos="fade-up">
      <div class="col-lg-10">
        <div class="div">  
          @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>{{session('success')}}</strong> 
          @endif
          </div>
       
        <form action="{{route('form.message')}}" method="POST">
         @csrf
          <div class="form-row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validate"></div>
            </div>
            <div class="col-md-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
            <div class="validate"></div>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
            <div class="validate"></div>
          </div>

          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
      </div>

    </div>

  </div>
</section><!-- End Contact Section -->

</main><!-- End #main -->

@endsection