<?php
$title="Book Your Trip";
include 'top.php';
?>
             <div class="LimitSize">  
      <h1>Book a Cruise</h1>

      <form action="" method="GET">
          <label> Full Name (required)<input type="text" name="name" required class="required"></label>
          <label>Address <input type="text" name="address"></label>
          <label>State<select>
            <option value="AL">Alabama</option>
            <option value="AK">Alaska</option>
            <option value="AZ">Arizona</option>
            <option value="AR">Arkansas</option>
            <option value="CA">California</option>
            <option value="CO">Colorado</option>
            <option value="CT">Connecticut</option>
            <option value="DE">Delaware</option>
            <option value="DC">District Of Columbia</option>
            <option value="FL">Florida</option>
            <option value="GA">Georgia</option>
            <option value="HI">Hawaii</option>
            <option value="ID">Idaho</option>
            <option value="IL">Illinois</option>
            <option value="IN">Indiana</option>
            <option value="IA">Iowa</option>
            <option value="KS">Kansas</option>
            <option value="KY">Kentucky</option>
            <option value="LA">Louisiana</option>
            <option value="ME">Maine</option>
            <option value="MD">Maryland</option>
            <option value="MA">Massachusetts</option>
            <option value="MI">Michigan</option>
            <option value="MN">Minnesota</option>
            <option value="MS">Mississippi</option>
            <option value="MO">Missouri</option>
            <option value="MT">Montana</option>
            <option value="NE">Nebraska</option>
            <option value="NV">Nevada</option>
            <option value="NH">New Hampshire</option>
            <option value="NJ">New Jersey</option>
            <option value="NM">New Mexico</option>
            <option value="NY">New York</option>
            <option value="NC">North Carolina</option>
            <option value="ND">North Dakota</option>
            <option value="OH">Ohio</option>
            <option value="OK">Oklahoma</option>
            <option value="OR">Oregon</option>
            <option value="PA">Pennsylvania</option>
            <option value="RI">Rhode Island</option>
            <option value="SC">South Carolina</option>
            <option value="SD">South Dakota</option>
            <option value="TN">Tennessee</option>
            <option value="TX">Texas</option>
            <option value="UT">Utah</option>
            <option value="VT">Vermont</option>
            <option value="VA">Virginia</option>
            <option value="WA">Washington</option>
            <option value="WV">West Virginia</option>
            <option value="WI">Wisconsin</option>
            <option value="WY">Wyoming</option>
        </select>			
    </label>
    <label>ZipCode <input type="text" name="zipcode"></label>
    <label>Phone Number <input type="number" name="phoneNumber"></label>
    <label>Email <input type="email" name="email" require class="required"></label>
    <label>Select a Cruise <select>
        <option value="">Please Select...</option>
        <option value="Bahamas">Bahamas from Miami $1490</option>
        <option value="Baja">Baja Mexico from Long Beach $1699</option>
        <option value="Caribbean">Caribbean from Miami $1799</option>
        <option value="Alaska">Alaska from San Fansico $1200</option>
    </select></label>

    <button class="submit">Book My Cruise</button>
      </form>
        </div><!--sizeRestraint-->

<?php include "bottom.php";>