/**************** Menu - Start ****************/	

function toggleMainNavButton() {
    var show_menu = document.querySelector('.toggle-nav-label ');

show_menu.addEventListener('click', function(event) {
    var target = document.querySelector(show_menu.getAttribute('data-target'));

    if (target.style.display == "none") {
        target.style.display = "block";
        show_menu.innerHTML = show_menu.getAttribute('data-shown-text');

    } else {
        target.style.display = "none";
        show_menu.innerHTML = show_menu.getAttribute('data-hidden-text');
    }
});
}

function mainNavBtnCurrentPageColor() {
    var currentURL = window.location.href;
    var list = document.getElementById("mainNavBtns").querySelectorAll("a"); ;  
 
    for (var i=0; i<list.length; i++) {	
    	if (list[i] == currentURL) {
    			list[i].style.backgroundColor = "#5c8435";
    			list[i].style.color = "#fff";
    		} 
    	}
}

/**************** Menu - End ****************/


