// gallery
function myFunction(imgs) {
	var expandImg = document.getElementById("m2-2-1-1id");
	var imgText = document.getElementById("m2-2-1-2id");
	expandImg.src = imgs.src;
expandImg.parentElement.style.display = "block";
}

// gallery
function myFunctionx(imgs) {
	var expandImg = document.getElementById("m2-2-1-1idx");
	var imgText = document.getElementById("m2-2-1-2idx");
	expandImg.src = imgs.src;
expandImg.parentElement.style.display = "block";
}

// loading
$(window).on("load",function(){
     $(".loader-wrapper").fadeOut("slow");
});