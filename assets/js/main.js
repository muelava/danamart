$(document).ready(function(){
	$('#nav-icon').click(function(){
		$(this).toggleClass('open');

		$('.nav-right').slideToggle(300)
	});
});

AOS.init({
});

$(document).ready(function(){
	window.scrollTo({ top: 0, behavior: 'smooth' });
})


$(window).scroll(function(){
	if(window.pageYOffset > 60){
	  $(".navbar").addClass('shadow');
	}else{
		$(".shadow").removeClass('shadow');
	}
  });


  $(window).scroll(function(){
	if(window.pageYOffset == 0){
	  $(".beranda").addClass('active');
	}else{
		$(".beranda").removeClass('active');
	}
  });


$(window).scroll(function(){
	if (window.pageYOffset >= 600 && window.pageYOffset <= 1300 ) {
		$(".investasi").addClass('active');
	}else{
		$(".investasi").removeClass('active');
	}
  });

$(window).scroll(function(){
	if (window.pageYOffset >= 1300 ) {
		$(".kontak").addClass('active');
	}else{
		$(".kontak").removeClass('active');
	}
  });


//   button scroll top
$(window).scroll(function(){
	if(window.pageYOffset > 500){
		$('#btnTop').removeClass('hidden')
	}else{
		$('#btnTop').addClass('hidden')
	}
  });