$("#sendmail").click(function(e){
    e.preventDefault();
    var mail=$("input[name=email]").val();
    var name=$("input[name=name]").val();
    var phone=$("input[name=phone]").val();
    var message=$("textarea[name=message]").val();
    // console.log(message);
    var desiredloc=$("input[name=desiredloc]").val();
if(mail!=''&&mail!='undefined'){
    $.ajax({
        type: "POST",
        url: "contact_send_mail.php",
        data: {
            email:mail,
            name:name,
            desiredloc:desiredloc,
            phone:phone,
            message:message
        },
        success: function(res){
            console.log(res);
            if(res=="Message has been sent")
            alert("Your query has been successfully sent");
            else alert("Your query has not been successfully sent");
        },
        error:function (err) {
            alert("Something went worng");
        }
});

  }
});
