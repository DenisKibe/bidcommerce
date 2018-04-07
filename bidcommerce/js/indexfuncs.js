//SCRIPTS

//autocomplete tags
var Tags=[
	"sometag"
	];
$("#autocomplete").autocomplete({
	source:Tags
});


//scroll property
$(window).scroll(function(){
	$(".slideanim").each(function(){
		var pos=$(this).offset().top;
		var winTop=$(window).scrollTop();
		if(pos<winTop+300){
			$(this).addClass("slide");
		}
	});
});
//hiding some functions





//for the login button
$(document).ready(function(){
	$('#SubmitL').click(function(event){
		var Pnumber=$('#Num').val();
		var PassWord=$('#PwordL').val();
		$.ajax({
			type:"POST",
			url:"processuser.php",
			data:{
				"PhoneNumber":Pnumber,
				"PassWord":PassWord,
					},
			success:function(response){
				console.log(response)
				if(response=="login successful"){
					alert("logined in successfully");
					window.location="bidcommerce.php";
				}
				else if(response=="Failed"){
					alert("Please check your values or sign up");
					return false;
				}
			},
			error:function(){
				alert("An error occured please login later");
			}
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