function toggleSubMenu(submenuId) {
    var submenu = document.getElementById(submenuId);
    if (submenu.style.display === 'block') {
      submenu.style.display = 'none';
    } else {
      submenu.style.display = 'block';
    }
  }
  
  function validateForm() {
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var email = document.getElementById('teleffono').value;
    var message = document.getElementById('message').value;
  
    if (name === "" || email === "" || message === "") {
      alert("Por favor, complete todos los campos.");
      return false;
    }
    
    alert("Formulario enviado correctamente.");
    return true;
  }
  