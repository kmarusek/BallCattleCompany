$ = jQuery

//Isotope Gallery 
$(document).ready(function(){
  $('.grid').isotope({
    itemSelector:'.grid-item',
  });
  //filters items of gallery onClick of li selected
  $('.isotope-filter').on('click','li',function(){
    var filterValue = $(this).attr('data-filter');
    $('.grid').isotope({ filter:filterValue });
    $('.isotope-filter li').removeClass('active');
    $(this).addClass('active');
  });
  //filters lightbox to only show corrisponding images based on selected li
  $('.grid').on('arrangeComplete', function(event, filteredItems) {
    $(".grid-item:hidden a").removeClass("mag");
    $(".grid-item:visible a").addClass("mag");
  });
})


//Isotope Gallery Lightbox 

$(document).ready(function() {
	$('.grid').magnificPopup({
		delegate: 'a.mag',
		type: 'image',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
    },
	});
});
$(document).ready(function() {
	$('.flex').magnificPopup({
		delegate: 'a.mag',
		type: 'image',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
    },
	});
});
