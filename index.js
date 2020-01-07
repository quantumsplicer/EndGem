function openNav() {
  if (document.getElementById("mySidebar").style.width == "0px")
  {
    document.getElementById("mySidebar").style.width = "500px";
  }else{
    document.getElementById("mySidebar").style.width = "0";
  }
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
}