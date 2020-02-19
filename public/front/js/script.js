$('.single-item').slick({
    dots: true,
    infinite: true,
    speed: 2000,
    slidesToShow: 1,
    arrows: false,
    adaptiveHeight: true,
    autoplay: true,
    autoplaySpeed: 4000
});
$('.multiple-items').slick({
    infinite: true,
    slidesToShow: 3,
    autoplay: true,
    speed: 1500,
    slidesToScroll: 3,
    nextArrow: '.next',
    prevArrow: '.prev',
    autoplaySpeed: 3000,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
});
$('.multiple-item').slick({
    infinite: true,
    slidesToShow: 3,
    autoplay: true,
    speed: 1500,
    slidesToScroll: 3,
    nextArrow: '.next-2',
    prevArrow: '.prev-2',
    autoplaySpeed: 3000,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
});


$(document).ready(function(){
    $(".selsct-blood-type").on("change",function(){
        $(".blood-type").val($(".selsct-blood-type").val());
    })
    $(".selsct-your-city").on("change",function(){
        $(".your-city").val($(".selsct-your-city").val());
    })
    $(".scroll-top").click(function () {
        $(window).scrollTop(0);
    })
    new WOW().init();
    $(window).ready(function () {
        $(".loading").fadeOut(1500);
    });
    // $('html').niceScroll();

    $(function () {


        // add comment
        $("#form_comment").on('submit',function (e)
        {
            let token;
            token = $("#token").val();
            e.preventDefault();
            let path = $(location).attr('pathname'),
                url = path.search("article")!=1 ? 'add-comment-B': 'add-comment-A';
            addComment('/'+url,token);
        });

        //   addComment ajax function
        function addComment(url,token) {
            let name = $('#com_name').val(),
                email= $('#com_email').val(),
                comment=$('#com_body').val(),
                record_id=$('#record_id').val();
            $.ajax({
                    method: 'post',
                    dataType: 'json',
                    data: {
                        name:name , email:email , comment:comment ,record_id:record_id, _token: token
                    },
                    url: url,
                    success: function (data) {
                        $('#com_name').val('').attr('disabled','disabled'),
                            $('#com_email').val('').attr('disabled','disabled'),
                            $('#com_body').val('').attr('disabled','disabled');
                        $('#com').fadeIn(200).after($('<span class="alert alert-info py-2 text-bold text-primary" >سوف يتم مراجعه كومنتك  قبل النشر </span>'));
                    },
                    error: function (err) {
                        if (err.status == 422) { // when status code is 422, it's a validation issue
                            //$('#message').fadeIn().html(err.responseJSON.message);

                            // you can loop through the errors object and show it to the user
                            console.warn(err.responseJSON.errors);
                            // display errors on each form field
                            $.each(err.responseJSON.errors, function (i, error) {
                                var el = $(document).find('[name="' + i + '"]');
                                el.after($('<span style="color: red;">' + error[0] + '</span>'));
                            });
                        }
                    }
                }
            )


        }
        // end add comment



        ///////////////////////////////// loading
        $('#content_load').html(make_skeleton());

        setTimeout(function(){
           load_content();
        }, 5000);

        function make_skeleton()
        {
            var output = '';
            for(var count = 0; count < 6; count++)
            {
               output+=` <div class="video-load col-lg-4 col-12 my-2 ">
                         <div class="load"></div>
                         </div>`;
            }
            return output;
        }

        function load_content()
        {
            $.ajax({
                url:"load",
                method:"get",
                success:function(data)
                {
                    console.log(data);
                    $('#content_load').html(data);
                }
            })
        }


    });

    // ckeditor
    CKEDITOR.replace('content');







}); // end
