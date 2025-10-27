<h1> Edit : {{$book->id}}</h1>

<form action="{{ url('books/update',$book->id) }}" method="POST" enctype="multipart/form-data">
   @csrf
   @method("PUT")
   <label for="name" >Name:</label><br>
  <input id="name" type="text"  name="booktitle" required value="{{$book->title}}"><br><br>

  <label for="image">Image</label><br>
  <img src="{{ asset('bookimages/' . $book->image) }}" alt="{{ $book->title }}" width="100"><br>
  <input id="image"  type="file"  name="bookImage" accept="image/*" required><br><br>

  <label for="auth" >Author</label><br>
  <input  id="auth" type="text"  name="bookauth" required value="{{$book->auth}}"><br><br>


  <label for="description">Description</label><br>
  <textarea id="description" name="bookdesc" rows="4" cols="50"  required>{{ $book->desc }}"></textarea><br><br>

  <label for="price">Price</label><br>
  <input type="number" id="price" name="bookprice" step="0.01" min="0" required value="{{$book->price}}"><br><br>

  <button type="submit">Submite</button>
</form>
