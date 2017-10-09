$(document).ready(function(){
    
    
    var files; // varaible to carry post insert image
    
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
            $(".display-emotion-modal").html("<p>Feeling :-</p>"+ emotionsname + " <img src='"+ emotionimage +"' /> ");
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
               
               $.notify("Your Feeling has Been Set", "success");
           }
           // her i will create notify
           
            
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

                
                 //var options = $('.hold-all-options').children('select').children('option');
                 //var option = options.find("[value='2']");
                 //option.attr('selected', 'selected');
                //$(".options-privacy").find("option[value='0']").attr('selected', 'selected');
            });
        
        // click on privacy modal save
        
        $(".btn-privacy-save").on("click",function(){
            
            
            $(".see-post-modal").modal('hide');
            // make notification here
            $.notify("Post Privacy Has Been Set", "success");
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
           
           data.append("emotion",emotiondata);
           data.append("_token" , _token);
           data.append("posttext" , posttext);
           
           data.append('postPrivacy',postprivacy);
          
           $.each(files , function(k , v){          
               data.append("image" , v);

           });
           console.log(data);
           $.ajax({
              
               url  : "/post/insert",
               type : "POST",
               //headers: {'Content-Type': 'application/json'},
               data: data,
               contentType: false,
               processData: false,
               success :function(data){
                   
                   console.log("data");
                   console.log(data);
               },
               error:function(error){
                   
                   console.log(error);
               }
               
               
           });
       }
        
    });

    
});

