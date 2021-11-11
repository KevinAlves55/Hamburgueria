"use strict"

$('.btn').on('click', function () {
  $('.arquivo').trigger('click');
});

$('.arquivo').on('change', function () {
  var fileName = $(this)[0].files[0].name;
  $('#file').val(fileName);
});

var uploadfoto = document.getElementById('arquivo');
var fotopreview = document.getElementById('fotopreview');

uploadfoto.addEventListener('change', function(e) {
    
  showThumbnail(this.files);

});

function showThumbnail(files) {
    
  if (files && files[0]) {
    
    var reader = new FileReader();

    reader.onload = function (e) {

      fotopreview.src = e.target.result;
    
    }

    reader.readAsDataURL(files[0]);
  }

}