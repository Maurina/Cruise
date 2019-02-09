//menu function

function toggleMenu() {

    document.getElementById("hamburgerBtn").classList.toggle("open");

    document.getElementById("primaryNav").classList.toggle("open");

}

var x = document.getElementById('hamburgerBtn');

x.onclick = toggleMenu; 



//menu activation

let urlString = document.location.href;
let urlArray = urlString.split('/');
let pageHref = urlArray[urlArray.length-1];

let menu = document.querySelectorAll('ul#primaryNav li a');

if(pageHref !==""){
	
	let i;
	for(i=0; i<menu.length; i++){
		if(currentUrl = menu[i].getAttribute('href'))
			
	
		
		if (currentUrl === pageHref){
			menu[i].parentNode.className = 'active';
			console.log(menu[i]);
			menu[0].parentNode.className = "";
		
			
		
			if(menu[i].parentNode.parentNode.parentNode.tagName === 'li'){
			   menu[i].parentNode.parentNode.parentNode.className = 'parent active';
				break;
			   }
		}else {
			menu[0].parentNode.className = "active";
	}
}
}