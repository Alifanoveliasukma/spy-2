<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Stencil+Text&family=Cookie&family=Pacifico&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

        <!-- Styles -->
            <link href="{{ asset('index.css') }}" rel="stylesheet">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">

              <a class="navbar-brand" href="#">
                  <img src="{{ asset('spy/image/1.png') }}">
              </a>

              <button class="navbar-toggler" type="button">
                <span class="navbar-toggler-icon"></span>
              </button>

              
              <div class="navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <div class="menu">
                    <a class="nav-link active"href="#">Beranda</a>
                    <a class="nav-link" href="#">Donasi</a>
                    <a class="nav-link" href="#">Kegiatan</a>
                    <a class="nav-link" href="#">Bergerak Dibidang</a>
                  </div>

                  <div class="getStarted">
                      <div class="polygon">
                          <div class="clipath"></div>
                      </div>
                      <div class="buttonWrapper">
                        <a href="#" class="nav-link"><img class="icon-dompet" src="{{ asset('icon/icon-dompet.png') }}">Donasi</a>
                      </div>
                  </div>

                </div>
              </div>

            </div>
        </nav>
        <div class="app-container">
            <div class='flex-1'>
              <div class='group-1'>
                <div class='text-1'>
                  Membuat <span>hidup</span> seseorang menjadi <span>lebih baik</span> dengan memberikan milikmu.
                </div>
                <div class='text-2'>
                “Aku dan orang yang menanggung anak yatim (kedudukannya) di surga seperti ini”, kemudian beliau shallallahu 'alaihi wa sallam mengisyaratkan jari telunjuk dan jari tengah beliau shallallahu 'alaihi wa sallam, serta agak merenggangkan keduanya.” (HR. Bukhari)
                </div>
                <div class='group-1'>
                  <div class='button-1'>
                    <p class='btn-text'>Donasi Sekarang</p>
                  </div>
                  <div class='button-2'>
                    <img class="img-empat" src="{{ asset('spy/image/4.png') }}"><span class='text-btn'>Lihat Video</span>
                  </div>
                </div>
              </div>
              <div class='image'>
                <img src="{{ asset('spy/image/2.png') }}">
              </div>
            </div>
            <div class='main'>
              <div class='flex-2'>
                <img src="{{ asset('spy/image/3.png') }}">
                <div class='about'>
                  <h4>Tentang Kami</h4>
                  <h3>Apa Sih Sahabat Peduli Yatim Tuh ?</h3>
                  <p class='p-1'>Sahabat Peduli Yatim adalah sebuah komunitas sosial agama, dengan konsep mengadakan santunan dari masjid ke masjid setiap bulannya.</p>
                  <div class='flex-3'>
                    <div class='satu'>
                      <p class='angka-satu'>5</p><p class='t-satu'>Tahun Berdiri</p>
                    </div>
                    <div class='dua'>
                      <p class='angka-dua'>40</p><p class='t-dua'>Orang Volunteer SPY</p>
                    </div>
                    <div class='tiga'>
                      <p class='angka-tiga'>56</p><p class='t-tiga'>Kegiatan Terencana</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class='section-bidang'>
                  <h4 class='text-satu'>Bergerak Dibidang</h4>
                  <h3 class='text-dua'>Dibidang Apa Aja Ya?</h3>
              </div>

              <div class="banner">
                  <div class="wrapperBanner">
                      <div class="imagePreview">
                        <img src="{{ asset('spy/image/6.png') }}">
                      </div>
  
                  </div>
              </div>
             
              <div class='section-kegiatan' >
                <div class='desc'>
                  <h4 class='text-1'>Kegiatan</h4>
                  <h3 class='text-2'>Rangkaian Kegiatan SPY</h3>
                </div>
                <div class='container'>
                    <div class='card-1'>
                        <div class="container-card">
                            <img src="{{ asset('spy/image/7.png') }}">
                            <div class="text">
                                <h5>Kegiatan Santunan Bulanan SPY Ke-55</h5>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam ratione laborum ipsam aut sequi</p> 
                            </div>
                            <a class="btn" href="#" >Lihat Detail</a>
                            <div class="button"><h5 >Santunan</h5></div>
                        </div>
                    </div>
                    <div class='card-1'>
                        <div class="container-card">
                            <img src="{{ asset('spy/image/8.png') }}">
                            <div class="text">
                                <h5>Kegiatan Santunan Bulanan SPY Ke-55</h5>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam ratione laborum ipsam aut sequi</p> 
                            </div>
                            <a class="btn" href="#" >Lihat Detail</a>
                            <div class="button"><h5 >Santunan</h5></div>
                        </div>
                    </div> 
                    <div class='card-1'>
                      <div class="container-card">
                          <img src="{{ asset('spy/image/8.png') }}">
                          <div class="text">
                              <h5>Kegiatan Santunan Bulanan SPY Ke-55</h5>
                              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam ratione laborum ipsam aut sequi</p> 
                          </div>
                          <a class="btn" href="#" >Lihat Detail</a>
                          <div class="button"><h5 >Santunan</h5></div>
                      </div>
                    </div> 
                    <div class='card-1'>
                      <div class="container-card">
                          <img src="{{ asset('spy/image/8.png') }}">
                          <div class="text">
                              <h5>Kegiatan Santunan Bulanan SPY Ke-55</h5>
                              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam ratione laborum ipsam aut sequi</p> 
                          </div>
                          <a class="btn" href="#" >Lihat Detail</a>
                          <div class="button"><h5 >Santunan</h5></div>
                      </div>
                    </div>                        
                </div>
              </div>
              <div class='section-faq' >
                  <div class='flex-content' >
                    <div class='desc'>
                        <h4>Kenali Kami</h4>
                        <h3>Pertanyaan yang Sering Diajukan</h3>
                    </div>
                    <div class='accordion'>
                      <div class="contentBx">
                        <div class="label">How Lorem Work ?</div>
                        <div class="content">
                          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel, aliquam?</p>
                        </div>
                        <hr size="3">
                      </div>
                    
                      <div class="contentBx">
                        <div class="label">How Lorem Work ?</div>
                        <div class="content">
                          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel, aliquam?</p>
                        </div>
                        <hr size="4">
                      </div>
                    
                      <div class="contentBx">
                        <div class="label">How Lorem Work ?</div>
                        <div class="content">
                          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel, aliquam?</p>
                        </div>
                        <hr size="4">
                      </div>
                    
                    </div>
                  </div>
                </div>
           
            
            </div>
              <div class='section-footer'>
                <div class='icon'>
  
                </div>
                <div class='text'>
  
                </div>
              </div>
           
        </div>

        {{-- javascript --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script>
          const accordion = document.getElementsByClassName
          ('contentBx');

          for (i = 0; i<accordion.length; i++ ){
            accordion[i].addEventListener('click', function(){
              this.classList.toggle('active')
            })
          }
        </script>
    </body>
</html>
