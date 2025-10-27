<!DOCTYPE html>
<html lang="en">
    <head>
          <meta charset="UTF-8"/>
          <title>Articals</title>
          <link rel="stylesheet" href="{{ asset('css/style.css') }}">
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

          <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"/> -->

    </head>

    <body>

         <!-- **********************************************nav******************************************** -->

             <header class="head">
                <!-- <a href="#" class="logo">nave </a> -->
                 <img src= "{{ asset('bookimages/logobook.jpg') }}" alt="this is logo photo" class="logo">
                <ul class="nav-ul">
                     <li class="nav-li"><a href="/home">Home</a></li>
                     <li class="nav-li"><a href="#">About </a></li>
                     <li class="nav-li"><a href="#">Blog </a></li>
                     <li class="nav-li"><a href="#footer">Contact</a></li>

                      @guest
                            <!-- المستخدم غير مسجّل الدخول -->
                            <li class="nav-li"><a href="{{ route('login') }}" class="btn btn-outline-light">Login</a></li>
                            <li class="nav-li"><a href="{{ route('register') }}" class="btn btn-primary">Register</a></li>
                    @endguest

                    @auth
                        <!-- الرابط يظهر فقط للـ admin -->
                        @if(auth()->user()->role === 'admin')
                         <li class="nav-li"><a href="{{ url('/books') }}">Book Admin</a></li>
                         @endif

                        <!-- زر تسجيل الخروج -->
                      <li class="nav-li">
                         <form method="POST" action="{{ route('logout') }}">
                             @csrf
                              <button type="submit" style="background:none; border:none; color:white; cursor:pointer;">
                                   Logout ({{ Auth::user()->name }})
                              </button>
                         </form>
                     </li>
                 @endauth

                </ul>
             </header>

             <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
             <script src="{{ asset('js/arti.js') }}"></script>
             <!-- <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script> -->
    </body>

</html>
