<header class="section-header top-header-bg d-md-block d-none">
    <div class="container">
      <div class="top-header d-flex justify-content-end align-items-center">
        <div class="top-social-icon">
            <ul class="mb-0">
                <li>
                    <a href="{{ route('orders.track') }}" class="text-dark">{{__('Track Order')}}</a>
                    @if (\App\Addon::where('unique_identifier', 'affiliate_system')->first() != null && \App\Addon::where('unique_identifier', 'affiliate_system')->first()->activated)
                        <a href="{{ route('affiliate.apply') }}" class="text-dark">{{__('Be an affiliate partner')}}</a>
                    @endif
                    @auth
                    <a href="{{ route('dashboard') }}" class="text-dark">{{__('My Panel')}}</a>
                    <a href="{{ route('logout') }}" class="text-dark">{{__('Logout')}}</a>
                    @else
                    <a href="{{ route('user.login') }}" class="text-dark">{{__('Login')}}</a>
                    <a href="{{ route('user.registration') }}" class="text-dark">{{__('Registration')}}</a>
                    @endauth
                </li>
            </ul>
        </div>
      </div>
    </div>
</header>
<nav class="header navbar navbar-expand-lg header-sticky">
    <div class="container">
      <div class="header-logo text-center d-flex">
        <a
          class="navbar-brand text-white text-uppercase text-left p-0 mr-5"
          href="{{ route('home') }}"
          >
          @php
                $generalsetting = \App\GeneralSetting::first();
            @endphp
            @if($generalsetting->logo != null)
                <img src="{{ asset($generalsetting->logo) }}" class="img-fluid" alt="{{ env('APP_NAME') }}">
            @else
                <img src="{{ asset('frontend/images/logo/logo.png') }}"  class="img-fluid" alt="{{ env('APP_NAME') }}">
            @endif
          </a>
        <!-- search start  -->

        <div class="searchbar d-none d-md-block ml-5">
          <input
            class="search_input"
            type="text"
            name=""
            placeholder="Search..."
          />
          <a href="#" class="search_icon"><i class="fa fa-search"></i></a>
        </div>

        <!-- search end  -->
        <!-- search mobile new star  -->
        <div class="search_mobile_men d-block d-md-none">
          <button class="search_icon_new" type="submit">
            <i class="fa fa-search"></i>
          </button>

          <div class="sub_search">
            <form action="" class="d-flex">
              <input
                class="input_box"
                type="text"
                placeholder="Search.."
                name="search"
              />
              <button class="search_top" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </form>
          </div>
        </div>
        <!-- search mobile new end  -->
      </div>
     
      <div class="collapse navbar-collapse" id="main_nav">
        <ul class="ml-0 mb-0 text-right w-100 menu_icon_block">
          <li>
            <a href="{{ route('wishlists.index') }}" class="cart_mobile ml-4"
              ><i
                class="fa fa-heart text-dark"
                data-toggle="tooltip"
                title="Wishlist"
                aria-hidden="true"
              ></i>
              @if(Auth::check())
                            <sup class="nav-box-number">{{ count(Auth::user()->wishlists)}}</sup>
                        @else
                        <sup class="nav-box-number">0</sup>
                            {{-- <span class="nav-box-number">0</span> --}}
                        @endif
              </a
            >
            <a href="{{ route('compare') }}" class="cart_mobile ml-4"
              ><i
                class="fa fa-compress text-dark"
                data-toggle="tooltip"
                data-placement="top"
                title="Compare"
              ></i>
              @if(Session::has('compare'))
                            <sup class="nav-box-number">{{ count(Session::get('compare'))}}</sup>
                        @else
                            <sup class="nav-box-number">0</sup>
                        @endif
              </a
            >

            <!-- cart modal start  -->
            <a
              href=""
              class="cart_mobile ml-4"
              data-toggle="modal" data-target="#exampleModal"
              ><i
                class="fa fa-shopping-cart text-dark"
                data-toggle="tooltip"
                data-placement="top"
                title="Cart"
                aria-hidden="true"
              ></i>
              @if(Session::has('cart'))
                            <sup class="nav-box-number">{{ count(Session::get('cart'))}}</span>
                        @else
                            <sup class="nav-box-number">0</sup>
                        @endif
              </a
            >
           
           
          </li>
        </ul>
      </div>
    </div>
    <!-- Button trigger modal -->
    <a class="hamburger_icon d-md-none d-block" onclick="sideMenuOpen(this)">
                                  <div class="hamburger-icon">
                                      <span></span>
                                      <span></span>
                                      <span></span>
                                      <span></span>
                                  </div>
                              </a>
    <!-- Button trigger modal -->
