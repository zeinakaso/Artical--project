<!-- <h1> create new book </h1>

<form action="{{url('books/insert')}}" method="POST" enctype="multipart/form-data">
   @csrf
   <label for="name" >Name:</label><br>
  <input id="name" type="text"  name="booktitle" required placeholder="enter book name"><br><br>

  <label for="image">Image</label><br>
  <input id="image"  type="file"  name="bookImage" accept="image/*" required placeholder="enter image"><br><br>

  <label for="auth" >Author</label><br>
  <input  id="auth" type="text"  name="bookauth" required placeholder="enter book auth"><br><br>


  <label for="description">Description</label><br>
  <textarea id="description" name="bookdesc" rows="4" cols="50" required placeholder="enter book deescribtion"></textarea><br><br>

  <label for="price">Price</label><br>
  <input type="number" id="price" name="bookprice" step="0.01" min="0" required placeholder="enter book price"><br><br>

  <button type="submit">Submite</button>
</form>


<div class="text-center mt-5">
    <h4>Go to books bage </h4>
    <a href="{{ url('/books') }}" class="btn btn-success mt-3">Go</a>
  </div>




 -->


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


<div class="container mt-5 mb-10">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow">
                <div class="card-header bg-black text-white text-center">
                    <h3>Create New Book</h3>
                </div>

                <div class="card-body">
                    <form action="{{ url('books/insert') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Book Name:</label>
                            <input id="name" type="text" name="booktitle" class="form-control" required placeholder="Enter book name">
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Image:</label>
                            <input id="image" type="file" name="bookImage" class="form-control" accept="image/*" required>
                        </div>

                        <div class="mb-3">
                            <label for="auth" class="form-label">Author:</label>
                            <input id="auth" type="text" name="bookauth" class="form-control" required placeholder="Enter book author">
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description:</label>
                            <textarea id="description" name="bookdesc" rows="4" class="form-control" required placeholder="Enter book description"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label">Price:</label>
                            <input type="number" id="price" name="bookprice" step="0.01" min="0" class="form-control" required placeholder="Enter book price">
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary w-50">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="text-center mt-4">
                <h5>Go to Books Page</h5>
                <a href="{{ url('/books') }}" class="btn btn-success mt-2">Go</a>
            </div>

        </div>
    </div>
</div>


             <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
             <script src="{{ asset('js/arti.js') }}"></script>
             <!-- <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script> -->
    </body>

</html>










<!--

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow">
                <div class="card-header bg-black text-white text-center">
                    <h3>Create New Book</h3>
                </div>

                <div class="card-body">
                    <form action="{{ url('books/insert') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Book Name:</label>
                            <input id="name" type="text" name="booktitle" class="form-control" required placeholder="Enter book name">
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Image:</label>
                            <input id="image" type="file" name="bookImage" class="form-control" accept="image/*" required>
                        </div>

                        <div class="mb-3">
                            <label for="auth" class="form-label">Author:</label>
                            <input id="auth" type="text" name="bookauth" class="form-control" required placeholder="Enter book author">
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description:</label>
                            <textarea id="description" name="bookdesc" rows="4" class="form-control" required placeholder="Enter book description"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label">Price:</label>
                            <input type="number" id="price" name="bookprice" step="0.01" min="0" class="form-control" required placeholder="Enter book price">
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary w-50">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="text-center mt-4">
                <h5>Go to Books Page</h5>
                <a href="{{ url('/books') }}" class="btn btn-success mt-2">Go</a>
            </div>

        </div>
    </div>
</div> -->
