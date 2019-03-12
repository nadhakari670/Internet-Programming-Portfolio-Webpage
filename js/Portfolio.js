var imageSources = ["images/dv.jpg", "images/nischal-original.jpg", "images/self1.jpg", "images/self2.jpg","images/self3.jpg", "images/self4.jpg"]

var index = 0;
setInterval (function(){
  if (index === imageSources.length) {
    index = 0;
  }
  document.getElementById("photo").src = imageSources[index];
  index++;
} , 2000);


document.getElementById("myButton").onclick = function () {
        location.href = "contacts.php";
    };