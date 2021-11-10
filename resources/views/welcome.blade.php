<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
 
        <title>Laravel</title>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles 
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>-->
    </head>
    <body>
       <!-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
-->
            <a href="{{ url('/home') }}">Home</a>
                
                <div class="container">
                  <h3>Products</h3>
                  <a class= "btn btn-primary float-right mb-4" href="{{ url('/add-product') }}">Add Product</a>
                  <table class="table">
                    <thead class="table-dark">
                     <tr>
                       <th scope="col">#</th>
                       <th scope="col">name</th>
                       <th scope="col">description</th>
                       <th scope="col">price</th>
                       <th scope="col">image</th>
                     </tr>
                   </thead>
                   <tbody>
                     @foreach($products as $product)
                      <tr>
                        <th scope="row">{{$product->id}}</th>
                        <td>{{$product->name}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->image}}</td>
                        <td>{{$product->category->name}}</td>
                        <td style="display:flex"> 
                            <form action="{{ url('/delete-product/.$product->id') }}" methode="post">
                                {{ methode_field('DELETE') }}
                                {{ csrf_field() }}
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>

                      </tr>
                     @endforeach
  
                    </tbody>
                  </table>
               </div>        
        
          
    </body>
</html>
