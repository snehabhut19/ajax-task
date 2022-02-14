$(function($){
	$('#imgPreview').hide();
	
		var err="";

      $('#file').change(function(){

        const file = this.files[0];
        var file_type=this.files[0].type;
        // var file_size=this.files[0].size;
        if(file_type!='image/png' && file_type!='image/jpeg'&&file_type!='image/jpg' ){
            err++;
            $('#fi').html("**please enter valid file type ");
            $('#fi').css('color','red');
        }

        //   if(file_size <'2*1024*1024')
        // {
        // 	err++;
        // 	$('#fi').html("** invalide file size");
        // 	$('#fi').css('color','red');
        // }
        // console.log(file);
        else if (file){
          let reader = new FileReader();
          reader.onload = function(event){
            console.log(event.target.result);
            $('#imgPreview').show().attr('src', event.target.result);
          }
          reader.readAsDataURL(file);
        }
      });

	$.validator.addMethod('ForSelect',function(value,ele,param)
	{
		return value!='select';
	},' please enter select city');
	
	$('#frm').validate({
	rules:{
		firstname:{
			required:true,
			// alphanumeric:true,
			minlength:2,
			
		},
		lastname:{
			required:true,
			minlength:2,
			},
		email:{
			required:true,
			email:true,
			// regex: /^\b[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i,
			
		},
		password:{
			required:true,
			minlength:5,
		},
		conpass:{
			required:true,
			minlength:5,
			equalTo:"#password",
		},
		address:"required",
	
		gender:"required",
		city:{
			ForSelect:true,
			// required:true,

		},
		"hobbies[]":"required",
		file:{
			required:true,
			// extension:"jpg | jpeg",
			// filesize:2,
		},
	},messages:{
		firstname:{
		required:"please enter firstname",
		// alphanumeric:"only alphanumeric ",
		minlength:"enter valid firstname",
		
		},
		lastname:{
			required:"please enter lastname",
			minlength:"please valid lastname",
		},
		
		email:{
			required:"please enter email",
			email:"enter valid email",
			// regex: "valid email please",

			
		},
		password:{
			required:"please enter password",
			minlength:"password must be 5 char long",
		},
		conpass:{
			required:"please enter  conpassword",
			minlength:"password must be 5 char long",
			equalTo: "password is not match",
		},
		address:"please enter address",
		
		gender:"please enter gender",

		// city:"please enter city",
		"hobbies[]":"please enter hobbies",

		file:{
			required:"please enter the file",
			// extension:"only jpg/png allow",
			// filesize:"invalide file size",
		},
	},
	submitHandler:function(form){
	 var formf = new FormData(reg);
		$.ajax({
			url: 'insert.php',
			type: 'POST',
			 // data: $(form).serialize(),
			processData:false,
			contentType:false,
			data: formf,
			 // datatype : "application/json",
   			 // contentType: "text/plain",
   			  beforeSend:function(){
            $('#success').html('Loading......');
          },
			success:function(data)
			{
				$("#success").html("Thanks for regestration");
			}
		})
		

	}

});
});
