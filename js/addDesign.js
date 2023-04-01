function validateAddDesign() {
    let x = document.forms["addform"]["desName"].value;
    let y = document.forms["addform"]["desType"].value;
    let z = document.forms["addform"]["desPrice"].value;
    if (x == "") {
      document.getElementById("dname").innerHTML = "<font style='color:red;'>*Please fill your name </font>";
      return false;
    }
    if (y == "") {
      document.getElementById("dtype").innerHTML = "<font style='color:red;'>*Please fill design type </font>";
      return false;
    }
    if (z == "") {
        document.getElementById("dprice").innerHTML = "<font style='color:red;'>*Please fill the amount you request for the design</font>";
        return false;
      }
}
function enableBtn(){
    if(document.getElementById("check").checked)
	{
		document.getElementById("submitBtn").disabled=false;
	}
	else
	{
		document.getElementById("submitBtn").disabled=true;
	}
}