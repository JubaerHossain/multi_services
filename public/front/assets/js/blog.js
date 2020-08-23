var url = $('#url').val();




$(document).ready(function () {
    var page = 1;
    var lastpg = 1;
    var _categor_id = $("#_categor_id").val();
  

    
    $.ajax({
        url: url+'/ajax/home-blog/?page='+page+'&_categor_id='+_categor_id,
        method: 'GET',
        success:function(data){
            page = 1;
            lastpg = data.last_page;
            data=data.data

            data.forEach(function(e,index){   
                var title = (e.title).length > 40 ? e.title.substring(0, 40) +'...' : e.title;
                var summary = (e.summary).length > 200 ? e.summary.substring(0, 200) +'...' : e.summary;
                    
                 $("#data").append(`<div class="col-lg-6 col-md-6">
                 <div class="single-blog-post">
                     <div class="entry-thumbnail">
                         <a href="${url}/blog-details/${e.slug}"><img src="${url}/${e.image}" alt="image"></a>
                     </div>

                     <div class="entry-post-content">
                         <div class="entry-meta">
                             <ul>
                                 <li><a href="#">${e.name}</a></li>
                                 <li>${e.date}</li>
                             </ul>
                         </div>

                         <h3><a href="${url}/blog-details/${e.slug}">${title}</a></h3>
                         <p>${summary}</p>
                         <a href="${url}/blog-details/${e.slug}" class="learn-more-btn">Read More <i class="flaticon-add-1"></i></a>
                     </div>
                 </div>
             </div>`)
                });

                if(page < lastpg){
                    $("#bt").append(`<div class="col-lg-12 text-center">
                    <button id="loadMore" class="btn btn-primary custom">Load more</button>
                </div>`);
                }
            
        }
    });

    $(document).on("click","#loadMore",function() {
        page = page +1 ;           
        AllDataPaginate();
    });
    $(document).on("click","#btn-search",function() {
        key = $('#search').val();         
        AllData(key);
     });
     function AllData(key='',_categor_id=''){
         $("#data").empty(); 
         console.log(key);
         $.ajax({
             url: url+'/ajax/home-blog/?page='+page+'&_categor_id='+_categor_id+'&key='+key,
             method: 'GET',
             success:function(data){
                 console.log(data);
                 lastpg = data.last_page;
                 data=data.data
                 $("#bt").empty() 
                 if (data.length >= 1) {
                 data.forEach(function(e,index){ 
                     var title = (e.title).length > 40 ? e.title.substring(0, 40) +'...' : e.title;
                     var summary = (e.summary).length > 200 ? e.summary.substring(0, 200) +'...' : e.summary;
                     $("#data").append(`<div class="col-lg-6 col-md-6">
                     <div class="single-blog-post">
                         <div class="entry-thumbnail">
                             <a href="${url}/blog-details/${e.slug}"><img src="${url}/${e.image}" alt="image"></a>
                         </div>
    
                         <div class="entry-post-content">
                             <div class="entry-meta">
                                 <ul>
                                     <li><a href="#">${e.name}</a></li>
                                     <li>${e.date}</li>
                                 </ul>
                             </div>
    
                             <h3><a href="${url}/blog-details/${e.slug}">${title}</a></h3>
                             <p>${summary}</p>
                             <a href="${url}/blog-details/${e.slug}" class="learn-more-btn">Read More <i class="flaticon-add-1"></i></a>
                         </div>
                     </div>
                 </div>`)
                 });
 
                     if(page < lastpg){
                         $("#bt").append(`<div class="col-lg-12 text-center">
                         <button id="loadMore" class="btn btn-primary custom">Load more</button>
                     </div>`);
                     }
                 } else {
                     $("#data").append(`<div class="m-b-45">    
                              <div class="p-t-16">
                                  <h5 class="text-center p-b-5">
                                          Product not found
                                  </h5>
                             </div>
                         </div>`)
                 }
                 
             }
         });
     }

    function AllDataPaginate(){
        $.ajax({
            url: url+'/ajax/home-blog/?page='+page+'&_categor_id='+_categor_id,
            method: 'GET',
            success:function(data){
                lastpg = data.last_page;
                data=data.data
                $("#bt").empty() 
                if (data.length >= 1) {
                data.forEach(function(e,index){ 
                    var title = (e.title).length > 40 ? e.title.substring(0, 40) +'...' : e.title;
                    var summary = (e.summary).length > 200 ? e.summary.substring(0, 200) +'...' : e.summary;
                    $("#data").append(`<div class="col-lg-6 col-md-6">
                    <div class="single-blog-post">
                        <div class="entry-thumbnail">
                            <a href="${url}/blog-details/${e.slug}"><img src="${url}/${e.image}" alt="image"></a>
                        </div>
   
                        <div class="entry-post-content">
                            <div class="entry-meta">
                                <ul>
                                    <li><a href="#">${e.name}</a></li>
                                    <li>${e.date}</li>
                                </ul>
                            </div>
   
                            <h3><a href="${url}/blog-details/${e.slug}">${title}</a></h3>
                            <p>${summary}</p>
                            <a href="${url}/blog-details/${e.slug}" class="learn-more-btn">Read More <i class="flaticon-add-1"></i></a>
                        </div>
                    </div>
                </div>`)
                });

                    if(page < lastpg){
                        $("#bt").append(`<div class="col-lg-12 text-center">
                        <button id="loadMore" class="btn btn-primary custom">Load more</button>
                    </div>`);
                    }
                } else {
                    $("$data").append(`<div class="m-b-45">    
                             <div class="p-t-16">
                                 <h5 class="text-center p-b-5">
                                         Blog not found
                                 </h5>
                            </div>
                        </div>`)
                }
                
            }
        });
    }

});