</nav>

  <!--CART Modal START -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5
            class="modal-title text-dark font-weight-bold"
            id="exampleModalLabel"
          >
            My Cart
          </h5>
          <button
            type="button"
            class="close"
            data-dismiss="modal"
            aria-label="Close"
          >
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body mb-0 pb-0">
          <div class="table-responsive px-md-3">
            <table class="table text-center mb-0">
              <tbody class="">
                @if(Session::has('cart'))
                    @if(count($cart = Session::get('cart')) > 0)
                    @php
                        $total = 0;
                    @endphp
                    @foreach($cart as $key => $cartItem)
                        @php
                            $product = \App\Product::find($cartItem['id']);
                            $total = $total + $cartItem['price']*$cartItem['quantity'];
                        @endphp
                        <tr class="d-flex align-items-center">
                        <th scope="row">
                            <div class="cart_img">
                            <img
                                src="{{ asset('frontend/images/placeholder.jpg') }} "data-src="{{ asset($product->thumbnail_img) }}" class="img-fluid lazyload" alt="{{ __($product->name) }}"
                            />
                            </div>
                        </th>
                        <td class="border-0">
                            <h5>{{ __($product->name) }}</h5>
                            <h6>{{ single_price($cartItem['price']*$cartItem['quantity']) }}</h6>
                        </td>
                        <td class="border-0">
                            {{-- <button class="gray_title" onclick="removeFromCart({{ $key }})"> --}}
                                <i onclick="removeFromCart({{ $key }})" 
                                class="fa fa-trash-o"
                                aria-hidden="true"
                            ></i
                            >
                            {{-- </button> --}}
                            {{-- <a href="" class="gray_title"
                            ><i
                                class="fa fa-trash-o"
                                aria-hidden="true"
                            ></i
                            ></a> --}}
                        </td>
                        </tr>
                    @endforeach
                    @else
                    <tr class="d-flex align-items-center">
                        {{__('Your Cart is empty')}}
                    </tr>
                    @endif
                
                {{-- <tr class="d-flex align-items-center">
                  <th scope="row">
                    <div class="cart_img">
                      <img
                        src="https://montechbd.com/shopist/demo/public/uploads/1619869340-h-250-tv2.png"
                        alt="image"
                      />
                    </div>
                  </th>
                  <td class="border-0">
                    <h5>Blue Diamond Almonds</h5>
                    <h6>Rs233</h6>
                  </td>
                  <td class="border-0">
                    <a href="" class="gray_title"
                      ><i
                        class="fa fa-trash-o"
                        aria-hidden="true"
                      ></i
                    ></a>
                  </td>
                </tr> --}}
              </tbody>
            </table>
          </div>
        </div>
        <div class="modal-footer d-flex flex-column align-items-end">
          <div class="cart_top_total">
            <h6 class="text-dark mr-1">{{ single_price($total) }}</h6>
          </div>
          <div
            class="top_cartmodal_btn d-flex justify-content-between align-items-center w-100"
          >
            <a href="{{ route('cart') }}" class="them_btn_new btn_cart_modal"
              >View Cart</a
            >
            @if (Auth::check())
            <a
              href="{{ route('checkout.shipping_info') }}"
              class="them_btn_new btn_cart_modal"
              >Proceed Checkout</a
            >
            @endif
          </div>
        </div>
        @else
            <tr class="d-flex align-items-center">
                {{__('Your Cart is empty')}}
            </tr>                            
        @endif
      </div>
    </div>
</div>
  <!-- cart modal end  -->
