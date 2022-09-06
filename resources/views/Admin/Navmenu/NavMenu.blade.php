<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
          <ul class="nav" id="main-menu">
            <li>
              <a class="{{ (request()->is('product/*')||request()->is('product')) ? 'active-menu' : '' }}" href="{{route('product')}}"
                ><i class="fa fa-square-o"></i>Product</a
              >
            </li>
            <li>
                <a class="{{ (request()->is('category/*')||request()->is('category')) ? 'active-menu' : '' }}" href="{{route('category')}}"
                  ><i class="fa fa-square-o"></i>Category</a
                >
              </li>
          </ul>
        </div>
      </nav>
</body>
</html>