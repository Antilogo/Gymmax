<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Bootstrap Advance Admin Template</title>


    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
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
          @if (session('msg'))
          <div class="alert alert-success">{{session('msg')}}</div>
      @endif
          <div class="add_product">

              <a href="{{route('product.add')}}" class="btn btn-primary">
                Add Product
              </a>

          </div>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Description</th>
                <th scope="col">Quantity</th>
                <th scope="col">Image</th>
                <th scope="col">Create_At</th>
                <th scope="col">Updated_at</th>

              </tr>
            </thead>
            <tbody>
              @foreach ($product as $key => $item)
              <tr>
                <td >{{$key+1}}</td>
                <td>{{$item->product_name}}</td>
                <td>{{$item->product_price}}</td>
                <td>{{$item->product_des}}</td>
                <td>{{$item->product_quantity}}</td>
                <td><img src="{{$item->product_image}}" style="display: block;width:100px;height:100px">
                  </td>
                <td>{{$item->created_at}}</td>
                <td>{{$item->updated_at}}</td>

                <td>
                  <a href="{{route('product.edit', ['id' =>$item->product_id])}}" class="btn btn-primary">Change</a>
                  <a onclick="return confirm('Bạn có chắc muốn xóa Product ?')" href="{{route('product.delete', ['id' =>$item->product_id])}}" class="btn btn-primary">Delete</a>
                  
                </td>
              </tr>
              @endforeach

            </tbody>
          </table>
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
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
  </body>
</html>
