var home = document.querySelector('.right--side--home');
var register = document.querySelector('.right--side--register');
var scales = document.querySelector('.right--side--scales');

var btnHome = document.getElementById('btn--home');
var btnRegister = document.getElementById('btn--register');
var btnScales = document.getElementById('btn--scales')

window.onload=function(){ //This bloc alters the atributtes of the starting frame when the dom is load
  home.style.display="block";
  btnHome.style.backgroundColor="white";
  btnHome.style.color="#31b9e0";
}

function openHome(){  
  if(home.style.display = "none"){
    home.style.display="block";
    register.style.display="none";
    scales.style.display="none";
    btnRegister.style.color="#fff"; btnRegister.style.backgroundColor= "transparent";
    btnScales.style.color="#fff"; btnScales.style.backgroundColor= "transparent";
    btnHome.style.backgroundColor="white";
    btnHome.style.color="#53c8ff";
  }
}

  function openRegister(){  
    if(register.style.display = "none"){
      register.style.display="block";
      home.style.display="none";
      scales.style.display="none";
      btnHome.style.color="#fff"; btnHome.style.backgroundColor= "transparent";
      btnScales.style.color="#fff"; btnScales.style.backgroundColor= "transparent";
      btnRegister.style.backgroundColor="white";
      btnRegister.style.color="#53c8ff";
  }
}
    function openScales(){  
      if(scales.style.display = "none"){
        scales.style.display = "block";
        home.style.display = "none";
        register.style.display = "none";
        btnHome.style.color="#fff"; btnHome.style.backgroundColor= "transparent";
        btnRegister.style.color="#fff"; btnRegister.style.backgroundColor= "transparent";       
        btnScales.style.backgroundColor="white";
        btnScales.style.color="#53c8ff";
  }
}