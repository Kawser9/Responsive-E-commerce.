@extends('frontend.master')
@section('content')


<div class="container mt-5">
  <div class="cart_section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cart_container">
                    <div class="cart_title">Shopping Cart<small> ({{session()->has('cart')?count(session()->get('cart')):0}}) </small></div>
                    <div class="cart_items">
                        <ul class="cart_list">
                          @if ($cartData!=null)
                            @foreach ($cartData as $key=>$cart)
                            <li class="cart_item clearfix">
                                <div class="cart_item_image"><img src="{{url('uploads/products/'.$cart['image'])}}" alt=""></div>
                                <div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
                                    <div class="cart_item_name cart_info_col">
                                        <div class="cart_item_title">Name</div>
                                        <div class="cart_item_text">{{$cart['name']}}</div>
                                    </div>
                                    {{-- <div class="cart_item_color cart_info_col">
                                        <div class="cart_item_title">Color</div>
                                        <div class="cart_item_text"><span style="background-color:#999999;"></span>Silver</div>
                                    </div> --}}
                                    <div class="cart_item_quantity cart_info_col">
                                        <div class="cart_item_title">Quantity</div>
                                        <div class="cart_item_text">{{$cart['quantity']}}</div>
                                    </div>
                                    <div class="cart_item_price cart_info_col">
                                        <div class="cart_item_title">Price</div>
                                        <div class="cart_item_text">{{$cart['price']}} BTD</div>
                                    </div>
                                    <div class="cart_item_total cart_info_col">
                                        <div class="cart_item_title">Total</div>
                                        <div class="cart_item_text">{{$cart['price'] * $cart['quantity']}} BTD</div>
                                    </div>
                                    <ul><a href="{{Route('remove.item',$key)}}" type="button" ><i class="fa-solid fa-xmark xl" style="color: #ff0a3b;"></i></a></ul>
                                </div>
                            </li>
                            @endforeach
                            @endif
                        </ul>
                    </div>
                    <br><br><br>
                    <a href="{{Route('clear.cart')}}" class="btn btn-primary">Clear all</a>
                    <div class="order_total">
                        <div class="order_total_content text-md-right">
                            <div class="order_total_title">Order Total:</div>
                            <div class="order_total_amount">{{$cartData?array_sum(array_column($cartData,'sub_total')):0}} BTD</div>
                        </div>
                    </div>
                    <div class="cart_buttons"> <a href="{{Route('frontend.product')}}" class="button cart_button_clear"><i class="fas fa-angle-left me-2"></i>Continue Shopping</a>
                      
                      @if (session()->has('cart'))
                        <a href="{{Route('checkout')}}" class="button cart_button_checkout">Check Out</a> </div>
                      @endif
                </div>
            </div>
        </div>
    </div>
</div>
</div>
{{-- <section class="h-100 h-custom" style="background-color: #eee;"> --}}
    {{-- <div class="container h-100 py-5">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col">
          <div class="card shopping-cart" style="border-radius: 25px;">
            <div class="card-body text-black">
  
              <div class="row">
                <div class="col-lg-12 px-5 py-4">
  
                  <h3 class="mb-5 pt-2 text-center fw-bold text-uppercase">Your products</h3>
                  <a href="{{Route('clear.cart')}}" class="btn btn-warning">Clear all</a>
                  
  
                @if ($cartData!=null)
                @foreach ($cartData as $key=>$cart)

                  <div class="d-flex align-items-center mb-5">
                    <div class="flex-shrink-0">
                      <img src="{{url('uploads/products/'.$cart['image'])}}"
                        class="img-fluid" style="width: 150px;" alt="Generic placeholder image">
                    </div>
                    <div class="flex-grow-1 ms-3">
                   
                      <h5 class="">{{$cart['name']}}</h5>
                      
                      <div class="d-flex align-items-center">
                        <p class="fw-bold mb-0 me-5 pe-3">{{$cart['price']}}</p>
                        <div class="def-number-input number-input safari_only">
                        
                          <input class="quantity fw-bold text-black" min="0" name="quantity" value="{{$cart['quantity']}}"
                            type="number">
                         
                        </div>
                      </div>
                    </div>
                   
                    <div class="ms-auto text-end">
                        <ul><a href="{{Route('remove.item',$key)}}" type="button" ><i class="fa-solid fa-xmark xl" style="color: #ff0a3b;"></i></a></ul>
                        <h5 style="color: #085f81;" class="text-center text-uppercase">Subtotal</h5>
                      <p class="fw-bold mb-0">{{$cart['price'] * $cart['quantity']}}</p>
                    </div>
                  </div>
                  
                @endforeach
                @endif
  
                  <hr class="mb-4" style="height: 2px; background-color: #1266f1; opacity: 1;">
  
                  <div class="d-flex justify-content-between px-x">
                    
                  </div>
                  <div class="d-flex justify-content-between p-2 mb-2" style="background-color: #f17f7f;">
                    <h5 class="fw-bold mb-0" style="color: #fffcfc;">Total:</h5>
                    <p class="fw-bold mb-0" style="color: #fffcfc;">{{$cartData?array_sum(array_column($cartData,'sub_total')):0}}</p>
                  </div>
  

                  @if (session()->has('cart'))
                   
                  <a href="{{Route('checkout')}}" class="form-group button">Check out</a>
                     
                  @endif
                </div>
               
                  <a href="{{Route('frontend.product')}}"><i class="fas fa-angle-left me-2"></i>Back to shopping</a>
               
              </div>
  
            </div>
          </div>
        </div>
      </div>
    </div> --}}
  </section>

