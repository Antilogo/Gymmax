<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

  
    <link rel="stylesheet" href="{{asset('assets/libs/fontawesome5/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/libs/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/libs/slick/slick-theme.css')}}">
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="{{asset('./assets/libs/slick/slick.min.js')}}"></script>
  </head>
<body>
  @include('Client.bloc.header')

    <section class="h-100 h-custom" style="background-color: #eee;padding-top: 60px;    ">
        <div class="container h-100 py-5 ">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
              <div class="card shopping-cart" style="border-radius: 15px;">
                <div class="card-body text-black">
      
                  <div class="row">
                    <div class="col-lg-6 px-5 py-4">
      
                      <h3 class="mb-5 pt-2 text-center fw-bold text-uppercase">Your products</h3>
                      @foreach ($cartCookie1 as $item)
                        <div class="d-flex align-items-center mb-5">
                          <div class="flex-shrink-0">
                            <img src="{{$item->image}}"
                            class="img-fluid" style="width: 150px;" alt="Generic placeholder image">
                          </div>
                          <div class="flex-grow-1 ms-3">
                            <a href="{{route('shoppingcart.delete', ['id' =>$item->id])}}" class="float-end text-black"><i class="fas fa-times"></i></a>
                            <h6 class="product_id">{{$item->id}}</h6>
                            <h5 class="text-primary">{{ $item->name }}</h5>
                            <div class="d-flex align-items-center">
                              <p class="fw-bold mb-0 me-5 pe-3">${{number_format($item->price, 2)}} </p>
                              <div class="def-number-input number-input safari_only" style="display: inline-flex;">
                                <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                class="minus" ><i class="fas fa-minus"></i></button>
                                <input class="quantity fw-bold text-black" min="0" name="quantity" value="1"
                                  type="number">
                                <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                  class="plus"><i class="fas fa-plus"></i></button>
                              </div>
                            </div>
                          </div>
                        </div>
                      @endforeach


                      <hr class="mb-4" style="height: 2px; background-color: #1266f1; opacity: 1;">
{{--       
                      <div class="d-flex justify-content-between px-x">
                        <p class="fw-bold">Discount:</p>
                        <p class="fw-bold">95$</p>
                      </div> --}}
                      <div class="d-flex justify-content-between p-2 mb-2" style="background-color: #e1f5fe;">
                        <h5 class="fw-bold mb-0">Total:</h5>
                        <h5 id="total" class="fw-bold mb-0">${{number_format($total, 2)}}</h5>
                      </div>
      
                    </div>
                    <div class="col-lg-6 px-5 py-4">
      
                      <h3 class="mb-5 pt-2 text-center fw-bold text-uppercase">Payment</h3>
      
                      <form class="mb-5">
      
                        <div class="form-outline mb-5">
                          <input type="text" id="typeText" class="form-control form-control-lg" siez="17"
                            value="1234 5678 9012 3457" minlength="19" maxlength="19" />
                          <label class="form-label" for="typeText">Card Number</label>
                        </div>
      
                        <div class="form-outline mb-5">
                          <input type="text" id="typeName" class="form-control form-control-lg" siez="17"
                            value="John Smith" />
                          <label class="form-label" for="typeName">Name on card</label>
                        </div>
      
                        <div class="row">
                          <div class="col-md-6 mb-5">
                            <div class="form-outline">
                              <input type="text" id="typeExp" class="form-control form-control-lg" value="01/22"
                                size="7" id="exp" minlength="7" maxlength="7" />
                              <label class="form-label" for="typeExp">Expiration</label>
                            </div>
                          </div>
                          <div class="col-md-6 mb-5">
                            <div class="form-outline">
                              <input type="password" id="typeText" class="form-control form-control-lg"
                                value="&#9679;&#9679;&#9679;" size="1" minlength="3" maxlength="3" />
                              <label class="form-label" for="typeText">Cvv</label>
                            </div>
                          </div>
                        </div>
      
                        <p class="mb-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit <a
                            href="#!">obcaecati sapiente</a>.</p>
      
                        <button type="submit" class="btn btn-block btn-lg">Buy now</button>
      
                        <h5 class="fw-bold mb-5" style="position: absolute; bottom: 0;">
                          <a href="{{back()}}"><i class="fas fa-angle-left me-2"></i>Back to shopping</a>
                        </h5>
      
                      </form>
      
                    </div>
                  </div>
      
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    @include('Client.bloc.footer')

</body>
<script src="{{asset('assets/js/script.js')}}"></script>

</html>