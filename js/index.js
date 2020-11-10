function insertData(){
  const firstName = $("#firstName").val();
  const middleName = $("#middleName").val();
  const lastName = $("#lastName").val();

  const mobileNumber = $("#mobileNumber").val();
  const emailAddress = $("#emailAddress").val();

  const street = $("#street").val();
  const subdivision = $("#subdivision").val();
  const barangay = $("#barangay").val();
  const town = $("#town").val();
  const province = $("#province").val();
  const zipcode= $("#zipcode").val();

  const temperature = $("#temperature").val();

  var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
       // Typical action to be performed when the document is ready:
       // document.getElementById("demo").innerHTML = xhttp.responseText;
       alert("dean");
    }
};
xhttp.open("POST", "https://graph.microsoft.com/v1.0/me/drive/items/FDC339D14B7BD2AF!115/workbook/worksheets/", true);
xhttp.withCredentials = true;
xhttp.send();

}
