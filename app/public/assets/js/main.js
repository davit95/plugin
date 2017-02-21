$(function() {

	/**
		****** PHOTO UPLOAD
	**/
	$("input").change(function(e) {
		input_name = $( e.target ).attr('name');
		if(e.originalEvent.srcElement.files != null){
		    for (var i = 0; i < e.originalEvent.srcElement.files.length; i++) {
		        
		        var file = e.originalEvent.srcElement.files[i];
		        var img = document.createElement("img");
		        img.style.width = "400px";
		        i
		        var reader = new FileReader();
		        reader.onloadend = function() {
		            img.src = reader.result;
		        }
		        reader.readAsDataURL(file);
		        if(input_name == "file_one"){
		        	img.className = "uploadedImageOne";
		        	$(".image_block_one").append(img);
		        	$(".image_block_one").css('margin-bottom',"15px");
		        }else if(input_name == "file_two"){
		        	img.className = "uploadedImageTwo";
		        	$(".image_block_two").append(img);
		        	$(".image_block_two").css('margin-bottom',"15px");
		        }else{
		        	img.className = "uploadedImageThree";
		        	$(".image_block_three").append(img);
		        	$(".image_block_three").css('margin-bottom',"15px");
		        }
		        $(".uploadedImageOne").css('border',"solid 2px black");
		        
		    }
		}
	});

	/**
		****** RADIUS
	**/
	$('input[type=range]').change(function () {
		var radius = $(this).val();
		if($(this).parent().hasClass('block1_effect_bar_1')){
			$(".uploadedImageOne").css({  borderRadius:   radius + "%" } );
		}else if($(this).parent().hasClass('block2_effect_bar_1')){
			$(".uploadedImageTwo").css({  borderRadius:   radius + "%" } );
		}else{
			$(".uploadedImageThree").css({  borderRadius:   radius + "%" } );
		}
	});

	/**
		****** SIZE
	**/
	$(document).on('keyup','.size',function() {
		var size = $(this).val() + "px";
		if($(this).parent().hasClass('block1_effect_bar_1')){
			$(".uploadedImageOne").css({"width": size});
		}else if($(this).parent().hasClass('block2_effect_bar_1')){
			$(".uploadedImageTwo").css({"width": size});
		}else{
			$(".uploadedImageThree").css({"width": size});
		}
	});


	/**
		****** OPEN CLOSE BLOCKS
	**/
	$('input:radio[name=one_effect]').change(function () {
        if ($(this).val() == 'resize') {
        	$(".block1_effect_bar_3").hide();
			$(".block1_effect_bar_2").hide();
        	$(".block1_effect_bar_1").show();
        }else if($(this).val() == 'unresize'){
			$(".block1_effect_bar_1").hide();
			$(".block1_effect_bar_3").hide();
			$(".block1_effect_bar_2").show();
        }else{
			$(".block1_effect_bar_2").hide();
			$(".block1_effect_bar_1").hide();
			$(".block1_effect_bar_3").show();
        }
	});
	$('input:radio[name=two_effect]').change(function () {
        if ($(this).val() == 'resize') {
        	$(".block2_effect_bar_3").hide();
			$(".block2_effect_bar_2").hide();
        	$(".block2_effect_bar_1").show();
        }else if($(this).val() == 'unresize'){
			$(".block2_effect_bar_1").hide();
			$(".block2_effect_bar_3").hide();
			$(".block2_effect_bar_2").show();
        }else{
			$(".block2_effect_bar_2").hide();
			$(".block2_effect_bar_1").hide();
			$(".block2_effect_bar_3").show();
        }
	});
	$('input:radio[name=three_effect]').change(function () {
        if ($(this).val() == 'resize') {
        	$(".block3_effect_bar_3").hide();
			$(".block3_effect_bar_2").hide();
        	$(".block3_effect_bar_1").show();
        }else if($(this).val() == 'unresize'){
			$(".block3_effect_bar_1").hide();
			$(".block3_effect_bar_3").hide();
			$(".block3_effect_bar_2").show();
        }else{
			$(".block3_effect_bar_2").hide();
			$(".block3_effect_bar_1").hide();
			$(".block3_effect_bar_3").show();
        }
	});

	/**
		****** WIDTH,HEIGHT RESIZE
	**/
	$(document).on('keyup','.width',function() {
		var size = $(this).val() + "px";
		if($(this).parent().hasClass('block1_effect_bar_2')){
			$(".uploadedImageOne").css({"width": size});
		}else if($(this).parent().hasClass('block2_effect_bar_2')){
			$(".uploadedImageTwo").css({"width": size});
		}else{
			$(".uploadedImageThree").css({"width": size});
		}
	});

	/**
		****** WIDTH,HEIGHT RESIZE
	**/
	$(document).on('keyup','.height',function() {
		var size = $(this).val() + "px";
		if($(this).parent().hasClass('block1_effect_bar_2')  ){
			$(".uploadedImageOne").css({"height": size});
		}else if($(this).parent().hasClass('block2_effect_bar_2')){
			$(".uploadedImageTwo").css({"height": size});
		}else{
			$(".uploadedImageThree").css({"height": size});
		}
	});

	/**
		****** UNRESIZE EFFECT
	**/
	$(document).on('keyup','.unresize_height',function() {
		var size = $(this).val() + "px";
		if($(this).parent().hasClass('block1_effect_bar_3')){
			$(".uploadedImageOne").css({"height": size});
		}else if($(this).parent().hasClass('block2_effect_bar_3')){
			$(".uploadedImageTwo").css({"height": size});
		}else{
			$(".uploadedImageThree").css({"height": size});
		}
	});

	$(document).on('keyup','.unresize_width',function() {
		var size = $(this).val() + "px";
		if($(this).parent().hasClass('block1_effect_bar_3')){
			$(".uploadedImageOne").css({"width": size})
		}else if($(this).parent().hasClass('block2_effect_bar_3')){
			$(".uploadedImageTwo").css({"width": size})
		}else{
			$(".uploadedImageThree").css({"width": size})
		}
	});

	/**
		****** BLUR EFFECT
	**/
	$(document).on('keyup','.blur',function() {
		var size = $(this).val();
		var filterVal = 'blur('+ size + 'px)';
		if($(this).parent().hasClass('block1_effect_bar_3')){
			$(".uploadedImageOne").css('filter',filterVal)
		  .css('webkitFilter',filterVal)
		  .css('mozFilter',filterVal)
		  .css('oFilter',filterVal)
		  .css('msFilter',filterVal);
		}else if($(this).parent().hasClass('block2_effect_bar_3')){
			$(".uploadedImageTwo").css('filter',filterVal)
		  .css('webkitFilter',filterVal)
		  .css('mozFilter',filterVal)
		  .css('oFilter',filterVal)
		  .css('msFilter',filterVal);
		}else{
			$(".uploadedImageThree").css('filter',filterVal)
		  .css('webkitFilter',filterVal)
		  .css('mozFilter',filterVal)
		  .css('oFilter',filterVal)
		  .css('msFilter',filterVal);
		}
	});

});