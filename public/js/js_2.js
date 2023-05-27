function loadFileValue_pict(input) {
    var file = input.files[0];
    var reader = new FileReader();
    reader.onload = function(e) {
        var fileName = file.name;
        var loadFileInput = document.getElementById("loadFile_pict");
        loadFileInput.value = fileName;
        loadFileInput.disabled = true;
        document.getElementById("x1").style.display = "block";
    };
    reader.readAsDataURL(file);
  }
function del1() {
  var loadFileInput = document.getElementById("loadFile_pict");
  loadFileInput.value = "";
  loadFileInput.disabled = false;
  document.getElementById("x1").style.display = "none";
}
  
function loadFileValue_cin_pict(input) {
    var file = input.files[0];
    var reader = new FileReader();
    reader.onload = function(e) {
        var fileName = file.name;
        var loadFileInput = document.getElementById("loadFile_cin_pict");
        loadFileInput.value = fileName;
        loadFileInput.disabled = true;
        document.getElementById("x2").style.display = "block";
    };
    reader.readAsDataURL(file);
  }
  function del2() {
    var loadFileInput = document.getElementById("loadFile_cin_pict");
    loadFileInput.value = "";
    loadFileInput.disabled = false;
    document.getElementById("x2").style.display = "none";
  }

function loadFileValue_magasin_pict(input) {
    var file = input.files[0];
    var reader = new FileReader();
    reader.onload = function(e) {
        var fileName = file.name;
        var loadFileInput = document.getElementById("loadFile_magasin_pict");
        loadFileInput.value = fileName;
        loadFileInput.disabled = true;
        document.getElementById("x3").style.display = "block";
    };
    reader.readAsDataURL(file);
  }
  function del3() {
    var loadFileInput = document.getElementById("loadFile_magasin_pict");
    loadFileInput.value = "";
    loadFileInput.disabled = false;
    document.getElementById("x3").style.display = "none";
  }

function loadFileValue_entreprise_pict(input) {
    var file = input.files[0];
    var reader = new FileReader();
    reader.onload = function(e) {
        var fileName = file.name;
        var loadFileInput = document.getElementById("loadFile_entreprise_pict");
        loadFileInput.value = fileName;
        loadFileInput.disabled = true;
        document.getElementById("x4").style.display = "block";
    };
    reader.readAsDataURL(file);
  }
  function del4() {
    var loadFileInput = document.getElementById("loadFile_entreprise_pict");
    loadFileInput.value = "";
    loadFileInput.disabled = false;
    document.getElementById("x4").style.display = "none";
  }
  