//Create a button and give it an ID of "hamburgerBtn"
//Attach an ID of "primaryNav" to the UL of the unordered list that holds your links

//menu function
function toggleMenu() {
    document.getElementById("hamburgerBtn").classList.toggle("open");
    document.getElementById("primaryNav").classList.toggle("open");
}
var x = document.getElementById('hamburgerBtn');
x.onclick = toggleMenu; 

//menu activation
let pageUrl = document.location.href;
let urlArray = pageUrl.split('/');
let pageHref = urlArray[urlArray.length-1];

let menuItem = document.querySelectorAll('ul#primaryNav li a');

if(pageHref !==""){
    let i;
    for(i=0; i<menuItem.length; i++){
        let currentUrl = (menu[i].getAttribute('href'));
        if(currentUrl === pageHref){
            menu[i].parentNode.className="active";

            if(menu[i].parentNode.parentNode.parentNode.tagName === "li"){
                menu[i].parentNode.parentNode.parentNode.className="parent active";
            }//if
            else{
                menu[i].parentNode.className="";
            }//else
        }//if 
        else{
            menu[0].parentNode.className="active";
        }
    }//for loop
   
}//if pageHref