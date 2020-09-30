window.onscroll = function () {
  scroll()
};

function scroll() {
  if (document.documentElement.scrollTop > 78) {
    document.getElementById("navs").style.background = "linear-gradient(to right, #28a5f5, #1e87f0)";
    document.getElementById("navs").classList.add("active-scroll");
  } else {
    document.getElementById("navs").style.background = "";
    document.getElementById("navs").classList.remove("active-scroll");


  }
}



// var tita = ["title", "home", "about", "article", "contact", "img-1", "a-about", "a-contact", "a-1", "a-2"];

// for (var nilaiAwal = 1; nilaiAwal < tita.length; nilaiAwal++) {
//   console.log('')
// }

var tit = document.getElementById("title");
var hom = document.getElementById("home");
var abo = document.getElementById("about");
var art = document.getElementById("article");
var con = document.getElementById("contact");
var img = document.getElementById("img-1");
var ab = document.getElementById("a-about");
var ac = document.getElementById("a-contact");
var a1 = document.getElementById("a-1");
var a2 = document.getElementById("a-2");



function home() {
  tit.innerHTML = "Home";
  hom.classList.add("active");
  abo.classList.remove("active");
  art.classList.remove("active");
  con.classList.remove("active");
  img.src = "home.png";
  ab.style.display = "";
  a1.style.display = "";
  a2.style.display = "";
  ac.style.display = "";
}

function about() {
  tit.innerHTML = "About";
  abo.classList.add("active")
  hom.classList.remove("active")
  art.classList.remove("active")
  con.classList.remove("active")
  img.src = "about.jpg";
  ab.style.display = "";
  a1.style.display = "none";
  a2.style.display = "none";
  ac.style.display = "none";
}

function article() {
  tit.innerHTML = "Article";
  art.classList.add("active")
  abo.classList.remove("active")
  hom.classList.remove("active")
  con.classList.remove("active")
  img.src = "article.jpg";
  a1.style.display = "";
  a2.style.display = "";
  ac.style.display = "none";
  ab.style.display = "none";
}

function contact() {
  tit.innerHTML = "Contact";
  con.classList.add("active")
  abo.classList.remove("active")
  hom.classList.remove("active")
  art.classList.remove("active")
  img.src = "contact.png";
  ab.style.display = "none";
  a1.style.display = "none";
  a2.style.display = "none";
  ac.style.display = "";
}


var box = document.querySelector("#modal-user");

function modal() {

  box.classList.toggle("t-hi");
}