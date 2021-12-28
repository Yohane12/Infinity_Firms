<DOCTYPE HTML>
<html>
<body>
<?php include("application/views/componets/header.php")?>
</break>
<div id="form action" align="middle">
<h1> CLIENT REGISTRATION PORTAL</h2>
</div>
</break>
<div id="form action" align="left"
<p><strong><em>(PROPERTY OWNERS ONLY)</em></strong></p>
<br />

<form  method = "post" action="<?=site_url("save_owner_data")?>">
  </p>

  <label for="Clientname">Client name: </label>
  <input type="text" name="client_name" id="Clientname"><br />
  <br />
  <label for="Location">Location: </label>
  <input type="text" id="Location" name="location"><br />
  <br />
  <label for="Enteremail">Enter email: </label>
  <input type="Enteremail" name="email"><br />
  <br />


  <label for="Phonenumber">Phone number: </label>
  <input type="number" id="phonenumber" name="phone_number"><br />
  <br />

  <input type="submit" value="send">
  <input type="reset">
  </div>
  <br />
  <div id="form action" align="">
  <p> Your search is over.Fill the form below</p>
  <p><strong><em>(CUSTOMERS ONLY)</em></strong></p>
  <br />
</form>

<form method = "post" action="<?=site_url("save_customer_data")?>">
<label for="Customername">Customer name: </label>
<input type="text" name="customer_name"><br />
<br />
<label for="PreferedLocation">Prefered Location: </label>
<input type="text" id="preferedLocation" name="prefered_location"><br />
<br />
<label for="Enteremail">Enter email: </label>
<input type="text" name="email"><br />
<br />

<label for="Property needed">Property needed: </label>
<input type="text" name="property_needed"><br />
<br />

<label for="Phonenumber">Phone number: </label>
<input type="number" id="phonenumber" name="phone_number"><br />
<br />

<input type="submit" value="send"><input type="reset">
</div>
<br />
</p>
</form>
</div>
     <aside>
     <footer><p>Coded by <a href="httsthenewbreedtechnologies.com/">NBT</a></p></footer>
       </aside>
</body>
</html>