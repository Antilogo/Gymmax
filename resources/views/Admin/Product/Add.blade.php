<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Bootstrap Advance Admin Template</title>


    <!-- BOOTSTRAP STYLES-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="../assets/css/basic.css" rel="stylesheet" />

    <!-- GOOGLE FONTS-->
    <link
      href="http://fonts.googleapis.com/css?family=Open+Sans"
      rel="stylesheet"
      type="text/css"
    />
  </head>
  <body>
    <div id="wrapper">
      <nav
        class="navbar navbar-default navbar-cls-top"
        role="navigation"
        style="margin-bottom: 0"
      >
        <div class="navbar-header">
          <button
            type="button"
            class="navbar-toggle"
            data-toggle="collapse"
            data-target=".sidebar-collapse"
          >
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">COMPANY NAME</a>
        </div>

        <div class="header-right">
          <a href="message-task.html" class="btn btn-info" title="New Message"
            ><b>30 </b><i class="fa fa-envelope-o fa-2x"></i
          ></a>
          <a href="message-task.html" class="btn btn-primary" title="New Task"
            ><b>40 </b><i class="fa fa-bars fa-2x"></i
          ></a>
          <a href="login.html" class="btn btn-danger" title="Logout"
            ><i class="fa fa-exclamation-circle fa-2x"></i
          ></a>
        </div>
      </nav>
      <!-- /. NAV TOP  -->
      @include('Admin.Navmenu.NavMenu')

      <!-- /. NAV SIDE  -->
      <div id="page-wrapper">
        <div id="page-inner">

            <form action="" method="POST">
                @csrf
                <div class="form-group">
                  <label for="">Product Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="product_name"  placeholder="Product Name" value="{{old('product_name')}}">
                  @error('product_name')
                    <span class="text-danger">{{$message}}</span>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="">Product Price</label>
                  <input type="number" class="form-control" id="exampleInputPassword1" name="product_price" placeholder="Product Price" value="{{old('product_price')}}">
                  @error('product_price')
                  <span class="text-danger">{{$message}}</span>
                @enderror
                </div>

                <div class="form-group">
                    <label for="">Product Description</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="product_des" placeholder="Product Description" value="{{old('product_des')}}">
                    @error('product_des')
                  <span class="text-danger">{{$message}}</span>
                @enderror
                  </div>
                  <div class="form-group">
                    <label for="">Product Quantity</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="product_quantity" placeholder="Product Quantity" value="{{old('product_quantity')}}">
                    @error('product_quantity')
                  <span class="text-danger">{{$message}}</span>
                @enderror
                  </div>
                  <div class="form-group">
                    <label for="">Product Image</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="product_img" placeholder="Product Image" value="{{old('product_img')}}">
                    @error('product_img')
                  <span class="text-danger">{{$message}}</span>
                @enderror
                  </div>

                

                  <button type="submit" class="btn btn-primary">Submit</button>
    
                <a href="{{route('product')}}" class="btn btn-warning">
                    Back
                  </a>
    
              </form>
        </div>
        <!-- /. PAGE INNER  -->
      </div>
      <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <div id="footer-sec">
      &copy; 2014 YourCompany | Design By :
      <a href="http://www.binarytheme.com/" target="_blank">BinaryTheme.com</a>
    </div>
    <!-- /. FOOTER  -->

</html>
