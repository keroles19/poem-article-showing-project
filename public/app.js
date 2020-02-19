
// image upload
$(function () {




    $(document).on("change",".uploadFile", function()
    {
        var uploadFile = $(this);
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support

        if (/^image/.test( files[0].type)){ // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file

            reader.onloadend = function(){ // set image data as background of div
                //alert(uploadFile.closest(".upimage").find('.imagePreview').length);
                uploadFile.closest(".imgUp").find('.imagePreview').css("background-image", "url("+this.result+")");
            }
        }

    });
    // confirmation when i delete comment
    $('#deleteComment').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        $('#deleteCommentForm').attr('action', '/admin/comment/delete/' + button.data('comment-id'));
    });

    // show comment in model
    $('#showComment').on('show.bs.modal',function ( event) {
        var button = $(event.relatedTarget);
        $.ajax({
            url : '/admin/comment/show',
            data : {
                id : button.data('show-id')
            },
            method : 'get',
            success : function(data) {
                $('#commentData').html('<p>'+data.data[0].comment+'</p>');
                $('#title').html('<p> تعليق من '+data.data[0].name+'</p>');
            }
        })
    })
    // ckeditor
    CKEDITOR.replace('content');
// appear or disappear comment
// $('.appearComment').on('click',function () {
//     $.ajax({
//         method:'get',
//         url: 'appear-comment',
//         data: {id : $(this).attr('commentId')},
//         success: function (data) {
//             // $(this).replaceWith($data)
//            if(data.status != 0){
//                $('.box').appendChild('<div class="alert alert-success">'+data.message+'</div>');
//            }
//            else{
//              $('.box').appendChild('<div class="alert alert-danger">'+data.message+'</div>');
//            }
//         }
//     });
//
// });


});
















