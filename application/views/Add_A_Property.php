<DOCTYPE HTML>
<html>
<body>
<?php include("application/views/componets/header.php")?>
</break>
<div id="form action" align="middle">
<h1> ADD A PROPERTY </h2>
</div>
<div id="form action" align="left"
<p><strong><em>(PROPERTY OWNERS ONLY)</em></strong></p>
<br />

<form  method = "post" action="<?=site_url("Add_A_Property")?>">
  </p>

  <label for="Clientname">Client name: </label>
  <input type="text" name="client_name" id="Clientname"><br />
  <br />
  <label for="Enteremail">Enter email: </label>
  <input type="Enteremail" name="email"><br />
  <label for="Propertytype">Property type: </label>
  <input type="text" name="Property_type" id="Propertytype"><br />
  <br />
  <label for="PropertyDescription">Property Description: </label>
  <input type="text" name="Property_Description" id="PropertyDescription"><br />
  <label for="Location">Location: </label>
  <input type="text" id="Location" name="location"><br />
  <input type="submit" value="Add Property">
  <input type="reset">
  <br />
</form>
</div>
</body>
































































</html>
