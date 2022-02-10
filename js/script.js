
$(document).ready(function(){
    //$(".hide").hide();
 
    $('#submit').on('click', function(){

    
        var error='';
       var formf=new FormData(reg);
       var files = $('#file').val();
        var xyz = $("input[class='check']:checked").val();
        var firstname = $('#firstname').val();
        var fname1=/^[A-Za-z]+$/;
        var lastname = $('#lastname').val();
        var lname1=/^[A-Za-z]+$/;
        var email = $('#email').val();
        var email1=/^[a-zA-Z0-9_\.\-]+\@[a-zA-Z0-9\-]+\.[a-zA-Z]{2,4}$/;
        var password = $('#password').val();
        var conpass = $('#conpass').val();
        var address = $('#address').val();
        var gender = $("input[type='radio']:checked").val();
        var city = $('#city').val();
        var file=$("#file").prop("files")[0];
        
        var hobbies = [];
        $('.jk').each(function(){
            if($(this).is(":checked"))
            {
                hobbies.push($(this).val());
            }
        });
            hobbies=hobbies.toString()



           //  formf.append("firstname",firstname);
           // formf.append("lastname",lastname);
           // formf.append("email",email);
           // formf.append("password",password);
           // formf.append("conpass",conpass);
           // formf.append("address",address);
           // formf.append("gender",gender);
           // formf.append("city",city);
           // formf.append("hobbies",hobbies);
           // formf.append("checkbox",xyz);
           // formf.append("file",file);

 
          if(firstname=="")
          {
                error++;
                $('#f').html('** enter user fname');
                $('#f').css('color','red');
        }
        else if(fname1.test(firstname) == 0){
                    error++;
                    $('#f').html('**only alfabates allow');
                }
                  else{
                $('#f').html("");

            }

        if (lastname == ""){
                error++;
                $('#l').html('** enter user lname');
                $('#l').css('color','red');
               
            }else if(lname1.test(lastname) == 0){
            error++;
            $('#l').html('** only alphabates allow');
            $('#l').css('color','red');
             }else{
                $('#l').html("");

            }

             if (email == ""){
                    error++;
                $('#e').html('** enter user email');
                $('#e').css('color','red');
               
            } else if(email1.test(email) == 0){
            error++;
                $('#e').html('** enter valid email');
             }else{
                $('#e').html("");

            }

            if (password == ""){
                    error++;
                $('#p').html('** enter user password');
                $('#p').css('color','red');
               
            }else{
                $('#p').html("");

            }

            if (conpass == ""){
                    error++;
                $('#c').html('** enter user confirm password');
                $('#c').css('color','red');
               
            } else if (conpass != password ) {
            error++;
            $('#c').html('** password is not match');
            $('#c').css('color','red');
               
            }
            else{
                $('#c').html("");

            }
            if (address == ""){
                    error++;
                $('#a').html('** enter user address');
                $('#a').css('color','red');
               
            }
            else{
                $('#a').html("");

            }

           
            if (city == "select"){
                    error++;
                $('#ci').html('** enter city');
                $('#ci').css('color','red');
               
            }
            else{
                $('#ci').html("");

            }

            if (!gender){
               
                    error++;
           
                $('#g').html('** enter gender');
                $('#g').css('color','red');

               
            }
            else{
                $('#g').html("");

            }

             if (!hobbies.length>0) {
       
            error++;
                $('#jk').html('** enter user hobbies');
                $('#jk').css('color','red');
               
            }else{
                $('#jk').html("");

            }

            if(files == ""){
                    error++;
                $('#fi').html('** enter user file');
                $('#fi').css('color','red');
                
            }
            else{
                $('#fi').html("");

            }


        if(error>0){
        return false;
        }
        else{
 
 
                $.ajax({
                        url: 'insert.php',
                        type: 'POST',
                        contentType: false,
                        processData: false,
                        data: formf,
                        //success:alert("success"),
                    
                success: function(data){
     //               $("#result").show();
                    // $('#firstname').val('');
                    // $('#lastname').val('');
                    // $('#address').val('');
                    // $('#email').val('');
                    // $('#password').val('');
                    // $('#conpass').val('');
                    // $('#gender').val('');
                    // $('#city').val('');
                    // $('#hobbies').val('');
                    //swal("Good job!", "You clicked the button!", "success");
                    //$(".hide").show();
                    }
                });
        }
         
    });
});

   
    
     $('#imgPreview').hide();
      $('#file').change(function(){
        const file = this.files[0];
        console.log(file);
        if (file){
          let reader = new FileReader();
          reader.onload = function(event){
            console.log(event.target.result);
            $('#imgPreview').show().attr('src', event.target.result);
          }
          reader.readAsDataURL(file);
        }
      });
