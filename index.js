function openNav() {
  if (document.getElementById("mySidebar").style.width == "0px") {
    document.getElementById("mySidebar").style.width = "500px";
  } else {
    document.getElementById("mySidebar").style.width = "0";
  }
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
}

function increaseDownloads(){
  
}
$(".mylink").click(function() {
  var _this = $(this);
  var ref = $(this).data('ref');
  $.ajax({
    url: '/increase.php',
    type: 'POST',
    data: {id:ref}
    
    
  });
});

console.log("hmm");
