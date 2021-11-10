<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<div class="container">
<form methode="post" action="{{ url('/add-product') }}">
{{ csrf_field() }}
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Product Name</label>
  <input type="text" name="Name" class="form-control"  placeholder="Enter Product Name">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Description</label>
  <textarea class="form-control" name="Description" rows="3"></textarea>
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Price</label>
  <input type="text" class="form-control" name="Price" placeholder="Price">
</div>
<div class="mb-3">
  <label for="formFile" class="form-label">Image</label>
  <input class="form-control" name="image" type="file">
</div>
<select name="id_category"  class="form-select" aria-label="Default select example">
  <option selected>Category</option>
  @foreach($categories as $category)
  <option value="{{$category->id}}">{{category->name}}</option>
  @endforeach
</select>

<button class="btn btn-primary mt-3">Submit</button>

</form>
</div>