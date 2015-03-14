  $(document).ready(function(){                
        $(window).bind('scroll',fetchMore);
   });

   fetchMore = function (){
       if ( $(window).scrollTop() >= $(document).height()-$(window).height()-50 ){
           $(window).unbind('scroll',fetchMore);
            $.post('/mattias/home/aboutCont',{ 'pos':'true' },
            function(data) {
               if(data.length>1){
                    $("#body-content").append(data);
                    $(window).bind('scroll',fetchMore);
               }
            });
        }
   }