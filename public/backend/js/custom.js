(function($){
    $(document).ready(function(){
        $(document).on('click','a#logout-user',function(e){
            e.preventDefault();


            $('form#logout-form').submit();
        });
    });
})(jQuery) 