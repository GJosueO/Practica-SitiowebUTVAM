function upload(){
 var imcanvas = document.getElementById("can");
  var fileinput = document.getElementById("foto");
  var image = new SimpleImage(fileinput);
  image.drawTo(imcanvas);

}
function mostrar(){
  var imcanvas = document.getElementById("fotito");
  var fileinput = document.getElementById("foto");
  var image = new SimpleImage(fileinput);
  image.drawTo(imcanvas);
  // document.getElementById('fotito').innerHTML = '';

}