function valid(o,w){
	o.value = o.value.replace(valid.r[w],'');
}
valid.r={
	'numbers':/[^\d]/g
}

$(document).ready(function(){
	
    var href = "/viewCart/";
	
    //Fixed on scroll
    if($("#cat-sidebar, #relative").size()!=0)
    {
        var y = $("#cat-sidebar, #relative").offset().top;
        $(window).scroll(function(){
            var x = y - $(window).scrollTop();
            if( x<0 ) {$("#cat-sidebar, #relative").addClass("fixed")}
            else $("#cat-sidebar, #relative").removeClass("fixed");
        });
    }
    
    
    
    //Slider product detail
    var left = 0;
    var range = 88;
    var count = $("#other-images img").length;
    $("#right-arrow").click(function(){
        if($("#other-images").attr("left") > (-(count - 3)*range))
        {
            var litte = ($("#other-images").attr("left"));
            var add  =  litte - range; 
            $("#other-images").animate({"left": add + "px"});
            $("#other-images").attr("left",add);
        }
    
    });
    
    $("#left-arrow").click(function(){   
        if($("#other-images").attr("left") < 0)
        {
            var litte = ($("#other-images").attr("left"));
            var add  =  parseInt(litte) + parseInt(range); 
            $("#other-images").animate({"left": add + "px"});
            $("#other-images").attr("left",add);
        }
    });
    
	var startslider_small = 300;
	var startslider_selected = 100;
	var startslider_big = 300;
	
	var k = startslider_big/startslider_selected;	
	var K = startslider_big*(startslider_small/startslider_selected);
	
	$("#startslider-big").css("background-size",K + "px " + K + "px");
	$("#startslider-small").mousemove(function(e){
		$("#startslider-big").css("display","block");
		var X = e.pageX - $("#startslider-small").offset().left;
		var Y = e.pageY - $("#startslider-small").offset().top;
		$("#startslider-selected").css({"left":X - 50 + "px", "top":Y - 50 + "px","display":"block"});				
		$("#startslider-big").css({"background-position-x":"-" + k*(X-50) +"px","background-position-y":"-"+k*(Y-50) +"px"});
	});
    
	$("#startslider-small").mouseleave(function(){
		$("#startslider-selected").css("display","none");
		$("#startslider-big").css("display","none");
	});
	
	$("#wrap-other-images img").mouseenter(function(){
		$("#startslider-small").css("background-image",'url(' + $(this).attr("src") + ')');
		$("#startslider-big").css("background-image",'url(' + $(this).attr("src") + ')');
        
        $("#other-images img").css("border","1px solid #ccc");
        $(this).css("border","1px solid #fba445");
    });
    
    $(".nav .tab").click(function(){
        $(".nav .tab").removeClass("active");
        $(this).addClass("active");
        var a = $(this).attr("id");
        $("#single-content-2 .content").fadeOut(300);
        $("#content-" + a).fadeIn(300);
    });
    
    
    //Add product to cart
    $(document).on('click',".vmz-add-to-cart", function(){
        $(".opacity").css("display","block");
        $("#ajax-load-cart").css("display","block");  
        var pid = $(this).attr("pid");
		console.log();
		$.ajax({
			url: APP_URL + "/addToCart/" + pid,
			type: "GET",
			cache: false,
			data: {"pid": pid}, 
			success: function(data){ 
				$("#cart-total").html(data);
				$.get(
                    href,
                    function(data){ 
                            $("#view-cart-content").css("display","block"); 
                            $("#ajax-load-cart").css("display","none");
                            $("#view-cart-content").empty();
                            $("#view-cart-content").prepend(data);  
                               
                    }
                );     
					
			}
			
		});

    });
    
    
    
    //Add cart width number of product
	//Not use
    $(".vmz-add-to-cart-width-num").click(function(){
        $(".opacity").css("display","block");
        $("#ajax-load-cart").css("display","block");  

    });
    
    
    
    
    
    //Set position of cart
    $("#view-cart-content").css("left",(screen.width-855)/2 + "px");
    $("#view-cart-content").css("top",(screen.height-600)/2 + "px");
    $("#ajax-load-cart").css("left",(screen.width-43)/2 + "px");
    $("#ajax-load-cart").css("top",(screen.height-143)/2 + "px");
    
    
    //Display cart
    $(".button-view-cart").click(function(){
        $(".opacity").css("display","block");
        $("#ajax-load-cart").css("display","block");
        $.get(
            href,
            function(data){ 
                    $("#view-cart-content").css("display","block"); 
                    $("#ajax-load-cart").css("display","none");
                     
                    $("#view-cart-content").empty();
                    $("#view-cart-content").prepend(data);  
                       
            }
        );    
    });
    
    
    
        
    //Close cart popup
    $(document).on("click", ".opacity,.continue,#img-close-cart",function(){
        //alert("ppp");
         $("#view-cart-content").css("display","none"); 
         $("#view-cart-content").empty();
         $(".opacity").css("display","none"); 
         $("#ajax-load-cart").css("display","none");  
    });
    
    
    // Update selected item
    $(document).on('click','.vmz-update-item',function(){
        $("#ajax-load-cart").css("display","block");
        $("#view-cart-content").css("display","none"); 
        var rowid 	= $(this).attr('rowid');
		var form 	= "cart-" + rowid;
		var _token = $("form[name='" + form + "']").find("input[name='_token']").val();
		var qty = $("form[name='" + form + "']").find("input[name='qty']").val();
		
		$.ajax({
			url: APP_URL + "/updateCart/" + rowid + "/" + qty,
			type: "GET",
			cache: false,
			data: {"_token": _token , "rowid": rowid, 'qty': qty}, 
			success: function(data){ 
				$("#cart-total").html(data);
				$.get(
					href,
					function(data){ 
							$("#view-cart-content").css("display","block"); 
							$("#ajax-load-cart").css("display","none");
							$("#view-cart-content").empty();
							$("#view-cart-content").prepend(data);  
							   
					}
				);    
						
			}
			
		});
    });
    
    
    //Delete slected item
    $(document).on('click','.vmz-delete-item',function(){
        $("#ajax-load-cart").css("display","block");
        $("#view-cart-content").css("display","none");
        var rowid 	= $(this).attr('rowid');
		var form 	= "cart-" + rowid;
		var _token = $("form[name='" + form + "']").find("input[name='_token']").val();
		//var id = parseInt($(this).attr("class"));
            $.ajax({
				url: APP_URL + "/deleteCart/" + rowid,
				type: "GET",
				cache: false,
				data: {"_token": _token , "rowid": rowid}, 
				success: function(data){ 
					$("#cart-total").html(data);
					$.get(
						href,
						function(data){ 
								$("#view-cart-content").css("display","block"); 
								$("#ajax-load-cart").css("display","none");
								$("#view-cart-content").empty();
								$("#view-cart-content").prepend(data);  
								   
						}
					);    
							
                }
				
            });
		
    });
    
    
    //Delete all product
    $(document).on('click','#remove-all-product',function(){
        $("#ajax-load-cart").css("display","block");
        $("#view-cart-content").css("display","none");
		$.ajax({
			url: APP_URL + "/destroyCart",
			type: "GET",
			cache: false,
			data: false,
			success: function(data){ 
				$("#cart-total").html(data);
				$.get(
					href,
					function(data){ 
							$("#view-cart-content").css("display","block"); 
							$("#ajax-load-cart").css("display","none");
							$("#view-cart-content").empty();
							$("#view-cart-content").prepend(data);  
							   
					}
				);    
						
			}
			
		});
	
    });
    
});