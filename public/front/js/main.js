



/*  --------------------------------------------------- */
(function ($) {

    /*PreLoader*/

    $(window).on('load',function () {
        $(".loader").fadeOut;
        $("#preloader").delay(1000).fadeOut("slow");
    });
    $("#preloader").removeClass('hide');

    /*Language Selector*/
    $(document).ready(function (e){
        $(".language_drop").msDropdown({roundedBorder:false});
        $("#tech").data("dd");
    });

    /*------------------
        Background Set
    --------------------*/
    $('.set-bg').each(function () {
        var bg = $(this).data('setbg');
        $(this).css('background-image', 'url(' + bg + ')');
    });

    /*------------------
        Hero Slider
    --------------------*/
    $(".hero-items").owlCarousel({
        navigation : true,
        loop: true,
        margin: 0,
        nav: true,
        items: 1,
        dots: false,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        navText: ['<i class="ti-angle-left"></i>', '<i class="ti-angle-right"></i>'],
        smartSpeed: 1200,
        autoHeight: false,
        autoplay: true,
    });

    /*------------------
        Product Slider
    --------------------*/
    $(".product-slider").owlCarousel({
        navigation : true,
        margin: 25,
        nav: true,
        items: 3,
        dots: true,
        navText: ['<i class="ti-angle-left"></i>', '<i class="ti-angle-right"></i>'],
        smartSpeed: 1200,
        autoplay: true,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
            },
            576: {
                items: 2,
            },
            992: {
                items: 2,
            },
            1200: {
                items: 3,
            }
        }
    });

    $(".video-items").owlCarousel({
        items:2,
        merge:true,
        loop:true,
        margin:10,
        video:true,
        autoHeight: true,
        lazyLoad:false,
        center:true,
        responsive:{
            480:{
                items:2
            },
            600:{
                items:4
            }
        }
    })

    /*------------------
        CountDown
    --------------------*/
    var timerdate = "2023/2/2";

    $("#countdown").countdown(timerdate, function(event) {
        $(this).html(event.strftime("<div class='cd-item'><span>%D</span> <p>Days</p> </div>" + "<div class='cd-item'><span>%H</span> <p>Hrs</p> </div>" + "<div class='cd-item'><span>%M</span> <p>Mins</p> </div>" + "<div class='cd-item'><span>%S</span> <p>Secs</p> </div>"));
    });

    $(".countdown-coupon").countdown(timerdate, function(event) {
        $(this).html(event.strftime("<div class='cd-item'><span>%D</span> <p>Days</p> </div>"));
    });

    /*-------------------
            Range Slider
    --------------------- */
    var rangeSlider = $(".price-range"),
        minamount = $("#minamount"),
        maxamount = $("#maxamount"),
        minPrice = rangeSlider.data('min'),
        maxPrice = rangeSlider.data('max');
        minValue = rangeSlider.data('min-value') !== '' ? rangeSlider.data('min-value') : minPrice;
        maxValue = rangeSlider.data('max-value') !== '' ? rangeSlider.data('max-value') : maxPrice;

    rangeSlider.slider({
        range: true,
        min: minPrice,
        max: maxPrice,
        values: [minValue, maxValue],
        slide: function (event, ui) {
            minamount.val('$' + ui.values[0]);
            maxamount.val('$' + ui.values[1]);
        }
    });
    minamount.val('$' + rangeSlider.slider("values", 0));
    maxamount.val('$' + rangeSlider.slider("values", 1));

    /*-----------------------
     Product Single Slider
  -------------------------*/
    $(".ps-slider").owlCarousel({
        navigation: true,
        loop: false,
        margin: 10,
        nav: true,
        items: 3,
        dots: false,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        smartSpeed: 1200,
        autoHeight: false,
        autoplay: true,
    });
    /*------------------
        Single Product
    --------------------*/
    $('.product-thumbs-track .pt').on('click', function(){
        $('.product-thumbs-track .pt').removeClass('active');
        $(this).addClass('active');
        var imgurl = $(this).data('imgbigurl');
        var bigImg = $('.product-big-img').attr('src');
        if(imgurl != bigImg) {
            $('.product-big-img').attr({src: imgurl});
            $('.zoomImg').attr({src: imgurl});
        }
    });

    $('.product-pic-zoom').zoom();

    /*-------------------
            Quantity change
        --------------------- */
    var proQty = $('.pro-qty');
    proQty.prepend('<span class="dec qtybtn decrease">-</span>');
    proQty.append('<span class="inc qtybtn increase">+</span>');
    proQty.on('click', '.qtybtn', function () {
        var $button = $(this);
        var oldValue = $button.parent().find('input').val();
        if ($button.hasClass('inc')) {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 1;
            }
        }
        $button.parent().find('input').val(newVal);
    });
})(jQuery);

function addCart(productId){
    $.ajax({
        type: "GET",
        url: "cart/add",
        data: {productId: productId},
        success: function (response){
            $('.cart-count').text(response['count']);
            $('.cart-price').text('$' + response['total']);
            // $('.select-total h5').text('$' + response['total']);

            var cartHover_tbody = $('.select-items tbody');
            var cartHover_exitsItem = cartHover_tbody.find("tr" + "[data-rowId='" + response['cart'].rowId + "']");

            if (cartHover_exitsItem.length){
                cartHover_exitsItem.find('.product-selected p').text('$' + response['cart'].price.toFixed(2) + ' x ' + response['cart'].qty);
            } else{
                var newItem =
                    '<tr data-rowId = "' + response['cart'].rowId + '">\n' +
                    '    <td class="si-pic">' +
                    '       <img style="height: 70px;" ' +
                    '            src="front/img/products/' + response['cart'].options.images[0].path + '" alt=""></td>\n' +
                    '    <td class="si-text">\n' +
                    '        <div class="product-selected">\n' +
                    '            <p>$'+ response['cart'].price.toFixed(2) + ' x ' + response['cart'].qty + '</p>\n' +
                    '            <h6>'+ response['cart'].name + '</h6>\n' +
                    '        </div>\n' +
                    '    </td>\n' +
                    '    <td class="si-close">\n' +
                    '        <i onclick="removeCart(\'' + response['cart'].rowId + '\')" class="ti-close"></i>\n' +
                    '    </td>\n' +
                    '</tr>';

                cartHover_tbody.append(newItem)
            }

            alert('Add successful!\nProduct: ' + response['cart'].name)
            console.log(response);
        },
        error: function (response){
            alert('Add failed.');
            console.log(response);
        },
    });
}

function removeCart(rowId){
    $.ajax({
        type: "GET",
        url: "cart/delete",
        data: {rowId: rowId},
        success: function (response){
            //xu ly o phan hover
            $('.cart-count').text(response['count']);
            $('.cart-price').text('$' + response['total']);
            // $('.select-total h5').text('$' + response['total']);

            var cartHover_tbody = $('.select-items tbody');
            var cartHover_exitsItem = cartHover_tbody.find("tr" + "[data-rowId='" + rowId + "']");
            cartHover_exitsItem.remove();

            //xu ly o phan cart
            var cart_tbody = $('.cart-table tbody');
            var cart_existItem = cart_tbody.find("tr" + "[data-rowId='" + rowId + "']")
            cart_existItem.remove();

            alert('Delete successful!\nProduct: ' + response['cart'].name)
            console.log(response);
        },
        error: function (response){
            alert('Delete failed.');
            console.log(response);
        },
    });
}

