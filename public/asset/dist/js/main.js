
(function ($) {
// 
var url = $("#url").val()

     GlobaldeleteId = (id,ur) => {
        var html = `<div class="modal modal-blur fade" id="delete" tabindex="-1" role="dialog" aria-hidden="true">
           <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
               <div class="modal-content">
                 <div class="modal-body">
                   <div class="modal-title"> ${ $("#delete_title").val() } </div>
                   <div>${ $("#delete_description").val() }</div>
                 </div>
                 <div class="modal-footer">
                   <button type="button" class="btn btn-link link-secondary mr-auto" data-dismiss="modal">${ $("#cancel_lang").val() }</button>
                   <a href="${url + '/' + ur + id}" class="btn btn-danger">${ $("#delete_lang").val() }</a>
                 </div>
               </div>
           </div>
         </div>`
         $(html).appendTo('body').modal();
     }
     Statuschange = (id,ur) => {
        var html = `<div class="modal modal-blur fade" id="delete" tabindex="-1" role="dialog" aria-hidden="true">
           <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
               <div class="modal-content">
                 <div class="modal-body">
                   <div class="modal-title">Are you sure? </div>
                   <div>Status will change</div>
                 </div>
                 <div class="modal-footer">
                   <button type="button" class="btn btn-link link-secondary mr-auto" data-dismiss="modal">${ $("#cancel_lang").val() }</button>
                   <a href="${url + '/' + ur + id}" class="btn btn-primary ml-auto">Submit</a>
                 </div>
               </div>
           </div>
         </div>`
         $(html).appendTo('body').modal();
     }
     Positionchange = (id,position,ur) => {
        var html = `<div class="modal modal-blur fade" id="delete" tabindex="-1" role="dialog" aria-hidden="true">
           <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
               <div class="modal-content">
               <form action="${ url + '/' + ur + id }" method="POST" id="add_brand">
               <input name="_token" type="hidden" value="${$('meta[name="csrf-token"]').attr('content')}">
                 <div class="modal-body">
                 <div class="form-group mb-3 ">
                 <label class="form-label"> Position</label>
                 <div>
                   <input type="text" class="form-control" name="position" id="name" value="${position}" required>
                   <input type="text" class="form-control" name="old_position" id="name" value="${position}" hidden>
                 </div>
               </div>
                 </div>
                 <div class="modal-footer">
                   <button type="button" class="btn btn-link link-secondary mr-auto" data-dismiss="modal">${ $("#cancel_lang").val() }</button>
                   <button class="btn btn-primary ml-auto" type="submit">Submit</button>
                 </div>
                 </form>
               </div>
           </div>
         </div>`
         $(html).appendTo('body').modal();
     }

     View = (id,ur) => {
        $.get(url + ur + id, function (data) {
            if (data == 'fail') {
                setTimeout(function () {
                    toastr.error('Something went wrong!', 'Error!', {
                        timeOut: 2000
                    });
                }, 500);
            } else {  

                $('#_g_name').text(data.name);
                $('#_g_time').text(data.date);
                $('.g_modal_title').text($('#_view').val());
                $('#_viewGlobal').modal('show');
        }
        })        
     }
   

    
  
    

    // Item  
         $( "#add_product" ).validate({
        
            rules: {
                name: {
                        required: true,
                    },
                service_id: {
                        required: true,
                    },
                summary: {
                        required: true,
                    },
                desc: {
                        required: true,
                    },
                quantity: {
                        required: true,
                    },
                price: {
                        required: true,
                    },
                file: {
                        required: true,
                    }
                },
        submitHandler: function(form) { 
            
                form.submit();
        }
        });
        // image show 
       
    $(".main_image").spartanMultiImagePicker({
        fieldName:        'file',
        maxCount:         1,
        rowHeight:        '200px',
        groupClassName:   'col-lg-12',
        loaderIcon: '<i class="fa fa-close"></i>',
        maxFileSize:      '2598308',
        dropFileLabel : "Drop Here",
        onAddRow:       function(index){
        },
        onRenderedPreview : function(index){
        },
        onRemoveRow : function(index){
            console.log(index);
        },
        onExtensionErr : function(index, file){
            toastr.error('Please only input png or jpg type file')
        },
        onSizeErr : function(index, file){
            toastr.error('File size too big');
        }
    });
    // favicon
    $(".icon_image").spartanMultiImagePicker({
        fieldName:        'favicon',
        maxCount:         1,
        rowHeight:        '200px',
        groupClassName:   'col-lg-12',
        loaderIcon: '<i class="fa fa-close"></i>',
        maxFileSize:      '2598308',
        dropFileLabel : "Drop Here",
        onAddRow:       function(index){
        },
        onRenderedPreview : function(index){
        },
        onRemoveRow : function(index){
        },
        onExtensionErr : function(index, file){
            toastr.error('Please only input png or jpg type file')
        },
        onSizeErr : function(index, file){
            toastr.error('File size too big');
        }
    });

    // datepicker 

    var today = new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());
    $('.startDate').datepicker({
        uiLibrary: 'bootstrap4',
        iconsLibrary: 'fontawesome',
        header: true,
        format: 'yyyy-mm-dd',
        minDate: today,
        maxDate: function () {
            return $('.endDate').val();
        }
    });
    $('.endDate').datepicker({
        uiLibrary: 'bootstrap4',
        format: 'yyyy-mm-dd',
        header: true,
        iconsLibrary: 'fontawesome',
        minDate: function () {
            return $('.startDate').val();
        }
    });
    
    $('.date').datepicker({
        uiLibrary: 'bootstrap4',
        format: 'yyyy-mm-dd',
        header: true,
        iconsLibrary: 'fontawesome',
    });


  
    // select 

    $(document).ready(function () {
        $('.select').selectize({
        });
    });
   

 

 


    //email-form

    $( "#email-form" ).validate({
        
        rules: {
                mail_driver: {
                    required: true,
                },
                from_name: {
                    required: true,
                },
                from_email: {
                    required: true,
                },
                mail_host: {
                    required: true,
                },
                mail_port: {
                    required: true,
                },
                mail_username: {
                    required: true,
                },
                mail_password: {
                    required: true,
                },
                mail_encryption: {
                    required: true,
                },
                
            },
    submitHandler: function(form) {
        form.submit();
    }
    });

          // Service Type 
          $( "#add_brand" ).validate({
        
            rules: {
                position: {
                        required: true,
                    }
                },
        submitHandler: function(form) {
            form.submit();
        }
        });
    
        EditRole = (id) => {
            $.get(url + '/setting/roles/' + id, function (data) {
                if (data == 'fail') {
                    setTimeout(function () {
                        toastr.error('Something went wrong!', 'Error!', {
                            timeOut: 2000
                        });
                    }, 500);
                } else {                
                $('#add_role').attr('action',url+'/setting/role/update/'+id);
                $('#modal_title').text($('#edit_title').val());
                $('#name').val(data.name);
                $('#_nebtn').text($('#edit').val());
                $('#modal-report').modal('show');
            }
    
            }) 
        }
        
           $('#add_new_roles').on("click",function () {         
            $('#add_role').attr('action',url+'/setting/roles');
            $('#modal_title').text($('#add_title').val());
            $('#name').val('');
            $('#_nebtn').text($('#add_new').val());
            $('#modal-report').modal('show');        
        });

         // user
    $( "#user-form" ).validate({
        
        rules: {
                name: {
                    required: true,
                },
                email: {
                    required: true,
                },
                password: {
                    required: true,
                },
                phone: {
                    required: true,
                }
            },
    submitHandler: function(form) {
        form.submit();
    }
    });
         // page
    $( "#add_page" ).validate({
        
        rules: {
                title: {
                    required: true,
                },
                content: {
                    required: true,
                }
            },
    submitHandler: function(form) {
        form.submit();
    }
    });

  

    $(document).ready(function () {        
        GetSubTypeChange($("select[name='type']").val())
    });

    $("select[name='type']").on('change',function () {
        var id = $(this).val()
        GetSubTypeChange(id)
        
    })
    GetSubTypeChange =(val) => {
        switch(val){
            case '2':
                $('#_service').show();
                $('#_pages').hide();
                $('#_url').hide();
                $('#_sub_check').show();
            break;
            case '3':
                $('#_service').show();
                $('#_pages').hide();
                $('#_url').hide();
                $('#_sub_check').show();
            break;
            case '4':
                $('#_service').hide();
                $('#_pages').show();
                $('#_url').show();
                $('#_sub_check').hide();
            break;
            default: 
                $('#_service').hide();
                $('#_pages').hide();
                $('#_url').show();
                $('#_sub_check').hide();
            break;
        }
    }
      $(document).ready(function() {
        var max_fields      = 10; 
        var wrapper   		= $("._sub_menu"); 
        var add_button      = $(".add_field_button"); 
        
        var x = 1; 
        $(add_button).click(function(e){ 
            e.preventDefault();
            if(x < max_fields){ 
                x++; 
                $(wrapper).append(`<div class="row custom_add_sub mb-3 d${x}">
                <div class="col-10"><input type="text" name="sub_menu[]" class="form-control"></div>
                <div class="col-2"><a  href="javascript:;" onclick="deleteSub(${x})" class="btn btn-danger remove_field"><i class="fa fa-trash"></i></a></div>
            </div>`); 
            }
        });

        deleteSub = (e) => {
            $(`.d${e}`).remove();
             x--;
        }       
       
    });

 

}) (jQuery);