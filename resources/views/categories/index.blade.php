<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<a href="{{ url('/home') }}">Home</a>
                
                <div class="container">
                  <h3>Categories</h3>
                  <a class= "btn btn-primary float-right mb-4" href="{{ url('/add-category') }}">Add Category</a>
                  <table class="table">
                    <thead class="table-dark">
                     <tr>
                       <th scope="col">#</th>
                       <th scope="col">Name</th>
                    
                      
                     </tr>
                   </thead>
                   <tbody>
                     @foreach($categories as $category)
                      <tr>
                        <th scope="row">{{$category->id}}</th>
                        <td>{{$category->name}}</td>

                      </tr>
                     @endforeach
  
                    </tbody>
                  </table>
               </div>        
</body>
</html>