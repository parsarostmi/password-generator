<script>

function showLength() {
    var lengthInput = document.getElementById("length");
    var lengthDisplay = document.getElementById("lengthDisplay");
    lengthDisplay.innerText = "  " + lengthInput.value;
}




 
function copyPassword() {
 var passwordInput = document.getElementById('password'); 
 passwordInput.select();
  document.execCommand('copy'); 

  Swal.fire({
    position: "center",
    icon: "success",
    title: "password copied to clipboard ",
    showConfirmButton: false,
    timer: 2000
  });
  
  
  }


</script>