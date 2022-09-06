
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    
    <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">


</head>
<body>
  <!-- Navigation-->
  @include('Client.bloc.header')
  <!-- Product section-->
  <section class="mt-100 py-5">
      <div class="container px-4 px-lg-5 my-5">
          <div class="row gx-4 gx-lg-5 align-items-center">
              <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="{{$data->product_image}}" alt="..." /></div>
              <div class="col-md-6">
                  <h1 class="display-5 fw-bolder">{{$data->product_name}}</h1>
                  <div class="fs-5 mb-1">
                      <div>${{$data->product_price}}</div>
                    </div>{{$data->product_des}}</p>
                    <h3 class="pb-4"  >Còn lại: {{$data->product_quantity}}</h3>
                  <div class="d-flex">
                      <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" name="product_quantity"/>
                      <button class="btn btn-outline-dark flex-shrink-0" type="submit">
                          Mua Ngay
                      </button>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Related items section-->
  <section class="py-5 bg-light">
      <div class="container px-4 px-lg-5 mt-5">
          <h2 class="fw-bolder mb-4">Related products</h2>
          <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
              @foreach ($relatelist as $key => $item)
              <div class="col mb-5">
                  <div class="card h-100">
                      <!-- Product image-->
                      <img class="card-img-top" style="width:100%;height:300px;object-fit: cover;" src="{{$item->product_image}}" alt="..." />
                      <!-- Product details-->
                      <div class="card-body p-4">
                          <div class="text-center">
                              <!-- Product name-->
                              <h5 class="fw-bolder">{{$item->product_name}}</h5>
                              <!-- Product price-->
                              
                              <span>${{$item->product_price}}</span>
                            </div>
                      </div>
                      <!-- Product actions-->
                      <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                          <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="">View Product</a></div>
                      </div>
                  </div>
              </div>
              @endforeach

          </div>
      </div>
  </section>
  <!-- Footer-->
  @include('Client.bloc.footer')

  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>
</body>
</html>