</div>


  <style>
      .order_total {
    display: flex;
    justify-content: flex-end;
    margin-top: 20px;
  }

  .order_total_content {
    text-align: right;
  }
  .cart_item_header {
    font-weight: bold;
  }
*{margin: 0;padding: 0;-webkit-font-smoothing: antialiased;-webkit-text-shadow: rgba(0,0,0,.01) 0 0 1px;text-shadow: rgba(0,0,0,.01) 0 0 1px}body{font-family: 'Rubik', sans-serif;font-size: 14px;font-weight: 400;background: #E0E0E0;color: #000000}ul{list-style: none;margin-bottom: 0px}.button{display: inline-block;background: #d9232d;border-radius: 5px;height: 48px;-webkit-transition: all 200ms ease;-moz-transition: all 200ms ease;-ms-transition: all 200ms ease;-o-transition: all 200ms ease;transition: all 200ms ease}.button a{display: block;font-size: 18px;font-weight: 400;line-height: 48px;color: #FFFFFF;padding-left: 35px;padding-right: 35px}.button:hover{opacity: 0.8}.cart_section{width: 100%;padding-top: 93px;padding-bottom: 111px}.cart_title{font-size: 30px;font-weight: 500}.cart_items{margin-top: 8px}.cart_list{border: solid 1px #e8e8e8;box-shadow: 0px 1px 5px rgba(0,0,0,0.1);background-color: #fff}.cart_item{width: 100%;padding: 15px;padding-right: 46px}.cart_item_image{width: 133px;height: 133px;float: left}.cart_item_image img{max-width: 100%}.cart_item_info{width: calc(100% - 133px);float: left;padding-top: 18px}.cart_item_name{margin-left: 7.53%}.cart_item_title{font-size: 14px;font-weight: 400;color: rgba(0,0,0,0.5)}.cart_item_text{font-size: 18px;margin-top: 35px}.cart_item_text span{display: inline-block;width: 20px;height: 20px;border-radius: 50%;margin-right: 11px;-webkit-transform: translateY(4px);-moz-transform: translateY(4px);-ms-transform: translateY(4px);-o-transform: translateY(4px);transform: translateY(4px)}.cart_item_price{text-align: right}.cart_item_total{text-align: right}.order_total{width: 100%;height: 60px;margin-top: 30px;border: solid 1px #e8e8e8;box-shadow: 0px 1px 5px rgba(0,0,0,0.1);padding-right: 46px;padding-left: 15px;background-color: #fff}.order_total_title{display: inline-block;font-size: 14px;color: rgba(0,0,0,0.5);line-height: 60px}.order_total_amount{display: inline-block;font-size: 18px;font-weight: 500;margin-left: 26px;line-height: 60px}.cart_buttons{margin-top: 60px;text-align: right}.cart_button_clear{display: inline-block;border: none;font-size: 18px;font-weight: 400;line-height: 34px;color: rgba(0,0,0,0.5);background: #FFFFFF;border: solid 1px #b2b2b2;padding-left: 35px;padding-right: 35px;outline: none;cursor: pointer;margin-right: 26px}.cart_button_clear:hover{border-color: #b40000;color: #e40e52}.cart_button_checkout{display: inline-block;border: none;font-size: 18px;font-weight: 400;line-height: 33px;color: #FFFFFF;padding-left: 35px;padding-right: 35px;outline: none;cursor: pointer;vertical-align: top}
  </style>
   
@endsection