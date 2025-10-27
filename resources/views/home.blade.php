<!DOCTYPE html>
<html lang="en">
    <head>
          <meta charset="UTF-8"/>
          <link rel="stylesheet" href="{{ asset('css/style.css') }}">
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
          <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"/> -->
          <title>Articals</title>
    </head>

    <body>

         <!-- **********************************************nav******************************************** -->

             <header class="head">

                 <img src="{{ asset('bookimages/logobook.jpg') }}" alt="this is logo photo" class="logo">
                <ul class="nav-ul">
                     <li class="nav-li"><a href="#home">Home</a></li>
                     <li class="nav-li"><a href="#">About </a></li>
                     <li class="nav-li"><a href="#">Blog </a></li>
                     <li class="nav-li"><a href="#footer">Contact</a></li>

                      @guest
                            <!-- المستخدم غير مسجّل الدخول -->
                            <li class="nav-li-btn"><a href="{{ route('login') }}" class="btn btn-outline-light">Login</a></li>
                            <li class="nav-li-btn"><a href="{{ route('register') }}" class="btn btn-primary">Register</a></li>
                    @endguest

                    @auth

                        <!-- الرابط يظهر فقط للـ admin -->
                        @if(auth()->user()->role === 'admin')
                         <li class="nav-li-admi"><a href="{{ url('/books') }}" class="btn btn-outline-light">Book Admin</a></li>
                         @endif

                        <!-- زر تسجيل الخروج -->
                      <li class="nav-li">
                         <form method="POST" action="{{ route('logout') }}">
                             @csrf
                              <button type="submit"   class="btn btn-outline-light" >
                                   Logout ({{ Auth::user()->name }})
                              </button>
                         </form>
                     </li>
                 @endauth

                </ul>
             </header>
            <!-- ***********************************************home******************************************* -->

             <div class="home" id="home">
                   <div class="write">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing
                        <br>
                         amet consectetur adipisicing elit
                         amet consectetur adipisicing
                        <br>
                         Doloribus fugiat reprehenderit reru</p>

                      <a href="#slidee"> <button class="btn_get">Get Started</button> </a>

                   </div>

                   <div class="photo">
                           <img src="bookimages/2.jpeg">
                   </div>
             </div>



             <!-- **********************************************slide*******************************************       -->
     <section  class="book" id="slidee">

      <div class="swiper  book_slider">

          <div class="swiper-wrapper ">
            @foreach($books as $book)
              <div class="swiper-slide  slide">
                      <img src="{{ asset('bookimages/' . $book->image) }}" alt="{{ $book->title }}" class="book_image">
                      <h2 class="book_name">{{$book->title}}</h2>
                     <!-- <a href="#detail" >  <button class="book_btn">View details</button> </a> -->
                     <a href="#book-card-{{ $book->id }}"> <button class="book_btn" onclick="highlightCard({{ $book->id }})">View details</button></a>
              </div>

            @endforeach

              <!-- <div class="swiper-slide  slide">
                      <img src="{{ asset('bookimages/5.jfif') }}" alt="" class="book_image">
                      <h2 class="book_name">Seconde book</h2>
                     <a href="#detail"> <button class="book_btn">View details</button> </a>

              </div>
              <div class="swiper-slide  slide">
                      <img src="{{ asset('bookimages/5.jfif') }}" alt="" class="book_image">
                      <h2 class="book_name">Third book</h2>
                     <a href="#detail"> <button class="book_btn">View details</button> </a>

              </div>
              <div class="swiper-slide  slide">
                      <img src="{{ asset('bookimages/5.jfif') }}" alt="" class="book_image">
                      <h2 class="book_name">Fourth book</h2>
                     <a href="#detail"> <button class="book_btn">View details</button> </a>

              </div>
              <div class="swiper-slide  slide">
                      <img src="{{ asset('bookimages/5.jfif') }}" alt="" class="book_image">
                      <h2 class="book_name">Fifth book</h2>
                     <a href="#detail"> <button class="book_btn">View details</button> </a>

              </div> -->

       </div>
       <div class="swiper-pagination"></div>
       <div class="swiper-button-prev"></div>
       <div class="swiper-button-next"></div>

      </div>

     </section>


          <!-- ************************************************************card******************************************** -->
        <div class="container-card" id="detail">

         @foreach($books as $book)
          <div class="card" id="book-card-{{ $book->id }}">
                  <div class="image-card">
                          <img src="{{ asset('bookimages/' . $book->image) }}" alt="{{ $book->title }}">
                  </div>
                  <div class="book-detail">
                        {{ $book->title }}
                  </div>

                  <div class="book-auth">
                         {{ $book->auth }}
                  </div>

                  <!-- <div class="buy-book">
                         <a href="{{ route('bookdetail.show', $book->id) }}"><button>View Now</button></a>
                  </div> -->

                  <div class="buy-book">
                   @auth
                    <a href="{{ route('bookdetail.show', $book->id) }}">
                        <button>View Now</button>
                     </a>
                   @else
                    <a href="{{ route('login') }}">
                         <button>first log in </button>
                     </a>
                    @endauth
                  </div>

          </div>
        @endforeach

          <!-- <div class="card" >
                  <div class="image-card">
                          <img src="bookimages/7.jfif">
                  </div>
                  <div class="book-detail">
                        book name
                  </div>

                  <div class="book-auth">
                         luna mark
                  </div>

                  <div class="buy-book">
                         <a href="/bookdetails"><button>View Now</button></a>
                  </div>
          </div>
          <div class="card" >
                  <div class="image-card">
                          <img src="bookimages/7.jfif">
                  </div>
                  <div class="book-detail">
                        book name
                  </div>

                  <div class="book-auth">
                         luna mark
                  </div>

                  <div class="buy-book">
                         <a href="/bookdetails"><button>View Now</button></a>
                  </div>
          </div>
          <div class="card" >
                  <div class="image-card">
                          <img src="bookimages/7.jfif">
                  </div>
                  <div class="book-detail">
                        book name
                  </div>

                  <div class="book-auth">
                         luna mark
                  </div>

                  <div class="buy-book">
                         <a href="/bookdetails"><button>View Now</button></a>
                  </div>
          </div>
          <div class="card" >
                  <div class="image-card">
                          <img src="bookimages/7.jfif">
                  </div>
                  <div class="book-detail">
                         <span>book name</span>
                  </div>

                  <div class="book-auth">
                         <span>luna mark</span>
                  </div>

                  <div class="buy-book">
                         <a href="/bookdetails"><button>View Now</button></a>
                  </div>
          </div>
          <div class="card" >
                  <div class="image-card">
                          <img src="bookimages/7.jfif">
                  </div>
                  <div class="book-detail">
                         <span>book name</span>
                  </div>

                  <div class="book-auth">
                         <span>luna mark</span>
                  </div>

                  <div class="buy-book">
                         <a href="/bookdetails"><button>View Now</button></a>
                  </div>
          </div>
          <div class="card" >
                  <div class="image-card">
                          <img src="bookimages/7.jfif">
                  </div>
                  <div class="book-detail">
                         <span>book name</span>
                  </div>

                  <div class="book-auth">
                         <span>luna mark</span>
                  </div>

                  <div class="buy-book">
                         <a href="/bookdetails"><button>View Now</button></a>
                  </div>
          </div>
          <div class="card" >
                  <div class="image-card">
                          <img src="bookimages/7.jfif">
                  </div>
                  <div class="book-detail">
                         <span>book name</span>
                  </div>

                  <div class="book-auth">
                         <span>luna mark</span>
                  </div>

                  <div class="buy-book">
                         <a href="/bookdetails"><button>View Now</button></a>
                  </div>
          </div> -->

        </div>




       <!-- *************************************************footer************************************* -->
    <div class="foot" id="footer">
        <main>
               contact
        </main>
        <footer class="footer">
                <div class="footer-left">
                      <img  src="bookimages/logobook.jpg">
                      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit eos incidunt, dolorum neque reiciendis autem!</p>
                      <div class="socials">
                             <a href="#"><i class="fa-star "></i></a>
                             <a href="#"><i class="fa-youtube"></i></a>
                             <a href="#"><i class="fa-star"></i></a>
                             <a href="#"><i class="fa-youtube"></i></a>
                      </div>
                </div>

                <ul class="footer-right">
                       <li>
                            <h2>Product</h2>
                            <ul class="boxx">
                                    <li><a href="#">theme design</a></li>
                                    <li><a href="#">plugin design</a></li>
                                    <li><a href="#">wordpress design</a></li>
                                    <li><a href="#">yemplate </a></li>
                            </ul>
                       </li>
                       <li class="features">
                            <h2>useful links</h2>
                            <ul class="boxx">
                                    <li><a href="#">blog</a></li>
                                    <li><a href="#">sales</a></li>
                                    <li><a href="#">tickets</a></li>
                                    <li><a href="#">certificats </a></li>
                            </ul>
                       </li>
                       <li >
                            <h2>Address</h2>
                            <ul class="boxx">
                                    <li><a href="#">127,vbgy</a></li>
                                    <li><a href="#">da15</a></li>
                                    <li><a href="#">tlondon</a></li>
                                    <li><a href="#">USA </a></li>
                            </ul>
                       </li>
                </ul>

                <div class="footer-bottom">
                      <p>All Right reserved by &copy;conceptail 2020</p>
                </div>

        </footer>

        </div>


             <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
             <script src="{{ asset('js/arti.js') }}"></script>
             <!-- <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script> -->
    </body>

</html>
