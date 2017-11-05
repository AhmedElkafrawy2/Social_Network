$(document).ready(function(){
    
    
    var files; // varaible to carry post insert image
    
    var uploadedImageToCrop;
    
    // function to custom  create post opactity of the page body
    function createpostcustom(data){
        
        if(data == 1){
           // $(".create-post-border").css("border" , "1px dashed #000");      
            $(".create-post-opacity").css("display","block");  
            $(".create-post").css("position" , "inherit");
        }else
        {    
           // $(".create-post-border").css("border" , "0px");      
            $(".create-post-opacity").css("display","none");
            $(".create-post").css("position" , "inherit");

        }

            $(".create-post-opacity").css("z-index","99999");
            $(".create-post").css("z-index" , "999999");
        
    }
        
    // adding file uplader lib
    $('.create-post-upload-post-image').fileuploader({
             fileMaxSize: 2,
             extensions: ['jpg', 'jpeg', 'png']
    });
    
    // hide the file uploader 
    //$(".fileuploader-input").css("display" , "none");
    
    
    // click on hidden input type file when click on upload image btn create post
    $(".creaet-post-upload-iamge").click(function(){
        
        $(".create-post-upload-post-image").click();
    });
    
    
    
    
    $(".create-post-upload-post-image").on("change" , function(e){
       
        files = e.target.files;
        //console.log(files);
        if($(this).val() !== ""){
            
            $(".fileuploader-theme-default").show();
        }
        
    });
    
    $(".creaet-post-feeling").click(function(){
        
        
        $("#myModal").modal(
                {
                    keyboard: false,
                    backdrop: 'static'
                });
    });
    
    //  click on emotions itself
    
        $(".emotions-title-image").on("click",function(){
           
            var emotionsname = $(this).find("p").html();
            var emotionimage = $(this).find("img").attr("src");
            
            //alert(emotionimage);
            $(".display-emotion-modal").show();
            $(".display-emotion-modal").html("Feeling :-<p>"+ emotionsname + " </p><img src='"+ emotionimage +"' /> ");
        });
        
        // click om feeeling modal cancle btn
        
        $(".btn-feeling-close").on("click",function(){
            
            
            $(".display-emotion-modal").html("");
            $(".display-emotion-modal").hide();
            
            
        });
        
        // click om feeing modal save
        
        $(".btn-feeling-save").on("click",function(){
           
           
           var emotiondata =  $(".display-emotion-modal").html();
           $(".modal").modal("hide");
           if($(".display-emotion-modal").css("display") !== 'none'){
               
               $(".create-post").notify("Your Feeling has Been Set", "success");
           }
           
           
            
        });
        
        // click on create post more
        
        $(".creaet-post-more").on("click",function(){
            
            $(".see-post-modal").modal({
                
                    keyboard: false,
                    backdrop: 'static'
            });
            
        });
        
        // click on close privacy modal
            
            $(".btn-privacy-close").on("click",function(){
                
            });
        
        // click on privacy modal save
        
        $(".btn-privacy-save").on("click",function(){
            
            
            $(".see-post-modal").modal('hide');
            // make notification here
            $(".create-post").notify("Post Privacy Has Been Set", "success");
        });
    // click on create post byn
    
    $(".create-post-submit").on("click" , function(e){
       
       
       e.preventDefault();
       
       var posttext = $(".creaate-post-textarea").val();
       
        if(posttext == ""){
            
           $(".creaate-post-textarea").notify(
            "Post is Empty", 
            "error"
          );
       }else{
           
           var _token = $("#create-post-form").find("input[ name = '_token']").val();
           
           var postfeelingdatap   = $(".display-emotion-modal").find("p").html();
           var postfeelingdataimg = $(".display-emotion-modal").find("img").attr('src');
           
           var emotiondata = postfeelingdatap + "--"  + postfeelingdataimg ;
           
           var postprivacy = $(".options-privacy option:selected").text();
           
           
           var data =  new FormData();
           if($(".display-emotion-modal").css("display") == "none"){
            
            data.append("emotion",'');
            
           }else{
               
               data.append("emotion",emotiondata);
               
           }
           
           
           data.append("_token" , _token);
           data.append("posttext" , posttext);
           
           data.append('postPrivacy',postprivacy);
          
           var numbers = "";
           $.each(files , function(k , v){          
               data.append(k , v);
              
               numbers = k;
           });
           if(numbers !== ""){
            data.append('numerofimages',numbers);
           }
           
           //console.log(data);
           $.ajax({
              
               url  : "/post/insert",
               type : "POST",
               //headers: {'Content-Type': 'application/json'},
               data: data,
               contentType: false,
               processData: false,
               success :function(data){
                   
                   if(data == "post"){
                    
                    
                    $(".fileuploader-items").html("");
                    $(".fileuploader-items").hide();
                    $(".creaate-post-textarea").val("");
                    $(".display-emotion-modal").html("");
                    $(".display-emotion-modal").hide();
                    $(".fileuploader-theme-default").hide();
                    $('.options-privacy option[value="1"]').attr("selected", "selected");
                    toastr.options.progressBar = true;
                    toastr.options.positionClass = "toast-top-center";
                    toastr.success('your post has been created', 'Social Network')
                       
                       
                   }
                   
               },
               error:function(error){
                   
                   console.log(error);
               }
               
               
           });
       }
        
    });

    // stsrting on crate profile page
    
    // hover on profile image
    $(".profile-picture , .change-profile-image").mouseover(function(){
        
        $(".change-profile-image").css("display","block");
    });
    
    $(".profile-picture , .change-profile-image").mouseleave(function(){
        
        $(".change-profile-image").css("display","none");
    });
    
    // hover on cover image
    $(".cover-image , .edit-cover-page").mouseover(function(){
        
        $(".edit-cover-page").css("display","block");
    });
    
    $(".cover-image , .edit-cover-page").mouseleave(function(){
        
        $(".edit-cover-page").css("display","none");
    });
    
    // click on edit profile image
    $(".change-profile-image , .edit-cover-page").on("click",function(e){
       
       e.preventDefault();
       
       
       var targentclass = $(this).attr("class"); 
       if(targentclass == "change-profile-image"){
           
           $(".class_edit_image").removeClass("cover-image-change");
           $(".class_edit_image").addClass("edit_image_save");
           
           
       }else{
           $(".class_edit_image").removeClass("edit_image_save");
           $(".class_edit_image").addClass("cover-image-change");
       }
        $('html,body').animate({ scrollTop: 0 },function(){
            
        $(".edit-profie-img-container").fadeIn(1000);
        $(".create-post-opacity").css("display","block");
        $("body").css("overflow" , "hidden");
        $(".edit-profie-img-container").animate({
            
            height: "556px",
            width : "1117px",
            left  : "30px",
            top   : "65px",
            
            
        },function(){
            $(".edit-profile-content").css("display","block");
        });
        });
               
    });
    
    // click on change image inside the change image container
    
    $(".first-li").on("click",function(){
       
        $(".uploadprofileimage2").click();
     
    });
    
    // click on close inside edit profile image
    
    $(".edit-profile-page-header i").click(function(){
       
        $(".edit-profie-img-container").css("display","none");
        $(".create-post-opacity").css("display","none");
        $("body").css("overflow" , "auto");
       // $(".edit-profile-content").css("display","block");
        
        
    });
    
    $(".uploadprofileimage2").on("change",function(e){
     // ajax request to upload image from device and dislay it in the server  
     
        var _token = $(".upload_image_form").find("input[ name = '_token']").val();
        var files = e.target.files;
        var data  = new FormData();
        data.append("_token",_token);
        $.each(files,function(k,v){
           
            data.append('image',v);
    
            
        });
        
        
        $.ajax({
            
               url  : "/profile/upload",
               type : "POST",
               data: data,
               contentType: false,
               processData: false,
               success :function(data){
                
                var finalname = data.split("/");
                
                var nameofimage = finalname[finalname.length -1];
                uploadedImageToCrop = nameofimage;
             
                $(".edit-profie-img-container").css("z-index","99");
                $(".display_choosed_image").css("display","block");
                $(".image_content_display").html("<img class='croped-profile-image' src='"+ data +"' />");
                $(".croped-profile-image").cropper();
                        
                   
               },
               error:function(error){
                   
                    alert("Error Happend Try Again");
                    
               }
            
            
        });
        
    });
    
    // click on cancle image crop view
    
    $(".edit_image_cancle").on("click",function(){
        
        $(".edit-profie-img-container").css("z-index","9999");
        $(".display_choosed_image").css("display","none");
        $(".image_content_display").html("");
    });
    
    // click on save image in croping view
    
    $(".edit_image_save , .cover-image-change").on("click",function(e){
        
        // ajax requst to save croped image and remove original uploaded image
         e.preventDefault();
         var imagechoose = $(this);
         var senddata;
         if($(this).hasClass("edit_image_save")){
                
            senddata = "profile";
                
        }else{
            senddata = "cover";
        }
        
        $(".croped-profile-image").cropper('getCroppedCanvas').toBlob(function(blob){
            
            var _token = $(".crop_image_form").find("input[ name = '_token']").val();
            var formData = new FormData();
            
            formData.append('croppedImage', blob);
            //formData.append("removedimage",uploadedImageToCrop);
            formData.append("_token",_token);
 
            
            formData.append("senddata",senddata);
            $.ajax({
            
               url  : "/profile/cropimage",
               type : "POST",
               data: formData,
               contentType: false,
               processData: false,
               success :function(data){
                   
              
                $(".edit-profie-img-container").css("z-index","9999");
                $(".display_choosed_image").css("display","none");
                $(".image_content_display").html("");


                $(".edit-profie-img-container").css("display","none");
                $(".create-post-opacity").css("display","none");
                $("body").css("overflow" , "auto");
                
                // edit the profile image 
                if(imagechoose.hasClass("edit_image_save")){
                    $(".profile-picture").attr("src" , data);
                }
                else{
                    $(".cover-image").attr("src",data);
                }
                
      
               },
               error:function(error){
                   
                    alert("Error Happend Try Again");
                    
               }
            
            
        });
            
        });
        
    });
    
    // click on edit image inside change image container
    
    $(".secound-li").on("click",function(){
        
       
        
        
    });
    
    // click on update profile page information
    
    $(".update-profile-information").click(function(){
        
        $(".update_info_modal").modal({
                
           keyboard: false,
           backdrop: 'static'
        }); 
    });
 
});

