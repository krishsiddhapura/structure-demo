var nodatafound ='<div class="py-4 text-center w-100"><lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#405189,secondary:#ff0000" style="width:72px;height:72px"></lord-icon><h5 class="mt-4 text-muted">No Result Found</h5></div>';
var sEmptyTable ='<div class="py-4 text-center w-100"><lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#405189,secondary:#ff0000" style="width:72px;height:72px"></lord-icon><h5 class="mt-4 text-muted">No Data Available</h5></div>';
var loadercontent ='<div class="main-loadercover mt-5"><div class="loader-circle mx-auto d-flex align-items-center "><div class="ml-loader"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>Please Wait...</div></div>';

Array.from(document.querySelectorAll(".auth-pass-inputgroup")).forEach(function (e) {
  Array.from(e.querySelectorAll(".password-addon")).forEach(function (r) {
      r.addEventListener("click", function (r) {
          var o = e.querySelector(".password-input");
          "password" === o.type ? (o.type = "text") : (o.type = "password");
      });
  });
});



    // File Preview
    $(document).on("change",".file-preview",function() {
        var value = $(this).attr("id");
        UploadFileURL(this,value);
    });
    function UploadFileURL(input, value){
        var files = input.files || [];
        if (!files.length) return;
        var file = $(input).val();
        var ext = file.split('.').pop();
        var fileName = $(input).val().split('/').pop().split('\\').pop();
        var videoext = ['mp4', 'webp', 'mkv', 'gif', 'm4v','webm','mov'];
        var imgext = ['jpeg', 'jpg', 'png', 'gif', 'avif','svg'];
        var docext = ['doc', 'pdf', 'docx', 'text','xls','xlsx', 'ppt', 'pptx', 'pptx', 'pptm'];
        var audioext = ['mp3', 'm4a', 'flac', 'mp4', 'wav','wma','aac'];
        $("label[for=" + value + "] .needsclick").addClass('uploadedvideo');
        $("label[for=" + value + "] .uploaded-preview").fadeIn(500);
        var filereader = new FileReader();
        filereader.onload = function (e) {
            if($.inArray(ext, imgext) != '-1'){
                $("label[for=" + value + "] .uploaded-preview").html('<img src="'+e.target.result+'" alt="" class="imgupload w-100 h-100 object-contain" id="product-img"/>');
            }else if($.inArray(ext, videoext) != '-1') {
                $("label[for=" + value + "] .uploaded-preview").html('<video class="w-100 h-100" controls><source src="'+e.target.result+'"></source></video>');
            }else if($.inArray(ext, docext) != '-1') {
                var docfilename = "";
                if(ext == "pdf"){
                    docfilename = "pdf";
                }else if(ext == 'doc' || ext == 'docx' || ext == 'text'){
                    docfilename = "doc";
                }else if(ext == 'xls' || ext == 'xlsx'){
                    docfilename = "xls";
                }else if(ext == 'ppt' || ext == 'pptx' || ext == 'pptm'){
                    docfilename = "ppt";
                }else{
                    docfilename = "doc";
                }
                $("label[for=" + value + "] .uploaded-preview").html('<img src="assets/images/filetype/'+docfilename+'.png" alt="" class="imgupload w-100 h-100p  object-contain"/><h4 class="filename mt-4"></h4>');
                $("label[for=" + value + "] .filename").text(fileName);
            }else if($.inArray(ext, audioext) != '-1') {
                $("label[for=" + value + "] .uploaded-preview").html('<audio controls><source src="'+e.target.result+'"></audio>');
            }else{
                $("label[for=" + value + "] .uploaded-preview").html('<lord-icon src="https://cdn.lordicon.com/nocovwne.json" trigger="loop" colors="primary:#405189,secondary:#0ab39c" style="width: 130px; height: 130px;" class="mb-2"></lord-icon><h4 class="filename mt-1"></h4>');
                $("label[for=" + value + "] .filename").text(ext+' File does not support');
            }
        }
        filereader.readAsDataURL(files[0]);
    }



    // Show more text option 
		var showChar = 170; 
        var ellipsestext = "...";
        var moretext = "Read more";
        var lesstext = "Read less";
        //Cut content based on showChar length
        if ($(".toggle-text").length) {
            $(".toggle-text").each(function() {

                var content = $(this).html();
                console.log(content);
         
                if(content.length > showChar) {
         
                    var contentExcert = content.substr(0, showChar);
                    var contentRest = content.substr(showChar, content.length - showChar);
                    var html = contentExcert + '<span class="toggle-text-ellipses">' + ellipsestext + ' </span> <span class="toggle-text-content"><span style="display: none;">' + contentRest + '</span><a href="javascript:;" class="toggle-text-link text-theme fw-500">' + moretext + '</a></span>';
         
                    $(this).html(html);
                }
            });
        }
        //Toggle content when click on read more link
        $(".toggle-text-link").click(function(){
            if($(this).hasClass("less")) {
                $(this).removeClass("less");
                $(this).html(moretext);
            } else {
                $(this).addClass("less");
                $(this).html(lesstext);
            }
            $(this).parent().prev().toggle();
            $(this).prev().toggle();
            return false;
        }); 



Fancybox.bind("[data-fancybox]", {
    // Your custom options
});

