<?php 
    include 'inc/functions/connection.php';
    include 'inc/functions/functions.php';
    include 'inc/templates/header.php';
?>
 <div class="clients-form row container mt-3">
    <div class="col-md-6 mx-auto mt-5">
        <h2>Create New Costumer</h2>
    <form id="form" method="POST">
        <div class="row">
        <div class="form-group col">
            <label for="firstname">First name:</label>
            <input type="text" name="firstName" id="firstName" class="form-control"  placeholder="">
        </div>
        <div class="form-group col">
            <label for="lastname">Last name:</label>
            <input type="text" name="lastName" id="lastName"  class="form-control"  placeholder="" >
        </div>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Email:</label>
            <input type="email" name="email" id="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="form-group">
            <label for="phoneNumber">Phone number:</label>
            <input type="tel" name="phoneNumber" id="phoneNumber" class="form-control"  placeholder="###-###-####" >
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" name="address" id="address" class="form-control">
        </div>
        <div class="row">
        <div class="form-group col">
            <label for="city">City:</label>
            <input type="text" name="city" id="city" class="form-control">
        </div>
        <div class="form-group col">
            <label for="exampleFormControlSelect1">State</label>
            <select class="form-control" name="state" id="state">
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
        </div>
        <div class="form-group col">
            <label for="zipcode">Zip Code:</label>
            <input type="text" name="zipCode" id="zipCode" class="form-control">
        </div>
        </div>
        <input type="hidden" id="type" name="type" value="create">
        <button type="submit" class="btn btn-primary">Add Client</button>
    </form>
        </div>
</div>


<?php include 'inc/templates/footer.php'; ?>
