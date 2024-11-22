@extends('layouts.app')

@section('content')
<div class="blogs">
  {{-- Hero --}}
  <div class="hero">
    <div class="wrapper">
      <h1 data-aos="fade-right" data-aos-delay="200"><span>Blogs</span></h1>
      <p data-aos="fade-up" data-aos-delay="200">
        Stay updated with the latest news,
        industry trends, and stories from QStrike.
      </p>
    </div>
  </div>
  {{-- Blog lists --}}
  <div class="blog-list">
    <div class="wrapper">
      <div class="wrapper__cont1">
        <ul>
          <li>
            <div class="img-cont">
              <img src="http://qstrikeinov.test/wp-content/uploads/2024/11/placewhy-holder.jpg" alt="">
            </div>
            <div class="text-cont">
              <h4>Clients' Visits</h4>
              <p>
                We recently had the pleasure of welcoming
                the New Balance team, along representative
                from fabric suppliers in Taiwan, to our company,
                A big thank you to our dedicated team for extending...
              </p>
              <h5>Read more...</h5>
            </div>
          </li>
        </ul>
      </div>
      <div class="wrapper__cont2"></div>
    </div>
  </div>

  
</div>
@endsection

