<?php
print_r($_SESSION['error']);
?>

<div>     
    <img src="logo.png" alt="logo">
</div>
<div class="signup">
    <form method="post" action="assets/php/actions.php?signup">
        <h1 class="h2 text-center" style="font-weight: bold; color: rgb(88, 85, 87);">Create New Account</h1>
        <div class="inputboxes">
            <label for="username">Username:</label>
            <input type="text" id="username" value="<?=showFormData('username')?>" name="username">
            <?=showerror('username')?>

            <label for="email">Email: </label>
            <input type="email" class="email"id="email" value="<?=showFormData('email')?>" name="email">
            <?=showerror('email')?>

            <label for="first-name">First Name:</label>
            <input type="text" id="first-name" value="<?=showFormData('first_name')?>" name="first_name">
            <?=showerror('first_name')?>

            <label for="last-name">Last Name:</label>
            <input type="text" id="last-name" value="<?=showFormData('last_name')?>" name="last_name">
            <?=showerror('last_name')?>

            <label for="gender">Choose Your Gender:</label>
            <div class="gender-container">
                <div class="gender-option">
                    <input type="radio" id="male" name="gender" value="1" <?=showFormData('gender') == 1 ? 'checked' : ''?>>
                    <label for="male">Male</label>
                </div>
                <div class="gender-option">
                    <input type="radio" id="female" name="gender" value="2" <?=showFormData('gender') == 2 ? 'checked' : ''?>> 
                    <label for="female">Female</label>
                </div>
                <div class="gender-option">
                    <input type="radio" id="others" name="gender" value="0" <?=showFormData('gender') == 0 ? 'checked' : ''?>> 
                    <label for="others">Others</label>
                </div>
            </div>
            <?=showerror('gender')?>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            
            <input type="submit" value="Create Account" class="btn btn-primary">
        </div>
    </form>
</div>
