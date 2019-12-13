  $(document).ready(function(){
    $('.slider').slider();
    $('select').material_select();
  });

  function sliderPrev(){
	$('.slider').slider('pause');
	$('.slider').slider('prev');
}

function sliderNext(){
	$('.slider').slider('pause');
	$('.slider').slider('next');
}

  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });