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
    
    //Class 28.7
    /* Class 28.11
    wp.customize('cust_about_heading', function(value){
        value.bind(function(newvalue){
            $("#about-heading h1").html(newvalue);
        });
    });
    End Class 28.11*/
    //End 28.7
    
    //Class 28.9
    /* Class 28.11
    wp.customize('_cs_customize_options[about_heading]', function(value){
        value.bind(function(newvalue){
            $("#about-heading h1").html(newvalue);
        });
    });
    End Class 28.11*/
    //End 28.9
})(jQuery);