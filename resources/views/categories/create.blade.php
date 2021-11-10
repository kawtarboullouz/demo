<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<h1>Add Category</h1>
<div class="container">
<form methode="post" action="{{ url('/add-category') }}">
{{ csrf_field() }}
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Category Name</label>
  <input type="text" name="Name" class="form-control"  placeholder="Enter Category Name">
</div>

<button class="btn btn-primary mt-3">Submit</button>

</form>
</div>