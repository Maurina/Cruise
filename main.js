//Create a button and give it an ID of "hamburgerBtn"
//Attach an ID of "primaryNav" to the UL of the unordered list that holds your links
function toggleMenu() {
    document.getElementById("hamburgerBtn").classList.toggle("open");
    document.getElementById("primaryNav").classList.toggle("open");
}
var x = document.getElementById('hamburgerBtn');
x.onclick = toggleMenu; 

import { data } from './data.js'

let informationAddress = document.querySelector('.address')
let addressStreet = document.createElement('p')
addressStreet.textContent = data.address.streetAddress

let addressCity = document.createElement('p')
addressCity.textContent = data.address.addressLocality

let addressState = document.createElement('p')
addressState.textContent = data.address.addressRegion



let informationPhone = document.querySelector('.phone')
let phone = document.createElement('p')
phone.textContent = data.phone

let informationHours = document.querySelector('.hours')
let hours = document.createElement('p')
hours.textContent = date.openingHours

informationAddress.appendChild(addressStreet)
informationAddress.appendChild(aaddressCity)
informationAddress.appendChild(addressState)
informationPhone.appendChild(phone)
informationHours.appendChild(hours)