$(document).ready(function () {
    $('ul.tabs').tabs();
    // Initialize collapse button
    $(".button-collapse").sideNav({
        width: "300px",
        edge: 'left', // Choose the horizontal origin
        closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
        draggable: true // Choose whether you can drag to open on touch screens
    });

    var inclBtw = '<span style="font-size:.5em"> incl btw</span>';
    var exclBtw = '<span style="font-size:.5em"> excl btw</span>';


    $('select').material_select();

    $('.carousel.carousel-slider').carousel({
        fullWidth: true
    });


    $('.carousel-fixed-item').click(function () {
        $('.carousel').carousel('next');
    });

    setInterval(function () {
        $('.carousel').carousel('next');
    }, 5000);


    $(".amount-drink").change(function () {
        var price = $(this).find(':selected').data('exclbtw');
        $(".priceInclBtw").html("€ " + (price * 1.21).toFixed(2) + inclBtw);
        $(".priceExclBtw").html("€ " + price.toFixed(2) + exclBtw);

        /*switch (this.value) {
         case "1":
         $(".priceInclBtw").html("€ 4,25 " + inclBtw);
         $(".priceExclBtw").html("€ 3,50 " + exclBtw);
         break;
         case "2":
         $(".priceInclBtw").html("€ 5,50 " + inclBtw);
         $(".priceExclBtw").html("€ 4,50 " + exclBtw);
         break;
         case "3":
         $(".priceInclBtw").html("€ 7,25 " + inclBtw);
         $(".priceExclBtw").html("€ 6,00 " + exclBtw);
         break;
         case "4":
         $(".priceInclBtw").html("€ 14,00 " + inclBtw);
         $(".priceExclBtw").html("€ 12,00 " + exclBtw);
         break;
         }*/
    });

    $(".select-stars").mouseover(function () {
        $(".select-stars").css('cursor', 'pointer');
    });
    
     $("#deleteItem").hover(function () {
         console.log("delete");
        $("#deleteItem").css('cursor', 'pointer');
    });
    


    $(".select-stars").click(function (e) {
        var allStars = $(".select-stars");

        console.log(e);
    });


    $("#logInAdmin").click(function () {
        $.get('admin-detail.php', function (result) {
            $result = $(result);

            $("main").html($result);

        }, 'html');
    });




});