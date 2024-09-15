function mode() {
  const checkbox = document.querySelector("#toggle").checked;
  const checkboxes = document.querySelectorAll('input[type="checkbox"]');
  document.body.classList.toggle("light-mode");
  document.cookie = (checkbox) ? "mode=dark" : "mode=light";
}
function uri(data) {
  location.href = "?page=projetos&app=" + data.id;
}
function verMais() {
  var slideDiv = document.getElementById("slide-div");
  slideDiv.classList.toggle("show");
  if(slideDiv.classList.contains("show")){
    document.getElementById('btnVerMais').innerHTML="Ver menos";
  }else{
    document.getElementById('btnVerMais').innerHTML="Ver mais";
  }
}