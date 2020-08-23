var url = $("#url").val();

$(document).ready(function() {
    var page = 1;
    var lastpg = 1;
    var key = "";
    var city = $("#_city").val() ? $("#_city").val() : "";
    var user = "";
    var tags = "";

    $.ajax({
        url: url + "/home-post/?page=" + page+"&city=" + city,
        method: "GET",
        success: function(data) {
            console.log(data);
            
            page = 1;
            lastpg = data.last_page;
            console.log(lastpg);
            data = data.data;
            data.forEach(function(e, index) {
                var description =
                    e.description.length > 40
                        ? e.description.substring(0, 40) + "..."
                        : e.description;
                var profile = e.profile
                    ? e.profile
                    : "public/uploads/profile/user.jpg";

                $(".data").append(`<div class="card d-flex flex-column">
                 <div class="row row-0 flex-fill">
                 <div class="col-md-3">
                     <a href="#">
                     <img src="${url}/${e.image}" class="w-100 h-100 object-cover" alt="Card side image">
                     </a>
                 </div>
                 <div class="col">
                     <div class="card-body">
                     <h3 class="card-title"><a href="#">${e.title}</a></h3>
                     <div class="text-muted">${description}</div>
                     <div class="mt-2 mb-2">
                     <b>tag : </b>
                     ${e.tags}
                     </div>
                     <div class="d-flex align-items-center  mt-auto">
                         <span class="avatar avatar-md" style="background-image: url(${profile})"></span>
                         <div class="ml-3">
                         <a href="#" class="text-body">${e.username} </a>
                         <small class="d-block text-muted">3 days ago</small>
                         </div>
                         <div class="ml-auto">
                         
                         <a onclick="GetBook(${e.id})" href="#" class="icon d-none d-md-inline-block ml-3 text-muted" data-toggle="modal" data-target="#modal-info">
                             <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><path d="M12 20l-7 -7a4 4 0 0 1 6.5 -6a.9 .9 0 0 0 1 0a4 4 0 0 1 6.5 6l-7 7"></path></svg>
                         </a>
                         </div>
                     </div>
                     </div>
                 </div>
                 </div>
             </div>`);
            });

            if (page < lastpg) {
                $(".bt")
                    .append(`<a href="javasrcipt:;"  id="loadMore" class="btn btn-info btn-block">
                    Load More
                </a>`);
            }
        }
    });

    $(document).on("click", "#loadMore", function() {
        page = page + 1;
        AllDataPaginate();
    });
    $(document).on("click", ".searchData", function() {
        page = 1;
        tags = $("#tag").select2("data");
        tags = tags.map(m => m.text);
        city = $("#city").val();
        key = $("#keyword").val();
        user = $("#user").val();
        console.log("============user=============");
        console.log(user);
        console.log("============key=============");
        console.log(key);
        console.log("============city=============");
        console.log(city);
        console.log("============tags=============");
        console.log(tags);

        $(".data").html("");
        AllDataPaginate();
    });

    function AllDataPaginate() {
        $.ajax({
            url:
                url +
                "/home-post/?page=" +
                page +
                "&key=" +
                key +
                "&city=" +
                city +
                "&user=" +
                user +
                "&tags=" +
                tags,
            method: "GET",
            success: function(data) {
                console.log("=========== Full data ================");
                console.log(data);
                $(".bt").empty();
                lastpg = data.last_page;
                data = data.data;

                if (data.length >= 1) {
                    
                    data.forEach(function(e, index) {
                        var description =
                            e.description.length > 40
                                ? e.description.substring(0, 40) + "..."
                                : e.description;
                        var profile = e.profile
                            ? e.profile
                            : "public/uploads/profile/user.jpg";
                        $(".data").append(`<div class="card d-flex flex-column">
                    <div class="row row-0 flex-fill">
                    <div class="col-md-3">
                        <a href="#">
                        <img src="${url}/${e.image}" class="w-100 h-100 object-cover" alt="Card side image">
                        </a>
                    </div>
                    <div class="col">
                        <div class="card-body">
                        <h3 class="card-title"><a href="#">${e.title}</a></h3>
                        <div class="text-muted">${description}</div>
                        <div class="mt-2 mb-2">
                        <b>tag : </b>
                        ${e.tags}
                        </div>
                        <div class="d-flex align-items-center  mt-auto">
                            <span class="avatar avatar-md" style="background-image: url(${profile})"></span>
                            <div class="ml-3">
                            <a href="" class="text-body">${e.username} </a>
                            <small class="d-block text-muted">3 days ago</small>
                            </div>
                            <div class="ml-auto">
                            <a onclick="GetBook(${e.id})" href="#" class="icon d-none d-md-inline-block ml-3 text-muted" data-toggle="modal" data-target="#modal-info">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><path d="M12 20l-7 -7a4 4 0 0 1 6.5 -6a.9 .9 0 0 0 1 0a4 4 0 0 1 6.5 6l-7 7"></path></svg>
                            </a>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>`);
                    });

                    if (page < lastpg) {
                        $(".bt")
                            .append(`<a href="javasrcipt:;"  id="loadMore" class="btn btn-info btn-block">
                            Load More
                        </a>`);
                    }
                } else {
                    $(".data").append(`<div class="card d-flex flex-column">
                    <div class="row row-0 flex-fill">
                    <div class="col-md-3">
                            <h5 class="text-center p-b-5">
                            Post not found
                           </h5>
                    </div>
                    </div>
                    </div>`);
                }
            }
        });
    }
});


$("#GetBook").click(function() {
    var id = $("#set_book_id").val();
    $.ajax({
        url: url + "/get-book/" + id,
        method: "GET",
        success: function(data) {
            toastr.success(data, "Success");
        },
        error: function(data) {
            toastr.error("Somethinng went wrong!", "Error");
        }
    });
});
$(".more_filter").click(function() {
    $(".less_filter").css("display", "block");
    $(this).css("display", "none");
});
