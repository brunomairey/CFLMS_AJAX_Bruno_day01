
<!DOCTYPE html>
<html>
<style>
table,
th,
td {
   border: 1px solid black;
   border-collapse: collapse;
}
th,
td {
   padding: 5px;
}
</style>

<body>
   <h1>The XMLHttpRequest Object</h1>
   <button type="button" onclick="loadDoc()">Get my txt file</button>
   <br>
   <br>
   <div id="content"></div>
   <input type="file" id="file">
   <script>

   function loadDoc() {
    var fileVal = document.getElementById('file').value;
    fileVal = fileVal.substring(12)
       var xhttp = new XMLHttpRequest();
       xhttp.onreadystatechange = function() {
           if (this.readyState == 4 && this.status == 200) {
              document.getElementById("content").innerHTML =
     this.responseText;
           }
       };
       xhttp.open("GET", "documents/"+fileVal, true);
       xhttp.send();
   }

   

</script>
 
</body>
</html>