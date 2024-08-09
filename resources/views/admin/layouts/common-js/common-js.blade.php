<script>
    var zeroRecords = '<div class="py-4 text-center w-100"><lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#406bd9" style="width:72px;height:72px"></lord-icon><h5 class="mt-4 text-muted">No Result Found</h5></div>';
    var emptyTable = '<div class="py-4 text-center w-100"><lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#406bd9" style="width:72px;height:72px"></lord-icon><h5 class="mt-4 text-muted">No Data Available</h5></div>';
    var processing = '<span class="main-loadercover mt-0"><div class="loader-circle mx-auto d-flex align-items-center white-space-nowrap"><div class="ml-loader"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>Please Wait...</div></span>';
    var error = '';

    // DataTable Warning
    function dataTableError(id, message = "No data available in table !") {
        $(`#${id}_processing`).remove();
        $(`#${id} tbody`).html(`<tr class="odd"><td valign="top" colspan="100" class="dataTables_empty"><div class="py-4 text-center w-100"><lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#5156be,secondary:#b2caff" style="width:72px;height:72px"></lord-icon><h5 class="mt-4 text-muted">${message}</h5></div></td></tr>`);
    }

    // Success Swal
    function sendSuccess(message){
        Swal.fire({
            title: "Success!",
            text: message,
            icon: "success",
            confirmButtonClass: "btn btn-primary w-md mt-3",
            showCancelButton: false,
            showConfirmButton: false,
            timer: 2000,
        });
    }

    // Warning Swal
    function sendWarning(message){
        Swal.fire({
            title: "Warning!",
            text: message,
            icon: "warning",
            showCancelButton: false,
            showConfirmButton: false,
            timer: 2000,
        });
    }

    // Error Swal
    function sendError(message){
        Swal.fire({
            title: "Error!",
            text: message,
            icon: "error",
            showCancelButton: false,
            showConfirmButton: false,
            timer: 2000,
        });
    }

    // Handle Ajax error
    function actionError(xhr,message = "{{ERROR_400}}"){
        if (xhr.status == 400){
            sendError(message);
        } else if (xhr.status === 401) {
            sendError("{{ERROR_401}}");
            setTimeout(function (){
                window.location.href = "{{route('admin.logout')}}"
            },1500);
        } else if (xhr.status === 403) {
            sendError("{{ERROR_403}}")
        } else if (xhr.status === 500) {
            sendError("{{ERROR_500}}")
        }
    }

    // Action Error
    {{--function actionError(xhr) {--}}
    {{--    var error;--}}
    {{--    if (xhr.status === 0) {--}}
    {{--        error = "{{ __('message.check_network') }}";--}}
    {{--    } else if (xhr.status === 200) {--}}
    {{--        error = "{{ __('message.something_stuck') }}";--}}
    {{--    } else if (xhr.status === 400) {--}}
    {{--        error = "{{ __('message.bad_request') }}";--}}
    {{--    } else if (xhr.status === 401) {--}}
    {{--        error = "{{ __('message.unauth_user') }}";--}}
    {{--    } else if (xhr.status === 403) {--}}
    {{--        error = "{{ __('message.request_forbidden') }}";--}}
    {{--    } else if (xhr.status === 404) {--}}
    {{--        error = "{{ __('message.request_url') }}";--}}
    {{--    } else if (xhr.status === 405) {--}}
    {{--        error = "{{ __('message.request_method') }}";--}}
    {{--    } else if (xhr.status === 408) {--}}
    {{--        error = "{{ __('message.request_timeout') }}";--}}
    {{--    } else if (xhr.status === 419) {--}}
    {{--        error = "{{ __('message.session_expire') }}";--}}
    {{--    } else if (xhr.status === 500) {--}}
    {{--        error = "{{ __('message.internal_server') }}";--}}
    {{--    } else if (xhr.status === 502) {--}}
    {{--        error = "{{ __('message.bad_gateway') }}";--}}
    {{--    } else if (xhr.status === 511) {--}}
    {{--        error = "{{ __('message.network_auth') }}";--}}
    {{--    } else {--}}
    {{--        error = "{{ __('message.something_wrong') }}";--}}
    {{--    }--}}
    {{--    sendError(error);--}}
    {{--}--}}

    // File Preview
    $(document).on("change",".file-preview",function() {
        var value = $(this).attr("id");
        UploadFileURL(this,value);
    });

    // upload file url function
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
                $("label[for=" + value + "] .uploaded-preview").html('<lord-icon src="https://cdn.lordicon.com/nocovwne.json" trigger="loop" colors="primary:#040404f2,secondary:#0ab39c" style="width: 130px; height: 130px;" class="mb-2"></lord-icon><h4 class="filename mt-1"></h4>');
                $("label[for=" + value + "] .filename").text(ext+' File does not support');
            }
        }
        filereader.readAsDataURL(files[0]);
    }

    // Accepts nubers only in input
    $('.numberonly').keypress(function(e) {
        var charCode = (e.which) ? e.which : event.keyCode;
        var inputValue = $(this).val();

        // Check if the pressed key is a digit or a single dot
        if ((charCode >= 48 && charCode <= 57) || charCode === 46) {
            if (inputValue.indexOf('.') !== -1 && charCode === 46) {
                return false;
            }
            return true;
        } else {
            return false;
        }
    });

    // UTC to LOCAL TZ
    function utcToLocal(utcTimeString, format = {
        year: 'numeric',
        month: 'long',
        day: 'numeric',
        hour: 'numeric',
        minute: 'numeric'
    }) {
        const utcDate = new Date(utcTimeString);
        const istOffsetMinutes = 330;
        const istTime = new Date(utcDate.getTime() + istOffsetMinutes * 60 * 1000);
        const formattedDateTime = istTime.toLocaleString('en-US', format);
        return formattedDateTime;
    }

    // Format Date & Time
    function formatDateTime(utcTimeString, format = {
        year: 'numeric',
        month: 'long',
        day: 'numeric',
        hour: 'numeric',
        minute: 'numeric'
    }) {
        const utcDate = new Date(utcTimeString);
        return utcDate.toLocaleString('en-US', format);
    }

    // Format number with comma
    function formatNumberWithComma(number) {
        return number.toLocaleString('en-IN', {minimumFractionDigits: 2, maximumFractionDigits: 2});
    }

    // Remove comma from number
    function formatNumberWithoutComma(numberString) {
        return parseFloat(numberString.replace(/,/g, ""));
    }

    function convertTo12HourFormat(time24) {
        const [hours, minutes] = time24.split(':');
        let period = 'AM';
        let hours12 = parseInt(hours, 10);

        if (hours12 >= 12) {
            period = 'PM';
            if (hours12 > 12) {
                hours12 -= 12;
            }
        }

        if (hours12 === 0) {
            hours12 = 12;
        }

        return `${hours12}:${minutes} ${period}`;
    }
</script>
