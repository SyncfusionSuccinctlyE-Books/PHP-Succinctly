function savecontact() {
  if (   document.getElementById('name').value == "" 
      || document.getElementById('email').value == ""
	  || document.getElementById('subject').value == ""
	  || document.getElementById('message').value == ""
	  || document.getElementById('phonenumber').value == "")
  {
	  alert("You must fill all entries!");
	  return;
  }
  
  document.getElementById('submit').disabled = true;
  
  $.post("insertcontact.php",
    {
        name: document.getElementById('name').value,
        email: document.getElementById('email').value,
		phone: document.getElementById('phonenumber').value,
		subject: document.getElementById('subject').value,
		message: document.getElementById('message').value
    },
    function(data, status){
        if (data == "OK")
		{
			window.location.reload();
		}
		else
		{
	       alert(data);		
		}
    }).fail(function(data,status){alert("Error " + status);});
	
  document.getElementById('submit').disabled = false;

}

//Function to Display Popup
function div_show() {
document.getElementById('newcontact').style.display = "block";
}
//Function to Hide Popup
function div_hide(){
document.getElementById('newcontact').style.display = "none";
}
