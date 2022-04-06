// loading
$(window).on("load",function(){
     $(".loader-wrapper").fadeOut("slow");
});
// sticky
window.onscroll = function() {myFunction()};
var header = document.getElementById("headerid");
var sticky = header.offsetTop;
function myFunction() {
if (window.pageYOffset > sticky) {
		header.classList.add("sticky");
	} else {
		header.classList.remove("sticky");
	}
}
// search button
function showtext() {
	var abc = document.getElementById('showsearchid');
	abc.classList.toggle("showsearchshow");
	document.getElementById('h2-i1id').classList.toggle("fa-search-plusoff");
	document.getElementById('h2-i2id').classList.toggle("fa-search-minusshow");
	document.getElementById('headerid').classList.toggle("headerlong");
}