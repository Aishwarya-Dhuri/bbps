$("input[name=Subscribe]").click(function(e){
    e.preventDefault();
    var mail=$("input[name=submail]").val();
if(mail!=''&&mail!='undefined'){
    $.ajax({
        type: "POST",
        url: "subcribe.php",
        data: {mail:mail},
        success: function(res){
            if(res=="Message has been sent")
            alert("Subscribed");
            else alert("not Subscribed ");
        },
        error:function (err) {
            alert("Something went worng");
        }
});

  }
});
