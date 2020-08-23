var url = $("#url").val();


$(document).ready(function () {
    $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        type:'GET',
        url: url+'/ajax/team/data/',
        success:function (data) {
            data.forEach(function(e,index){   
            $("#_team_add_page").append(`<div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-team-box">
                <div class="image">
                    <img src="${url}/${e.image}" alt="team">

                    <div class="social">
                    <a target="_blank" href="${ e.fb_url }"><i class="fab fa-facebook fa-lg"></i></a>
                    <a target="_blank" href="${ e.tw_url }"><i class="fab fa-twitter fa-lg"></i></a>
                    <a target="_blank" href="${ e.ln_url }"><i class="fab fa-linkedin fa-lg"></i></a>
                    <a target="_blank" href="${ e.sky_url }"><i class="fab fa-skype fa-lg"></i></a>
                    </div>
                </div>

                <div class="content">
                    <h3>${e.name}</h3>
                    <span>${ e.designation }</span>
                </div>
            </div>
        </div>`)
                });
                        
        },
        error:function(error){                      
        
        }
    });
});

$( "#contact_form" ).validate({
        
    rules: {
            name: {
                required: true,
            },
            email: {
                required: true,
                email: true,
            },
            message: {
                required: true,
            },
            phone: {
                required: true,
            },
            subject: {
                required: true,
            }
        },
submitHandler: function(form) {
    form.submit();
}
});