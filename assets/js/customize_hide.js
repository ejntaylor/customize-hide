$j=jQuery.noConflict();

$j(document).ready(function() {

// mads props to Sky for the help here.

		console.log('quick_panel');
		if ($j(".quick-panel-chosen-select").length>0) {
			$j(".quick-panel-chosen-select").chosen({no_results_text: "Oops, nothing found!", width: '100%'}); 	
		}


    
    var letter = {
    x: 88

};

var visible = false;
    $j("body").keydown(function(event) {

            // toggles element the first time
        if(!visible && event.ctrlKey && event.which === letter.x) {
            visible = true;
            $j(".wp-full-overlay").removeClass("collapsed");
            $j(".wp-full-overlay").addClass("expanded");

            //console.log('1');
        } else if(visible && event.ctrlKey && event.which === letter.x) {
            visible = false;
            $j(".wp-full-overlay").removeClass("expanded");
            $j(".wp-full-overlay").addClass("collapsed");

            //console.log('2');
        }


    });
    

          

});

jQuery(function($){

    
      $('.quick-panel-chosen-select').on('change', function () {
          var url = $(this).val(); // get selected value
          if (url) { // require a URL
              //window.location = url; // redirect
              
              document.location.href = url; //relative to domain

          }
          return false;
      });
});
      
      
