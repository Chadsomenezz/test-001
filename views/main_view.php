<?php include_once "layouts/main_header.php"; ?>


<div class="main">
    <form action="controllers/main_controller_process.php" method="post">
        <section class="first-page">
            <h2>Customer Details</h2>
            <div class="form_control">
                <label for="fname">Your Name</label>
                <input type="text" name="fname" id="fname" placeholder="First Name">
                <input type="text" name="lname" placeholder="Last Name">
            </div>
            <div class="form-control">
                <label for="email-address">Email Address</label>
                <input type="text" name="emailAddress" id="email-address" placeholder="e.g.Hello123@gmail.com">
            </div>
            <div class="form-control">
                <label for="Address">Address</label>
                <input type="text" name="address" placeholder="Your Address">
            </div>
            <div class="form-control">
                <label for="phone">Phone</label>
                <input type="text" name="phone" placeholder="+63 000 000 000" id="phone">
            </div>
            <div class="form-control">
                <label for="city">City</label>
                <input type="text" name="city" placeholder="City" id="city">
            </div>
            <div class="form-control">
                <label for="state">State</label>
                <input type="text" name="state" placeholder="State" id="state">
            </div>
            <a class="btn-next">Next</a>
        </section>

        <section class="second-page">
            <h2>Payment Details</h2>
            <div class="form-control">
                <label for="card-type">Card Type</label>
                <input type="text" name="cardType" placeholder="e.g.Mastercard" id="card-type">
            </div>
            <div class="form-control">
                <label for="card-number">Card Number</label>
                <input type="number" name="cardType" placeholder="Card Number" id="card-number">
            </div>
            <div class="form-control">
                <label for="card-exp-date">Card Exp Date</label>
                <input type="date" name="card-exp-date">
            </div>
            <a class="btn-prev">Prev</a>
            <button type="submit" class="btn-submit">submit</button>
        </section>
    </form>
</div>





<?php include_once "layouts/main_footer.php"; ?>