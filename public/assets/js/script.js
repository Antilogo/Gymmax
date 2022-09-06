$(document).ready(function () {
    $(".header-bar").on("click", function (e) {
        $(".header-navbar").addClass("active");
        $("body").addClass("stop-scrolling");
    });

    $(".header-navbar").on("click", function (e) {
        if ($(e.target).closest(".header-navbar ul").length <= 0) {
            $(".header-navbar").removeClass("active");
            $("body").removeClass("stop-scrolling");
        }
    });

    $(".product-tab a").on("click", function (e) {
        const tab_target = $(this).attr("tab-target");
        // Xóa active của các product-list và product-tab a
        $(".product-list").removeClass("active");
        $(".product-tab a").removeClass("active");
        // /Khi click vào product-tab nào thì nó sẽ được thêm class active
        // đồng thời product list có id = giá trị của thuộc tính tab - target cũng được thêm class active
        $(this).addClass("active");
        $(tab_target).addClass("active");
    });

    $(".client-say-slick").slick({
        dots: true, // hiện dot
        arrows: false, // bỏ mũi tên 2 bên
    });

    // click vào site-footer-nav_heading
    $(".site-footer-nav_heading").on("click", function (e) {
        // remove class active ở mọi nav_list
        const footer_list = $(".site-footer-nav_heading").next();
        footer_list.removeClass("active");

        // thêm class active ở cùng cấp với site-footer-nav_heading được clich (this)
        const this_list = $(this).next();
        this_list.addClass("active");
    });

    // $(".product_amount").on("input", function() {
    //     alert($(this).val());
    //  });

    var total = 0;
    let cookie = JSON.parse(decodeURIComponent(getCookie("cart")));
    cookie.forEach(element => {
        total = total + element.price;
    })
    let oldprice = 0;



    $(".quantity").change(function () {
        // $(this).css("background-color", "#7FFF00");
        let a = $(this).val();
        // alert(a);

        let id = $(this).parent().parent().siblings('h6').html();
        // console.log("test sik", $(this).parent().parent().siblings('h6').html());
        
    });


    $(document).on("click", ".plus", function () {
        // console.log("adkfjwoeqi");
        let quantity = $(this).siblings("input").val();

        let id = parseInt($(this).parent().parent().siblings('h6').html());
        cookie.forEach(element => {
            // console.log(id);
            // console.log(element.id);
            if(id == element.id){
                if(oldprice == 0){
                    oldprice = element.price
                }else{
                    oldprice = element.price*(quantity-1)
                }
                total = total + element.price*quantity - oldprice ;
            }
        });
        var formatter = new Intl.NumberFormat('en-US', {
            style: 'currency',
            currency: 'USD',
        });
        
          let a = formatter.format(total); /* $2,500.00 */
          $('#total').text(a);
    });

    $(document).on("click", ".minus", function () {
        // console.log("adkfjwoeqi");
        let quantity = $(this).siblings("input").val();

        let id = parseInt($(this).parent().parent().siblings('h6').html());
        cookie.forEach(element => {
            // console.log(id);
            // console.log(element.id);
            if(id == element.id){
                if(oldprice == 0){
                    oldprice = element.price
                }else{
                    oldprice = element.price*(quantity-1)
                    total = total - element.price ;
                }
            }
        });
        var formatter = new Intl.NumberFormat('en-US', {
            style: 'currency',
            currency: 'USD',
        });
        
          let a = formatter.format(total); /* $2,500.00 */
          $('#total').text(a);
    })
});

function getCookie(name) {
    const value = `; ${document.cookie}`;
    const parts = value.split(`; ${name}=`);
    if (parts.length === 2) return parts.pop().split(';').shift();
  }

function gettotal(){


}
