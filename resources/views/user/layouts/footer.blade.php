<!-- Footer -->

<div class="graduates">
  <h2 class="h2">Nous Contacter</h2>
  <div class="row" id="contact_form">
   
    <div class="col-md-5" style="">
      <form action="{{ route('contact.post') }}" method="POST" class=".form-background">
        @csrf
          <div class="">
            <p><input type="text" name="nom" value="{{ old('nom') }}" class="input input_contact @error('nom') is-invalid @enderror" value="{{ old('nom') }}" placeholder="Prenom et Nom"></p>
            @error('nom')
                <div class="messege_error">{{ $message }}</div>
            @enderror
          </div>
          <div class="">
            <p><input type="email" name="email" class="input input_contact @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Votre Adresse E-mail"></p>
            @error('email')
                <div class="messege_error">{{ $message }}</div>
            @enderror
          </div>
        <p>
          <textarea name="content" class="textatrea_contact @error('content') is-invalid @enderror" value="{{ old('content') }}" placeholder="content" id="" cols="30" rows="10"></textarea>
          @error('content')
            <div class="messege_error">{{ $message }}</div>
          @enderror
        </p>
        <p>
          <input type="submit" value="Envoyer" class="button_contact">
        </p>
      </form>
    </div>
    <div class="col-md-7" >
      <iframe style="margin-right:10px; " src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3130.429893472668!2d-17.4500145!3d14.7113977!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec173eabb264a3f%3A0x3b03193b00bf067c!2sEMPRO%20SN!5e1!3m2!1sfr!2ssn!4v1612532500375!5m2!1sfr!2ssn" width="650" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
  </div>
  {{-- <ul class="slides">
    <li>
      <div class="student-data">
        <div class="student-image">
          <img src="{{ asset('user/images/img1.jpg') }}" alt="">
        </div>
        <div class="student-details">
          <h2 class="student-name">Howard Brown</h2>
          <ul class="student-info">
            <li>Graduation: <strong>2011</strong></li>
            <li>Course: <strong>Management</strong></li>
            <li>Current job: <strong>Micro System INC.</strong></li>
          </ul>

          <p>Maxime facilis ducimus quibusdam quisquam minus dolore, illo, sequi reprehenderit ex ab officia laborum? Ipsam officiis delectus vel vitae nulla modi rerum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime facilis ducimus quibusdam quisquam minus dolore, illo, sequi reprehenderit ex ab officia laborum? Ipsam officiis delectus vel vitae nulla modi rerum.</p>
        </div>
        
      </div>
    </li>
    <li>
      <div class="student-data">
        <div class="student-image">
          <img src="{{ asset('user/images/img2.jpg') }}" alt="">
        </div>
        <div class="student-details">
          <h2 class="student-name">Howard Brown</h2>
          <ul class="student-info">
            <li>Graduation: <strong>2011</strong></li>
            <li>Course: <strong>Management</strong></li>
            <li>Current job: <strong>Micro System INC.</strong></li>
          </ul>

          <p>Maxime facilis ducimus quibusdam quisquam minus dolore, illo, sequi reprehenderit ex ab officia laborum? Ipsam officiis delectus vel vitae nulla modi rerum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime facilis ducimus quibusdam quisquam minus dolore, illo, sequi reprehenderit ex ab officia laborum? Ipsam officiis delectus vel vitae nulla modi rerum.</p>
        </div>
        
      </div>
    </li>
    <li>
      <div class="student-data">
        <div class="student-image">
          <img src="{{ asset('user/images/img3.jpg') }}" alt="">
        </div>
        <div class="student-details">
          <h2 class="student-name">Howard Brown</h2>
          <ul class="student-info">
            <li>Graduation: <strong>2011</strong></li>
            <li>Course: <strong>Management</strong></li>
            <li>Current job: <strong>Micro System INC.</strong></li>
          </ul>

          <p>Maxime facilis ducimus quibusdam quisquam minus dolore, illo, sequi reprehenderit ex ab officia laborum? Ipsam officiis delectus vel vitae nulla modi rerum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime facilis ducimus quibusdam quisquam minus dolore, illo, sequi reprehenderit ex ab officia laborum? Ipsam officiis delectus vel vitae nulla modi rerum.</p>
        </div>
        
      </div>
    </li>
  </ul> --}}
</div>

<footer class="site-footer">
  <p>Copyright &copy; 2020-{{ Carbon\carbon::now()->year }} EMPRO. Designed by EMPRO. <a href="{{ route('login') }}" style="opacity:0;"><span>EMPRO</span></a></p>

  <div class="social-links">
    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
    <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
    <a href="#" class="" style="background-color:green;"><i class="fa fa-instagram"></i></a>
    <a href="#" class="" style="background-color:red;"><i class="fa fa-youtube"></i></a>
  </div>
</footer>

<script src="{{ asset('user/js/jquery-1.11.1.min.js')}}"></script>
<script src="{{ asset('user/js/plugins.js')}}"></script>
<script src="{{ asset('user/js/app.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>
$('.logo-slider').slick({
    slidesToShow: 1,
    slidesToScroll:1,
    // dots:true,
    arrows:true,
    autoplay:true,
    autoplaySpeed:3000,
    infinite:true,
});
</script>