//Class 28.5
;(function($){
    //alert("hehheheheh");
    //console.log("Hello");
    wp.customize('cust_services_heading', function(value){
        value.bind(function(newvalue){
            //console.log(newvalue);
            $('#service-heading').html(newvalue);
        });
        
    });
    
    wp.customize('cust_services_subheading', function(value){
        value.bind(function(newvalue){
            //console.log(newvalue);
            $('#service-subheading').html(newvalue);
        });
        
    });
    
    wp.customize('cust_who_we_are_icon_color', function(value){
        value.bind(function(newvalue){
            $('.single-promo i.fa').css("color",newvalue);
        });           
    });
})(jQuery);