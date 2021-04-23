<script src="<?php echo SOURCE; ?>adminpanel/assets/vendors/js/vendor.bundle.base.js"></script>
<script src="<?php echo SOURCE; ?>adminpanel/assets/vendors/chart.js/Chart.min.js"></script>
<script src="<?php echo SOURCE; ?>adminpanel/assets/js/off-canvas.js"></script>
<script src="<?php echo SOURCE; ?>adminpanel/assets/js/hoverable-collapse.js"></script>
<script src="<?php echo SOURCE; ?>adminpanel/assets/js/misc.js"></script>
<script src="<?php echo SOURCE; ?>adminpanel/assets/js/dashboard.js"></script>
<script src="<?php echo SOURCE; ?>adminpanel/assets/js/todolist.js"></script>
<script src="<?php echo SOURCE; ?>adminpanel/assets/js/jqueryvalidate.js"></script>
<script src="<?php echo SOURCE; ?>adminpanel/assest/js/file-upload.js"></script> 

<script> 
    main = "https://localhost/MyBlogPHP/";
    $(document).ready(function () {

    $('#loginform').validate({ 
        rules: {
            username: {
                required: true,
            },
            password: {
                required: true,
                minlength: 6
            }
        },
        submitHandler: function (form) { 
           var adminform = ($("#loginform").serialize());
           $.post(main + "posts/login", {formsource:adminform}, function(data){
               if (data.operation == "nothing"){
                   alert("There Is No User Such As.");       
               }else if (data.operation == "wrongpassword"){
                   alert("Wrong Password!");           
               }else if (data.operation == "login"){
                   alert("Succesful! You Will Be Directed.");
                   location.reload();
               }
           },"json");
           
        }
    });
    $('#newblog').validate({ 
        rules: {
            hood: {
                required: true,
            },
            title: {
                required: true,
            },
            category: {
                required: true,
            },
            status: {
                required: true,
            },
            content: {
                required: true,
            }
        },
        submitHandler: function (form) {  
                var formData = new FormData();
                $.each($(".xfile"), function (i) {
                    formData.append('files[]', $(".xfile")[i].files[0]);
                });
                var formsource = ($("#addnewblog").serialize());
                formData.append('formsource', formsource);
                $.ajax({
                    url: main + "posts/addnewblog", 
                    dataType: 'text', 
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: formData,
                    type: 'post',
                    dataType: 'json',
                    success: function (data) {
                        if (data.operation == "successful")
                        {
                            location.href = main + "admin/myblogs/" + data.id;
                        }  
                    },
                    error: function (data) {
                        alert("Failed!");
                        console.log(data);
                    }
                });
        }    
    });
        $('#updateblog').validate({
            rules: {
                hood: {
                    required: true,
                },
                title: {
                    required: true,
                },
                category: {
                    required: true,
                },
                status: {
                    required: true,
                },
                content: {
                    required: true,
                }
            },
            submitHandler: function (form) { 
                var formData = new FormData();
                $.each($(".xfile"), function (i) {
                    formData.append('files[]', $(".xfile")[i].files[0]);
                });
                var formsource = ($("#updateblog").serialize());
                formData.append('formsource', formsource);
                $.ajax({
                    url: main + "posts/updateblog",
                    dataType: 'text',
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: formData,
                    type: 'post',
                    dataType: 'json',
                    success: function (data) {
                    if (data.operation == "successful")
                    {
                            location.reload();
                    }

                    },
                    error: function (data) {
                        alert("Failed");
                        console.log(data);
                    }
                });
            }
        });
            
});
</script>
</body>
</html>