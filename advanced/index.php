<!DOCTYPE html>
<html>
<head>
  <title></title>
  <script
  src="https://code.jquery.com/jquery-3.4.0.min.js"
  integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg="
  crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>


   <form> 
    <label>Enter your E-mail</label>
    <input type="text" name="email" id="searchemail">
    <label>Enter your LastName</label>
    <input type="text" name="lastname" id="searchname">
 
  </form> 

  <p id="result"></p><br><br>
   <p id="result2"></p>

 

  <!-- "create" => hello& "update" => & "delete" => "test" => 2 --> 

  <script>
// Variable to hold request
var request;

// Bind to the submit event of our form
$("#searchemail").keyup(function(event){

   // Prevent default posting of form - put here to work in case of errors
   event.preventDefault();

   // Abort any pending request
   if (request) {
       request.abort();
   }
   // setup some local variables
   var $form = $(this);

   // Let's select and cache all the fields
   var $inputs = $form.find("input, select, button, textarea");

   // Serialize the data in the form
   var serializedData = $form.serialize();

   // console.log(serializedData);
   var search = document.getElementById("searchemail").value;
   if(search.length > 0){
    $inputs.prop("disabled", true);

   // Fire off the request to /form.php
   request = $.ajax({
       url: "search.php",
       type: "post",
       data: serializedData
   });

   // Callback handler that will be called on success
   request.done(function (response, textStatus, jqXHR){
       // Log a message to the console
       document.getElementById("result").innerHTML= response;
       // console.log(response);
   });

   // Callback handler that will be called on failure
   request.fail(function (jqXHR, textStatus, errorThrown){
       // Log the error to the console
       console.error(
           "The following error occurred: "+
           textStatus, errorThrown
       );
   });

   // Callback handler that will be called regardless
   // if the request failed or succeeded
   request.always(function () {
       // Reenable the inputs
       $inputs.prop("disabled", false);
   });
 }else {
  document.getElementById("result").innerHTML = "";
 }
// search => 
   // Let's disable the inputs for the duration of the Ajax request.
   // Note: we disable elements AFTER the form data has been serialized.
   // Disabled form elements will not be serialized.
   
});

var request2;

$("#searchname").keyup(function(event){

   // Prevent default posting of form - put here to work in case of errors
   event.preventDefault();

   // Abort any pending request
   if (request2) {
       request2.abort();
   }
   // setup some local variables
   var $form = $(this);

   // Let's select and cache all the fields
   var $inputs = $form.find("input, select, button, textarea");

   // Serialize the data in the form
   var serializedData = $form.serialize();

   // console.log(serializedData);
   var search = document.getElementById("searchname").value;
   if(search.length > 0){
    $inputs.prop("disabled", true);

   // Fire off the request to /form.php
   request2 = $.ajax({
       url: "search2.php",
       type: "post",
       data: serializedData
   });

   // Callback handler that will be called on success
   request2.done(function (response, textStatus, jqXHR){
       // Log a message to the console
       document.getElementById("result2").innerHTML= response;
       // console.log(response);
   });

   // Callback handler that will be called on failure
   request2.fail(function (jqXHR, textStatus, errorThrown){
       // Log the error to the console
       console.error(
           "The following error occurred: "+
           textStatus, errorThrown
       );
   });

   // Callback handler that will be called regardless
   // if the request failed or succeeded
   request2.always(function () {
       // Reenable the inputs
       $inputs.prop("disabled", false);
   });
 }else {
  document.getElementById("result2").innerHTML = "";
 }
// search => 
   // Let's disable the inputs for the duration of the Ajax request.
   // Note: we disable elements AFTER the form data has been serialized.
   // Disabled form elements will not be serialized.
   
});

// $("#submit").submit(function(event){

//    // Prevent default posting of form - put here to work in case of errors
//    event.preventDefault();

//    // Abort any pending request
//    if (request) {
//        request.abort();
//    }
//    // setup some local variables
//    var $form = $(this);

//    // Let's select and cache all the fields
//    var $inputs = $form.find("input, select, button, textarea");

//    // Serialize the data in the form
//    var serializedData = $form.serialize();

//    // Let's disable the inputs for the duration of the Ajax request.
//    // Note: we disable elements AFTER the form data has been serialized.
//    // Disabled form elements will not be serialized.
//    $inputs.prop("disabled", true);

//    // Fire off the request to /form.php
//    request = $.ajax({
//        url: "create.php",
//        type: "post",
//        data: serializedData
//    });

//    // Callback handler that will be called on success
//    request.done(function (response, textStatus, jqXHR){
//        // Log a message to the console
//       alert(response);
//    });

//    // Callback handler that will be called on failure
//    request.fail(function (jqXHR, textStatus, errorThrown){
//        // Log the error to the console
//        console.error(
//            "The following error occurred: "+
//            textStatus, errorThrown
//        );
//    });
//    // Callback handler that will be called regardless
//    // if the request failed or succeeded
//    request.always(function () {
//        // Reenable the inputs
//        $inputs.prop("disabled", false);
//    });
// });
</script>
<!-- what<?php //if($result->num_rows > 0) {
               // while($row = $result->fetch_assoc()) {
  ?>
  <label>FistName</label>
    // <input type="text" name="firstname" value="<?php //echo $row['userName'] ?>">

   <?php //;} ?>

 -->
</body>
</html>