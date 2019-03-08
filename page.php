<?php  get_header(); ?>

<!-- static home page -->
<script>
var looper;
var degrees = 0;
function rotateAnimation(el,speed){
	var elem = document.getElementById(el);
	if(navigator.userAgent.match("Chrome")){
		elem.style.WebkitTransform = "rotate("+degrees+"deg)";
	} else if(navigator.userAgent.match("Firefox")){
		elem.style.MozTransform = "rotate("+degrees+"deg)";
	} else if(navigator.userAgent.match("MSIE")){
		elem.style.msTransform = "rotate("+degrees+"deg)";
	} else if(navigator.userAgent.match("Opera")){
		elem.style.OTransform = "rotate("+degrees+"deg)";
	} else {
		elem.style.transform = "rotate("+degrees+"deg)";
	}
	looper = setTimeout('rotateAnimation(\''+el+'\','+speed+')',speed);

	degrees++;
	if(degrees > 359){
		degrees = 1;
	}
}
</script>



<div class="container">
  <div class="row no-gutters justify-content-center">
    <div class="box1 row justify-content-start m-3 shadow inline-block">
      <div class="col-9 align-self-center">
        <div class=" circle1 justify-content-center m-1 p-1">
            <img class="shadow rounded-circle" id="myRecord" src="wp-content/uploads/2019/01/assembly-300x300.png" alt="skysvinyl record graphic">
            <script>
              rotateAnimation("myRecord",2);
            </script>
        </div>
      </div>
      <!-- infinite -->
      <div class="col-1 animated wobble slow  align-self-center">
        <div class="bar1">

        </div>
      </div>
    </div>
  </div>
</div>







<?php  get_footer(); ?>
