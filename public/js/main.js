$(document).ready(function(){
    /*------------ Navbar-------------------*/
    $(window).on("scroll", function(){
        if ($(this).scrollTop() > 90){
            $(".navbar").addClass("navbar-shrink");
        }
        else{
            $(".navbar").removeClass("navbar-shrink");
        }
    });

    // paralax
    let awan1 = document.getElementById('awan1');
    let awan2 = document.getElementById('awan2');
    window.addEventListener('scroll', function(){
        let value = window.scrollY;
        awan1.style.top = value * 0.95 + 'px';
    })

		// paralax mousemovement
		document.addEventListener("mousemove" , parallax2);
		function parallax2(e){
			this.querySelectorAll(".paralax").forEach(function(move2){
			

				var moving_value2 = move2.getAttribute("data-speed");
				var x = (e.clientX * moving_value2) /250
				var y = (e.clientY * moving_value2) /250

				move2.style.transform = "translateX(" + x + "px) translateY(" + y + "px)";

			});
		}
		


	// Dark Theme
function toggleTheme() {
    updateIcon();
}
toggleTheme();
$(".toggle-theme").on("click", function () {
    $("body").toggleClass("light");
    if($("body").hasClass("light")){
        localStorage.setItem("app-theme", "light");
    }
    else{
        localStorage.setItem("app-theme", "dark");
    }
    updateIcon();
});
function updateIcon() {
    if($("body").hasClass("light")){
    $(".toggle-theme i").removeClass("fa-sun");
    $(".toggle-theme i").addClass("fa-moon");
    }
    else{
        $(".toggle-theme i").removeClass("fa-moon");
        $(".toggle-theme i").addClass("fa-sun");
    }
}

// Navbar
$(".nav-link").on("click", function(){
    $(".navbar-collapse").collapse("hide");
})

// scrolit
$.scrollIt({
    upKey: 38,             // key code to navigate to the next section
    downKey: 40,           // key code to navigate to the previous section
    easing: 'linear',      // the easing function for animation
    scrollTime: 50,       // how long (in ms) the animation takes
    activeClass: 'active', // class given to the active nav element
    onPageChange: null,    // function(pageIndex) that is called when page is changed
    topOffset: -50           // offste (in px) for fixed top navigation
});

// counterup
    $(document).ready(function() {
                
        $(".counter").counterUp({
            delay: 10,
            time: 700
        });
        
        $(".counter_2").counterUp();
        
    });    
    // AOS
    AOS.init();

    


});