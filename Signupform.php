<?php
$title = " Travel";
$md = "Launch";
include 'Travelheader.php' ;?>


<form method="post" action="Signupcreate.php" name="Signup-form">

<div class="form-element">
<label>Firstname</label>
<input type="text" name="Firstname"  required />
</div>

<div class="form-element">
<label>Lastname</label>
<input type="text" name="Lastname"  required />
</div>


<div class="form-element">
<label>Email</label>
<input type="email" name="Email" required />
</div>

<div class="form-element">
<label>Street</label>
<input type="text" name="Street" required />
</div>

<div class="form-element">
<label>City</label>
<input type="text" name="City" required />
</div>

<div class="form-element">
<label>Country</label>
<input type="text" name="Country" required />
</div>


<div class="form-element">
<label>Password</label>
<input type="password" name="Password" required />
</div>

<button type="submit" name="register" value="register">SignUP</button>
</form>

<?php
include 'travelfooter.php' ;?>