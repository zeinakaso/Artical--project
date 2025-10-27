<html>
<head>
  <title>All Books</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    table {
      text-align: center;
      vertical-align: middle;
    }

    table img {
      width: 80px;
      height: 100px;
      object-fit: cover;
      border-radius: 5px;
    }

    th, td {
      vertical-align: middle !important;
    }

  </style>
</head>

<body class="bg-light">

<div class="container mt-5">
  <h2 class="mb-4 text-center">📚 All Books</h2>
@if ($books->count() > 0)
  <table class="table table-bordered table-striped align-middle text-center shadow-sm">
    <thead class="table-dark">
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Image</th>
        <th>Auth</th>
        <th>Desc</th>
        <th>Price</th>
        <th>Proc</th>
        <!-- <th>Add Proc</th> -->

      </tr>
    </thead>

    <tbody>
      @foreach($books as $book)
      <tr>
        <th>{{ $book->id }}</th>
        <td>{{ $book->title_upper }}</td>
        <td><img src="{{ asset('bookimages/' . $book->image) }}" alt="{{ $book->title }}"></td>
        <td>{{ $book->auth_upper }}</td>
        <td>{{ $book->desc }}</td>
        <td>{{ $book->price }} $</td>
        <td>
        <a href="{{url('books/edit',$book->id)}}"> <button type="button" class="btn btn-success">Edit</button></a>
        <a href="{{url('books/delete',$book->id)}}">  <button type="button" class="btn btn-danger">Delete</button></a>
        </td>
      </tr>
      @endforeach

  <tr>
    <td colspan="7" class="text-center">
      <form action="{{ url('books/delete/all') }}" method="POST" onsubmit="return confirm('Are you sure  ? ')">
        @csrf
        <button type="submit" class="btn btn-primary">Delete All</button>
      </form>
    </td>
  </tr>

    </tbody>
  </table>

@else
  <div class="text-center mt-5">
    <h4>No books found 😢</h4>
    <a href="{{ url('books/create') }}" class="btn btn-success mt-3">Add New Book</a>
  </div>
@endif

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
