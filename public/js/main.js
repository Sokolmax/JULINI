
// document.getElementById("header").height = window.innerHeight;

 $(document).ready(function(){
 	//Smooth Transition Anchors
    $('a[href^="#"]').click(function () {
    	elementClick = $(this).attr("href");
    	destination = $(elementClick).offset().top;
    	$('html').animate( {scrollTop: destination }, 1000 );
    	return false;
    });
});
