
@extends('layouts.all')

@section('title', 'Book Details')

@section('content')
<div class="all-card" id="details">
    <div class="container">
         <div class="box one">
                 <div class="details">
                        <div class="topic">Description</div>
                        <p>{{ $book->desc }}</p>
                        <div class="rating">
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="far fa-star"></i>
                                 <i class="far fa-star"></i>
                        </div>
                        <div class="price">{{ $book->price }}$ </div>

                        <div class="button">
                                <button>Add To Cart</button>
                        </div>
                 </div>
         </div>

         <div class="box two">
                <div class="image-box">
                        <div class="image">
                                 <img  src="{{ asset('bookimages/' . $book->image) }}" alt="{{ $book->title }}">
                        </div>
                        <div class="info">
                                 <div class="name">{{ $book->title }}</div>
                                 <div class="name-auth">{{ $book->auth }}</div>
                        </div>
                </div>
         </div>
    </div>
</div>
@endsection





















