var modal = document.getElementById("myModal");

var btn = document.getElementById("btn1");
var btn2 = document.getElementById("confirmado")

var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
  modal.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
}

btn2.onclick = function() {
  modal.style.display = "none";
  window.location.href = "concluir.html"
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}