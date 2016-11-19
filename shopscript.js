
       $(document).ready(function(){
           

       // HTML start
           $('.html').on('click', function() {
               if ( $('form').css('display') == 'none' ){
    $('form').slideDown(400);
    $('.1').slideDown();
}
                       
            else {
                if ( $('.1').css('display') != 'none'){
                $('form').slideUp(400);
                $('.1').slideUp();
                }
                else {
                    $('.1').slideDown();
                }
            }
               
                $('.2').hide();
                $('.3').hide();
               
           })
        //HTML end
           
        // C start  
                      $('.c').on('click', function() {
               if ( $('form').css('display') == 'none' ){
    $('form').slideDown(400);
    $('.2').slideDown();
}
                       
            else {
                if ( $('.2').css('display') != 'none'){
                $('form').slideUp(400);
                $('.2').slideUp();
                }
                else {
                    $('.2').slideDown();
                }
            }
               
                          
            $('.1').hide();
                $('.3').hide();
           })
        // PHOTOSHOP start
                      
                   $('.photoshop').on('click', function() {
                       
            if ( $('form').css('display') == 'none' ){
    $('form').slideDown(400);
    $('.3').slideDown();
    
}
                       
            else {
                
                
                if ( $('.3').css('display') != 'none'){
                $('form').slideUp(400);
                $('.3').slideUp();
                }
                else {
                    $('.3').slideDown();
                }
            }
               
               
                $('.2').hide();
                $('.1').hide();
           })
       
           //PHOTOSHOP end
           
        });