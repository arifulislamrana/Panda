<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Panda</title>
    <link rel="stylesheet" href="/Assets/css/style2.css">
  </head>
  <body>
    <header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">Panda</span></h1>
        </div>
        <nav>
          <ul>
            <li class="current"><a href="#">Home</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <section id="showcase">
      <div class="container">
        <h1>WelCome To Panda Admin</h1>
      </div>
    </section>

    <section id="newsletter">
      <div class="container">
        Manage Your Panda
      </div>
    </section>

    <section id="main">
        <div class="container">
          <article id="main-col">
                <div class="dark">
                  <h3>Add New Product</h3>
                    <form action="" class="quote" style="display: flex; justify-content: space-around;" method="POST">
                        @csrf
                        <div>
                            <div>
                                <label>Product Name</label><br>
                                <input type="text" placeholder="Name" name="name" value="{{old('name')}}">
                            </div>
                            <div>
                                <label>Title</label><br>
                                <input type="text" placeholder="Title" name="title" value="{{old('title')}}">
                            </div>
                            <div>
                                <label>Description</label><br>
                                <textarea placeholder="Product Description" name="description" value="{{old('description')}}"></textarea>
                            </div>
                        </div>
                        <div>
                            <div>
                                <label>Price</label><br>
                                <input type="number" placeholder="Price" name="price" value="{{old('category')}}">
                            </div>
                            <div>
                                <label>Category</label><br>
                                <select name="category" value="{{old('category')}}">
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                  </select>
                            </div>
                            <div>
                                <label>Image</label><br>
                                <input type="file" name="image">
                            </div>
                        </div>
                        <button class="button_1" type="submit">Add</button>
                    </form>
                </div>
          </article>

          <aside id="sidebar">
            <div class="dark">
              <h3>Create New Category</h3>
            <form action="{{ Route('createCategory') }}" class="quote" method="POST">
                @csrf
                <div>
                    <label>Category Name</label><br>
                    <input type="text" placeholder="Name" name="name" value="{{old('name')}}">
                </div>
                <button class="button_1" type="submit">Send</button>
            </form>
            </div>
          </aside>
        </div>
      </section>

    <footer>
      <p>Panda, Copyright &copy; <script>document.write(new Date().getFullYear());</script></p>
    </footer>
  </body>
</html>
