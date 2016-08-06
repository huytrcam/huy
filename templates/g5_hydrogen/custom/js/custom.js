var $j = jQuery.noConflict();
$j(document).ready(function(){
	$j(".avatar img").addClass("appear");
})
var iScrollPos = 0;
$j(window).scroll(function(){
	var iCurScrollPos = $j(this).scrollTop();
	if(iCurScrollPos==0){
		$j("#g-navigation").removeClass("up-state");
		$j("#g-navigation").removeClass("down-state");
	}else{
		if(iCurScrollPos > iScrollPos){
			$j("#g-navigation").removeClass("up-state");
			$j("#g-navigation").addClass("down-state");
		}else{
			if($j("#g-navigation").hasClass("up-state")){

			}else{
				$j("#g-navigation").removeClass("down-state");
				$j("#g-navigation").addClass("up-state");
			}
		}
	}
	
	iScrollPos = iCurScrollPos;
})