
// FUNCTION THAT CALCULATE TEH CURRENT YEAR//
const date = new Date();
const year = date.getFullYear();
document.getElementById("copyRight").innerHTML = "Copyright &copy "+year+" MIQUEL ROMANS. All rights reserved.";

// Show content
function showInfo(key)
{
   var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function()
  {
    if(this.readyState == 4 && this.status == 200)
    {
      //alert(key);
      document.getElementById('content').innerHTML = this.responseText;
    }
  };

  xhttp.open("POST", "showcontent.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("key="+key);

} // end showInfo().

// SHOW MENU
function showMenu()
{
  //alert('clciket!!!');
  document.getElementById('hide_menu').style.display = "block";
}
function hideMenu()
{
  //alert('clciket!!!');
  document.getElementById('hide_menu').style.display = "none";
}

