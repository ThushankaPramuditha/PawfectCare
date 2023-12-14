<div class="container">
    <form method="post" style="max-width: 340px; margin: 50px auto;">
        <div style="padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 8px;">
            <h2 style="text-align: center;">Pawfect Care</h2><br>
            <img src="<?=ROOT?>/assets/images/doglogo.jpg" style="display: block; margin: 0 auto; width: 100px; height: 100px; border-radius: 50%;">
            <br>
            <h3 style="text-align: center;">Login</h3>

            <?php if(count($errors) > 0):?>
                <div style="background-color: #ffc107; padding: 10px; border: 1px solid #ffca28; border-radius: 5px; margin-bottom: 15px;">
                    <strong>Errors:</strong>
                    <?php foreach($errors as $error):?>
                        <br><?=$error?>
                    <?php endforeach;?>
                    <span style="cursor: pointer; float: right;" onclick="this.parentElement.style.display='none';">&times;</span>
                </div>
            <?php endif;?>

            <input style="width: 100%; padding: 10px; margin-bottom: 10px; border-radius: 5px;" value="<?=get_var('email')?>" type="email" name="email" placeholder="Email" autofocus autocomplete="off">
            <br>
            <input style="width: 100%; padding: 10px; margin-bottom: 15px; border-radius: 5px;" value="<?=get_var('password')?>" type="password" name="password" placeholder="Password">
            <br>
            <button style="width: 100%; padding: 10px; background-color: #007bff; color: #fff; border: none; border-radius: 5px; cursor: pointer;" type="submit">Login</button>
        </div>
    </form>
</div>


