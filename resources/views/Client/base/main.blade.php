<div class="page-wrap">
    <main class="site-main">
    <div class="main-banner">
        <div class="container">
        <div class="main-banner-text">
            <p class="main-banner-title">Dumbbells Shop</p>
            <p class="main-banner-slogan">Best body fitness</p>
            <p class="main-banner-des">
            Lorem Ipsum is simply dummy text of the printing and typesetting
            industry. Lorem Ipsum has been the industry's standard dummy
            text ever since the 1500s, when an unknown printer
            </p>
            <div class="main-banner-shop_now">
            <a href="#">Shop now</a>
            </div>
        </div>
        </div>
    </div>
    <div class="category-product">
        <div class="container">
        <div class="category-product-row">
            <div class="category-product-col">
            <a class="category-product-item" href="#">
                <div class="category-product-image">
                <image
                    src="./assets/images/category-product/1.png"
                    alt="category product image"
                />
                </div>
                <div class="category-product-content">
                <div class="category-product-content-inner">
                    <div class="category-product-content_icon">
                    <img
                        src="./assets/images/category-product/icon-1.png"
                        alt="category product icon"
                    />
                    </div>
                    <p class="category-product-content_title">dumbbells</p>
                    <p class="category-product-content_des">
                    Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry.
                    </p>
                </div>
                </div>
            </a>
            </div>
            <div class="category-product-col">
            <a class="category-product-item" href="#">
                <div class="category-product-content">
                <div class="category-product-content-inner">
                    <div class="category-product-content_icon">
                    <img
                        src="./assets/images/category-product/icon-2.png"
                        alt="category product icon"
                    />
                    </div>
                    <p class="category-product-content_title">Strength</p>
                    <p class="category-product-content_des">
                    Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry.
                    </p>
                </div>
                </div>

                <div class="category-product-image">
                <image
                    src="./assets/images/category-product/2.png"
                    alt="category product image"
                />
                </div>
            </a>
            </div>
            <div class="category-product-col">
            <a class="category-product-item" href="#">
                <div class="category-product-image">
                <image
                    src="./assets/images/category-product/3.png"
                    alt="category product image"
                />
                </div>
                <div class="category-product-content">
                <div class="category-product-content-inner">
                    <div class="category-product-content_icon">
                    <img
                        src="./assets/images/category-product/icon-3.png"
                        alt="category product icon"
                    />
                    </div>
                    <p class="category-product-content_title">
                    power rack & cages
                    </p>
                    <p class="category-product-content_des">
                    Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry.
                    </p>
                </div>
                </div>
            </a>
            </div>
        </div>
        </div>
    </div>
    <div class="product">
        <div class="container">
        <div class="product-tab">
            <a
            href="javascript:;"
            tab-target="#product_top_sellers"
            class="product-tab-title active"
            >
            Top Sellers
            </a>
            <a
            href="javascript:;"
            tab-target="#product_featured"
            class="product-tab-title"
            >
            Featured
            </a>
            <a
            href="javascript:;"
            tab-target="#product_most_reviews"
            c
            class="product-tab-title"
            >
            Most Reviews
            </a>
        </div>
        <div class="product-list active" id="product_top_sellers">
            <div class="product-row row">
                @foreach ($product as $item)
                <div class="product-col">
                    <div class="product-item">
                    <div class="product-image">
                        <img
                        src="{{$item->product_image}}"
                        alt="product image"
                        />
                    </div>
                    <div class="product-content">
                        <div class="product-title">{{$item->product_name}}</div>
                        <div class="product-price">${{$item->product_price}}</div>
                    </div>
                    <div class="product-tool">
                        <ul>
                        <li>
                            <a href="{{route('shoppingcart.add', ['id' =>$item->product_id])}}" id="shopping_basket" class="shopping_basket"><i class="fas fa-shopping-basket"></i></a>
                        </li>
                        <li>
                            <a href="{{route('producteye', ['id' =>$item->product_id])}}"><i class="fas fa-eye"></i></a>
                        </li>
                        <li>
                            <a href=""><i class="fas fa-heart"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-exchange-alt"></i></a>
                        </li>
                        </ul>
                    </div>
                    </div>
                </div>
                @endforeach



            </div>
        </div>
        <div class="product-list" id="product_featured">
            <div class="product-row row">
            <div class="product-col">
                <div class="product-item">
                <div class="product-image">
                    <img
                    src="./assets/images/product/1.png"
                    alt="product image"
                    />
                </div>
                <div class="product-content">
                    <div class="product-title">Body Champ Cardio</div>
                    <div class="product-price">$342.00</div>
                </div>
                <div class="product-tool">
                    <ul>
                    <li>
                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                    </li>
                    <li>
                        <a href="{{route('product')}}"><i class="fas fa-eye"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-heart"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-exchange-alt"></i></a>
                    </li>
                    </ul>
                </div>
                </div>
            </div>

            <div class="product-col">
                <div class="product-item">
                <div class="product-image">
                    <img
                    src="./assets/images/product/2.png"
                    alt="product image"
                    />
                </div>
                <div class="product-content">
                    <div class="product-title">Body Champ Cardio</div>
                    <div class="product-price">$342.00</div>
                </div>
                <div class="product-tool">
                    <ul>
                    <li>
                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                    </li>
                    <li>
                        <a href="{{route('product')}}"><i class="fas fa-eye"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-heart"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-exchange-alt"></i></a>
                    </li>
                    </ul>
                </div>
                </div>
            </div>

            <div class="product-col">
                <div class="product-item">
                <div class="product-image">
                    <img
                    src="./assets/images/product/3.png"
                    alt="product image"
                    />
                </div>
                <div class="product-content">
                    <div class="product-title">Body Champ Cardio</div>
                    <div class="product-price">$342.00</div>
                </div>
                <div class="product-tool">
                    <ul>
                    <li>
                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                    </li>
                    <li>
                        <a href="{{route('product')}}"><i class="fas fa-eye"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-heart"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-exchange-alt"></i></a>
                    </li>
                    </ul>
                </div>
                </div>
            </div>

            <div class="product-col">
                <div class="product-item">
                <div class="product-image">
                    <img
                    src="./assets/images/product/4.png"
                    alt="product image"
                    />
                </div>
                <div class="product-content">
                    <div class="product-title">Body Champ Cardio</div>
                    <div class="product-price">$342.00</div>
                </div>
                <div class="product-tool">
                    <ul>
                    <li>
                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                    </li>
                    <li>
                        <a href="{{route('product')}}"><i class="fas fa-eye"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-heart"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-exchange-alt"></i></a>
                    </li>
                    </ul>
                </div>
                </div>
            </div>

            <div class="product-col">
                <div class="product-item">
                <div class="product-image">
                    <img
                    src="./assets/images/product/5.png"
                    alt="product image"
                    />
                </div>
                <div class="product-content">
                    <div class="product-title">Body Champ Cardio</div>
                    <div class="product-price">$342.00</div>
                </div>
                <div class="product-tool">
                    <ul>
                    <li>
                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                    </li>
                    <li>
                        <a href="{{route('product')}}"><i class="fas fa-eye"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-heart"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-exchange-alt"></i></a>
                    </li>
                    </ul>
                </div>
                </div>
            </div>

            <div class="product-col">
                <div class="product-item">
                <div class="product-image">
                    <img
                    src="./assets/images/product/6.png"
                    alt="product image"
                    />
                </div>
                <div class="product-content">
                    <div class="product-title">Body Champ Cardio</div>
                    <div class="product-price">$342.00</div>
                </div>
                <div class="product-tool">
                    <ul>
                    <li>
                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                    </li>
                    <li>
                        <a href="{{route('product')}}"><i class="fas fa-eye"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-heart"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-exchange-alt"></i></a>
                    </li>
                    </ul>
                </div>
                </div>
            </div>

            <div class="product-col">
                <div class="product-item">
                <div class="product-image">
                    <img
                    src="./assets/images/product/7.png"
                    alt="product image"
                    />
                </div>
                <div class="product-content">
                    <div class="product-title">Body Champ Cardio</div>
                    <div class="product-price">$342.00</div>
                </div>
                <div class="product-tool">
                    <ul>
                    <li>
                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                    </li>
                    <li>
                        <a href="{{route('product')}}"><i class="fas fa-eye"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-heart"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-exchange-alt"></i></a>
                    </li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="product-col">
                <div class="product-item">
                <div class="product-image">
                    <img
                    src="./assets/images/product/8.png"
                    alt="product image"
                    />
                </div>
                <div class="product-content">
                    <div class="product-title">Body Champ Cardio</div>
                    <div class="product-price">$342.00</div>
                </div>
                <div class="product-tool">
                    <ul>
                    <li>
                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                    </li>
                    <li>
                        <a href="{{route('product')}}"><i class="fas fa-eye"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-heart"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-exchange-alt"></i></a>
                    </li>
                    </ul>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="product-list" id="product_most_reviews">
            <div class="product-row row">
            <div class="product-col">
                <div class="product-item">
                <div class="product-image">
                    <img
                    src="./assets/images/product/1.png"
                    alt="product image"
                    />
                </div>
                <div class="product-content">
                    <div class="product-title">Body Champ Cardio</div>
                    <div class="product-price">$342.00</div>
                </div>
                <div class="product-tool">
                    <ul>
                    <li>
                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                    </li>
                    <li>
                        <a href="{{route('product')}}"><i class="fas fa-eye"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-heart"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-exchange-alt"></i></a>
                    </li>
                    </ul>
                </div>
                </div>
            </div>

            <div class="product-col">
                <div class="product-item">
                <div class="product-image">
                    <img
                    src="./assets/images/product/2.png"
                    alt="product image"
                    />
                </div>
                <div class="product-content">
                    <div class="product-title">Body Champ Cardio</div>
                    <div class="product-price">$342.00</div>
                </div>
                <div class="product-tool">
                    <ul>
                    <li>
                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                    </li>
                    <li>
                        <a href="{{route('product')}}"><i class="fas fa-eye"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-heart"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-exchange-alt"></i></a>
                    </li>
                    </ul>
                </div>
                </div>
            </div>

            <div class="product-col">
                <div class="product-item">
                <div class="product-image">
                    <img
                    src="./assets/images/product/3.png"
                    alt="product image"
                    />
                </div>
                <div class="product-content">
                    <div class="product-title">Body Champ Cardio</div>
                    <div class="product-price">$342.00</div>
                </div>
                <div class="product-tool">
                    <ul>
                    <li>
                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                    </li>
                    <li>
                        <a href="{{route('product')}}"><i class="fas fa-eye"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-heart"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-exchange-alt"></i></a>
                    </li>
                    </ul>
                </div>
                </div>
            </div>

            <div class="product-col">
                <div class="product-item">
                <div class="product-image">
                    <img
                    src="./assets/images/product/4.png"
                    alt="product image"
                    />
                </div>
                <div class="product-content">
                    <div class="product-title">Body Champ Cardio</div>
                    <div class="product-price">$342.00</div>
                </div>
                <div class="product-tool">
                    <ul>
                    <li>
                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                    </li>
                    <li>
                        <a href="{{route('product')}}"><i class="fas fa-eye"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-heart"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-exchange-alt"></i></a>
                    </li>
                    </ul>
                </div>
                </div>
            </div>

            <div class="product-col">
                <div class="product-item">
                <div class="product-image">
                    <img
                    src="./assets/images/product/5.png"
                    alt="product image"
                    />
                </div>
                <div class="product-content">
                    <div class="product-title">Body Champ Cardio</div>
                    <div class="product-price">$342.00</div>
                </div>
                <div class="product-tool">
                    <ul>
                    <li>
                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                    </li>
                    <li>
                        <a href="{{route('product')}}"><i class="fas fa-eye"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-heart"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-exchange-alt"></i></a>
                    </li>
                    </ul>
                </div>
                </div>
            </div>

            <div class="product-col">
                <div class="product-item">
                <div class="product-image">
                    <img
                    src="./assets/images/product/6.png"
                    alt="product image"
                    />
                </div>
                <div class="product-content">
                    <div class="product-title">Body Champ Cardio</div>
                    <div class="product-price">$342.00</div>
                </div>
                <div class="product-tool">
                    <ul>
                    <li>
                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                    </li>
                    <li>
                        <a href="{{route('product')}}"><i class="fas fa-eye"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-heart"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-exchange-alt"></i></a>
                    </li>
                    </ul>
                </div>
                </div>
            </div>

            <div class="product-col">
                <div class="product-item">
                <div class="product-image">
                    <img
                    src="./assets/images/product/7.png"
                    alt="product image"
                    />
                </div>
                <div class="product-content">
                    <div class="product-title">Body Champ Cardio</div>
                    <div class="product-price">$342.00</div>
                </div>
                <div class="product-tool">
                    <ul>
                    <li>
                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                    </li>
                    <li>
                        <a href="{{route('product')}}"><i class="fas fa-eye"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-heart"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-exchange-alt"></i></a>
                    </li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="product-col">
                <div class="product-item">
                <div class="product-image">
                    <img
                    src="./assets/images/product/8.png"
                    alt="product image"
                    />
                </div>
                <div class="product-content">
                    <div class="product-title">Body Champ Cardio</div>
                    <div class="product-price">$342.00</div>
                </div>
                <div class="product-tool">
                    <ul>
                    <li>
                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                    </li>
                    <li>
                        <a href="{{route('product')}}"><i class="fas fa-eye"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-heart"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-exchange-alt"></i></a>
                    </li>
                    </ul>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="client-say-slick">
        <div class="client-say">
        <p class="client-say-title">See What They Said About Us</p>
        <div class="client-say-avatar">
            <img src="./assets/images/client-say/img.png" alt="client-say" />
        </div>
        <p class="client-say-word">
            “Good services. I bought a bicycle with a wrong but they accepted
            free return for me and exchange a new product for me.
        </p>
        <div class="client-say-identify">
            <p class="client-say-name">Lina</p>
            <div class="client-say-status">Happy clients</div>
        </div>
        </div>
        <div class="client-say">
        <p class="client-say-title">See What They Said About Us</p>
        <div class="client-say-avatar">
            <img src="./assets/images/client-say/img.png" alt="client-say" />
        </div>
        <p class="client-say-word">
            “Good services. I bought a bicycle with a wrong but they accepted
            free return for me and exchange a new product for me.
        </p>
        <div class="client-say-identify">
            <p class="client-say-name">Lina</p>
            <div class="client-say-status">Happy clients</div>
        </div>
        </div>
        <div class="client-say">
        <p class="client-say-title">See What They Said About Us</p>
        <div class="client-say-avatar">
            <img src="./assets/images/client-say/img.png" alt="client-say" />
        </div>
        <p class="client-say-word">
            “Good services. I bought a bicycle with a wrong but they accepted
            free return for me and exchange a new product for me.
        </p>
        <div class="client-say-identify">
            <p class="client-say-name">Lina</p>
            <div class="client-say-status">Happy clients</div>
        </div>
        </div>
    </div>

    <div class="brand">
        <div class="container">
        <div class="row">
            <div class="brand-col">
            <div class="brand-logo">
                <img
                src="./assets/images/brand/fitness-center.png"
                alt="fitness center"
                />
            </div>
            </div>
            <div class="brand-col">
            <div class="brand-logo">
                <img
                src="./assets/images/brand/body-buiding-sports-gym.png"
                alt="body building sports gym."
                />
            </div>
            </div>
            <div class="brand-col">
            <div class="brand-logo">
                <img
                src="./assets/images/brand/health-and-fitness-center.png"
                alt="health and fitness center"
                />
            </div>
            </div>
            <div class="brand-col">
            <div class="brand-logo">
                <img
                src="./assets/images/brand/best-local-gym.png"
                alt="best local gym"
                />
            </div>
            </div>
            <div class="brand-col">
            <div class="brand-logo">
                <img
                src="./assets/images/brand/power-lifter-gymclub.png"
                alt="power lifter gymclub"
                />
            </div>
            </div>
            <div class="brand-col">
            <div class="brand-logo">
                <img
                src="./assets/images/brand/fitness-club-and-gym.png"
                alt="fitness club and gym"
                />
            </div>
            </div>
        </div>
        </div>
    </div>
    </main>
</div>
