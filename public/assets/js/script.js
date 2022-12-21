$(document).ready(function () {
//  adding users

    $(document).on("submit","#addForm", function (e) {
        e.preventDefault();

        // ajax

        $.ajax({
            url:"/phpAdvance/pages/ajax.php",
            type:"POST",
            dataType: "json",
            data: new FormData(this),
            processData: false,
            contentType: false,
            beforeSend:function () {
                console.log('wait........Data is loading');
            },
            success:function (response) {
                console.log(response);
            },
            error:function (request,error) {
                console.log(arguments);
                console.log("Error"+ error);
            },

        });
    });


});