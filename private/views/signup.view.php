<?php

?>
<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f8f9fa;
        margin: 0;
        padding: 0;
    }

    #form-container {
        margin-top: 50px;
        width: 100%;
        max-width: 400px;
        margin: 0 auto;
    }

    #form-wrapper {
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        background-color: #ffffff;
        text-align: center;
    }

    #form-wrapper img {
        display: block;
        margin: 0 auto;
        width: 100px;
        border: 2px solid none;
        border-radius: 50%;
    }

    #form-wrapper h2 {
        margin-bottom: 20px;
        color: #007bff;
    }

    #form-wrapper h3 {
        margin-top: 20px;
        margin-bottom: 20px;
        color: #333;
    }

    .error-container {
        background-color: #F5E077;
        padding: 10px;
        border: 1px solid #ffca28;
        border-radius: 5px;
        margin-bottom: 15px;
    }

    .error-container strong {
        color: #dc3545;
    }

    .form-input {
        margin: 10px 0;
        padding: 8px;
        width: 100%;
        border: 1px solid #ced4da;
        border-radius: 5px;
        box-sizing: border-box;
    }

    .select-input {
        margin: 10px 0;
        padding: 8px;
        width: 100%;
        border: 1px solid #ced4da;
        border-radius: 5px;
        box-sizing: border-box;
    }

    .submit-btn {
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 10px;
    }

    .cancel-btn {
        width: 100%;
        padding: 10px;
        background-color: #dc3545;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 10px;
    }
</style>

<div id="form-container">
    <form method="post">
        <div id="form-wrapper">
            <h2>Pawfect Care</h2>
            <img src="<?= ROOT ?>/assets/images/doglogo.jpg">
            <h3>Add User</h3>

            <?php if(count($errors) > 0): ?>
                <div class="error-container">
                    <strong>Errors:</strong>
                    <?php foreach($errors as $error): ?>
                        <br><?= $error ?>
                    <?php endforeach; ?>
                    <button type="button" onclick="this.parentElement.style.display='none'">&times;</button>
                </div>
            <?php endif; ?>

            <input class="form-input" value="<?=get_var('name')?>" type="text" name="name" placeholder="Name">
            <input class="form-input" value="<?=get_var('email')?>" type="email" name="email" placeholder="Email">
           
            <select class="select-input" name="user_type">
                <option <?=get_select('user_type','')?> value="">--Select a User--</option>
                <option <?=get_select('user_type','receptionist')?> value="receptionist">Receptionist</option>
                <option <?=get_select('user_type','veterinarian')?> value="veterinarian">Veterinarian</option>
                <option <?=get_select('user_type','medical-staff')?> value="medical-staff">Medical Staff</option>
                <option <?=get_select('user_type','daycare-staff')?> value="daycare-staff">Daycare Staff</option>
                <option <?=get_select('user_type','pet-ambulance-driver')?> value="pet-ambulance-driver">Pet Ambulance Driver</option>
                <option <?=get_select('user_type','admin')?> value="admin">Admin</option>
            </select>
            <input class="form-input" value="<?=get_var('nic')?>" type="nic" name="nic" placeholder="NIC">
            <input class="form-input" value="<?=get_var('contact_no')?>" type="tel" name="contact_no" placeholder="Contact No">
            <input class="form-input" value="<?=get_var('address')?>" type="text" name="address" placeholder="Address">
            <input class="form-input" value="<?=get_var('password')?>" type="password" name="password" placeholder="Password">
            <input class="form-input" value="<?=get_var('password2')?>" type="password" name="password2" placeholder="Retype Password">
            <br>
            <button class="submit-btn" type="submit">Add User</button>
            <button class="cancel-btn" type="button">Cancel</button>
        </div>
    </form>
</div>
