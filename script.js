function previewBeforeUpload1(id){
  document.querySelector("#"+id).addEventListener("change",function(e){
    if(e.target.files.length == 0){
      return;
    }
    let file = e.target.files[0];
    let url = URL.createObjectURL(file);
    // document.querySelector("#"+id+"-preview div").innerText = file.name;
    document.getElementById("img1").style.display = "block";
    document.querySelector("#"+id+"-preview img").src = url;
    document.getElementById("one").style.display = "none";
  });
}
function previewBeforeUpload2(id){
  document.querySelector("#"+id).addEventListener("change",function(e){
    if(e.target.files.length == 0){
      return;
    }
    let file = e.target.files[0];
    let url = URL.createObjectURL(file);
    // document.querySelector("#"+id+"-preview div").innerText = file.name;
    document.getElementById("img2").style.display = "block";
    document.querySelector("#"+id+"-preview img").src = url;
    document.getElementById("two").style.display = "none";
  });
}
function previewBeforeUpload3(id){
  document.querySelector("#"+id).addEventListener("change",function(e){
    if(e.target.files.length == 0){
      return;
    }
    let file = e.target.files[0];
    let url = URL.createObjectURL(file);
    // document.querySelector("#"+id+"-preview div").innerText = file.name;
    document.getElementById("img3").style.display = "block";
    document.querySelector("#"+id+"-preview img").src = url;
    document.getElementById("three").style.display = "none";
  });
}

previewBeforeUpload1("file-1");
previewBeforeUpload2("file-2");
previewBeforeUpload3("file-3");