//SCRIPTS

//autocomplete tags
var Tags=[
	"sometag"
	];
$("#autocomplete").autocomplete({
	source:Tags
});


//hiding some functions





//for the login button
$(document).ready(function(){
var Response;
  $('#getval').click(function(event){
  event.preventDefault();
      var username=$('#username').val();
      var password=$('#password').val();
    
      if(password.length<6 && password.length>15){
          alert("password must be greater than 6 characters and not more than 15 characters!");
          return false;
          
      }
      $.ajaxSetup({
          headers:{
              'Content-Type':'application/json'
          }
      });
      
      $.ajax({
      url:"http://api.pennyinc.co.ke/oAuth2/GetToken",
      
      method:'POST',
      dataType:'json',
      data:JSON.stringify({'username':username,'password':password}),
      success:function(ResponseBody){
          
          console.log(JSON.stringify(ResponseBody));
          
      Response =JSON.parse(JSON.stringify(ResponseBody));
        if(Response.access_token!=""){
       var exTime= document.cookie="Login="+Response.access_token +";expires="+exTime+";";
            document.cookie="UserType="+Response.token_type+";expires="+exTime+";";
        
           alert("Login successful!");
           if(typeof(storage)!=="undefined"){
            $.session.set('Login',Response.access_token);
            $.session.set('UserType',Response.token_type);
            
            }else{
                alert('No web storage available!');
            }
            
            
        }
        else{
            alert("Failed! Your Email or password is invalid");
        }
        
        }, 
      error:function(error){
          console.log(JSON.stringify(error));
          alert('failed');
          }
      });   
  });
	});


//like buttons and the badge
 
	$('#like1p').click(function(){
		var daro=$('#like1p').hasClass("glyphicon glyphicon-heart-empty");
		if(daro==1){
			$('#like1p').removeClass("glyphicon glyphicon-heart-empty");
			$('#like1p').addClass("glyphicon glyphicon-heart");
			var val=$('#badge1p').html();
			var val=val++;
			$('#badge1p').html(val);
		}
		else{
			$('#like1p').removeClass("glyphicon glyphicon-heart");
			$('#like1p').addClass("glyphicon glyphicon-heart-empty");
			var val=$('#badge1p').html();
			var val=val-1;
			$('#badge1p').html(val);
		}
	});
});

//bidding button
$(document).ready(function(){
	$('#prod1').click(function(){
		var prodName="SomeProduct";
		var prodPrice=5;
		var bidmount=$('#bidmount').val();
		if(bidmount==""){
			alert("please fill in the amount");
			return false;
		}
		$.ajax({
			type:"POST",
			url:"bidprocess.php",
			data:{
				"ProductName":prodName,
				"pPrice":prodPrice,
				"bidmount":bidmount,
				},
			success:function(response){
				if(response=="BID placed successful"){
					alert("Bid placed keep calm");
				}
				else if(response=="Insufficient balance"){
					alert("please top up");
				}
				else{
					alert(response);
				}
				
			},
			error:function(){
				alert("Bid placed successfully");
			}
		});
	});
});
