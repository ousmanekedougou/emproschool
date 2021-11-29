<!-- Footer -->

<div class="slider_container">
  <h1 class="slider_h1">Nos Partenaires</h1>
  <div class="logo-slider">
    <!-- <div class="item"><a href=""><img src="{{ asset('user/img/part/1.png') }}" alt=""></a></div>
    <div class="item"><a href=""><img src="{{ asset('user/img/part/2.png') }}" alt=""></a></div>
    <div class="item"><a href=""><img src="{{ asset('user/img/part/3.png') }}" alt=""></a></div>
    <div class="item"><a href=""><img src="{{ asset('user/img/part/5.png') }}" alt=""></a></div>
    <div class="item"><a href=""><img src="{{ asset('user/img/part/6.png') }}" alt=""></a></div>
    <div class="item"><a href=""><img src="{{ asset('user/img/part/7.png') }}" alt=""></a></div> -->
    <div class="item"><a href=""><img src="{{ asset('user/img/part/mairie.png') }}" alt=""></a></div>
    <div class="item"><a href=""><img src="{{ asset('user/img/part/ief.jpeg') }}" alt=""></a></div>
  </div>
</div>	

<div class="graduates">
  <h2 class="h2">Nous Contacter</h2>
  <div class="row">
    <div class="col-md-12">
          <iframe style="margin-right:10px; " src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3130.429893472668!2d-17.4500145!3d14.7113977!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec173eabb264a3f%3A0x3b03193b00bf067c!2sEMPRO%20SN!5e1!3m2!1sfr!2ssn!4v1612532500375!5m2!1sfr!2ssn" width="100%" height="380" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
  </div>

  <div class="row text-center" style="margin-top: 50px;">

    <div class="col-md-4 text-center" > 
      <div class="feature rounded-icon">
        <span class="feature-icon icone-2"><i class="fa fa-envelope"></i></span>
        <p style="font-size: 18px;font-weight:700;margin-left:-10px;display:flex">
          contactempro@gmail.com
        </p>
      </div>
    </div>

    <div class="col-md-4 text-center" >
      <div class="feature rounded-icon">
        <span class="feature-icon icone-2"><i class="fa fa-mobile"></i></span>
        <p style="font-size: 18px;font-weight:700;margin-left:-10px;display:flex">
          774285785 / 772751270
        </p>
      </div>
    </div>

    <div class="col-md-4 text-center" >
      <div class="feature rounded-icon">
        <span class="feature-icon icone-2"> <a target="blank" style="color: #fff;" href="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3130.429893472668!2d-17.4500145!3d14.7113977!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec173eabb264a3f%3A0x3b03193b00bf067c!2sEMPRO%20SN!5e1!3m2!1sfr!2ssn!4v1612532500375!5m2!1sfr!2ssn"><i class="fa fa-map-marker-alt"></i></a></span>
        <p style="font-size: 18px;font-weight:700;margin-left:-10px;display:flex">
          Ecole Biscuiterie A
        </p>
      </div>
    </div>

  </div>

   
  <div class="row" id="contact_form" style="margin-top: 30px;">

    <div class="col-md-3">
     
    </div>
   
    <div class="col-md-6">
      <form action="{{ route('user.contact.post') }}" method="POST" class=".form-background">
        @csrf
          <div class="">
            <p>
            <input type="text" required name="nom" value="{{ old('nom') }}" class="input input_contact @error('nom') is-invalid @enderror" value="{{ old('nom') }}" placeholder="Prenom et Nom"></p>
            @error('nom')
                <div class="messege_error">{{ $message }}</div>
            @enderror
          </div>
          <br>
          <div class="">
            <input type="email" required name="email" class="input input_contact @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Votre Adresse E-mail"></p>
            @error('email')
                <div class="messege_error">{{ $message }}</div>
            @enderror
          </div>
        <p>
        <br>
          <textarea name="content" required class="textatrea_contact @error('content') is-invalid @enderror" value="{{ old('content') }}" placeholder="Votre message" id="" cols="30" rows="10"></textarea>
          @error('content')
            <div class="messege_error">{{ $message }}</div>
          @enderror
        </p>
        <p>
        <br>
          <input type="submit" value="Envoyer" class="button_contact">
        </p>
      </form>
    </div>

    <div class="col-md-2"></div>
 
  </div>
</div>

<footer class="site-footer">
  <p>Copyright &copy; 2020-{{ Carbon\carbon::now()->year }} EMPRO. Designed by EMPRO. <a href="{{ route('login') }}" style="opacity:0;"><span>EMPRO</span></a></p>

  <div class="social-links">
    <a target="_blank" href="https://www.facebook.com/EMPRO-422269758592923" class="facebook"><i class="fab fa-facebook"></i></a>
    <!-- <a target="_blank" href="https://twitter.com/home" class="twitter"><i class="fab fa-twitter"></i></a> -->
    <a target="_blank" href="https://www.linkedin.com/in/empro-senegal-ba99191a1/" class="google-plus"><i class="fab fa-linkedin-in"></i></a>
    <!-- <a target="_blank" href="#" class="" style="background-color:green;"><i class="fab fa-instagram"></i></a> -->
    <a target="_blank" href="https://www.youtube.com/channel/UCryRHsNsbHZyD1CQx1szBcw" class="" style="background-color:red;"><i class="fab fa-youtube"></i></a>
  </div>
</footer>

<script src="{{ asset('user/js/jquery-1.11.1.min.js')}}"></script>
<script src="{{ asset('user/js/plugins.js')}}"></script>
<script src="{{ asset('user/js/app.js')}}"></script>
<script src="{{ asset('user/js/app.pooper.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>
$('.logo-slider').slick({
    // slidesToShow: 1,
    // slidesToScroll:1,
    // // dots:true,
    // arrows:true,
    // autoplay:true,
    // autoplaySpeed:3000,
    // infinite:true,


    	slidesToShow: 5,
				slidesToScroll:1,
				dots:true,
				arrows:true,
				autoplay:true,
				autoplaySpeed:3000,
				infinite:true,
				responsive: [{
				breakpoint: 768,
				settings: {
					slidesToShow: 4
				}
				}, {
				breakpoint: 520,
				settings: {
					slidesToShow: 3
				}
				}]
});
</script>

  <script>
    $(document).ready(function(){
        $("#myModal").modal('show');
    });
</script>

<script>
  $(document).ready(function(){
      var progressPath = document.querySelector('.pregress-wrap path');
      var pathLenght = progressPath.getTotalLength();
      progressPath.style.transition = progressPath.style.webkitTransition = 'none';
      progressPath.style.strokeDasharray = pathLenght + ' ' + pathLenght;
      progressPath.style.strokeDashoffset = pathLenght;
      progressPath.getBoundingClientRect();
      progressPath.style.transition = progressPath.style.webkitTransition = 'stroke-dashoffset 10ms linear';

      var updateProress = function(){
        var scroll = $(window).scrollTop();
        var height = $(document).height() - $(window).height();
        var progress = pathLenght - (scroll * pathLenght / height);
        progressPath.style.strokeDashoffset = progress;
      }

      updateProress();
      $(window).scroll(updateProress);
      
      var ofsset = 50;
      var duration = 550;

      jQuery(window).on('scroll',function(){
        if (jquery(this).scrollTop > ofsset) {
          jquery('.pregress-wrap').addClass('active-progress');
        }else{
           jquery('.pregress-wrap').removeClass('active-progress');
        }
      })


        jQuery(window).on('click',function(event){
          event.preventDefault();
          jquery('html, body').animate({scrollTop:0} ,duration);
          return false;
      })
  })
</script>


