

///// Contact page form submit

$("#contact button").on("click",function(e){
    e.preventDefault();
    
    var eposta = $("#eposta").val();
    var phone = $("#phone").val();
    var adress = $("#adress").val();
    var map = $("#map").val();
    var res = "";

    $.ajax({
        method:"POST",
        url:"./controller/insert.php",
        //dataType: 'json',
        data:{
            email:eposta,
            phone:phone,
            adress:adress,
            map:map
        },
        success:function(response){
            console.log(response);
            $('#contactModal').modal(); 
            $("#contact button").attr("disabled",true);
        },
        error:function(xhr,status,error){
            console.log(xhr);
            console.log(status);
            console.log(error)
        }
    })
});

//// Settings page form submit

$("#settings button").on("click",function(e){
    e.preventDefault();

    var username = $("#username").val();
    var password = $("#password").val();
    var title = $("#title").val();
    var description = $("#description").val();
    var keywords = $("#keywords").val();
    var logo = $("#logo").val();

    $.ajax({
        method:"POST",
        url:"./controller/insert.php",
        data:{
            username:username,
            password:password,
            title: title,
            description: description,
            keywords : keywords,
            logo:logo
        },
        success:function(response){
            console.log(response);
            $("#contactModal").modal();
            $("#settings button").attr("disabled",true);
        },
        error:function(xhr,status,error){
            console.log(xhr);
            console.log(status);
            console.log(error)
        }
    });
});
    //// Settings page form submit

$("#category button").on("click",function(e){
    e.preventDefault();

    var category = $("#categoryName").val();

    $.ajax({
        method:"POST",
        url:"./controller/insert.php",
        data:{
            category: category
        },
        success:function(response){
            console.log(response);
            $("#contactModal").modal();
            $("#category button").attr("disabled",true);
        },
        error:function(xhr,status,error){
            console.log(xhr);
            console.log(status);
            console.log(error)
        }
    });
});
