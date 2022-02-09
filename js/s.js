$(document).ready(function(){
 
    $('#save').on('click', function(){
        
            var firstname = $('#firstname').val();
            var lastname = $('#lastname').val();
            var email = $('#email').val();
            var address = $('#address').val();
            


            
            if(error>0){
            return false;
            }else{
                $.ajax({
                url: 'insert.php',
                type: 'POST',
                data: {
                    firstname: firstname,
                    lastname: lastname,
                    email: email,
                    address: address,
                    

                }
                
                
            });
        }
        
 
    }); 
    
});