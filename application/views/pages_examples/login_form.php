<?php
/**
 * Created by PhpStorm.
 * User: Wellison
 * Date: 03/03/2018
 * Time: 23:49
 */
?>
<br>
<!---->
<div class="container">
    <!--    <div class="col-md-12">-->
    <div class="row justify-content-md-center" style="margin-top: 10%">
        <div class="col-md-6">
            <div class="card">
                <div class="col-12">
                    <!-- Default form register -->
                    <?php
                    echo form_open('Login/sign_in', ['role' => 'form']);
                    ?>
                    <br>
                    <p class="h4 text-center mb-4">Login</p>
                    <!-- Default input email -->
                    <label for="defaultFormRegisterEmailEx" class="grey-text">Your email</label>
                    <input type="email" name="email" id="defaultFormRegisterEmailEx" class="form-control">
                    <br>
                    <!-- Default input password -->
                    <label for="defaultFormRegisterPasswordEx" class="grey-text">Your password</label>
                    <input type="password" name="password" id="defaultFormRegisterPasswordEx" class="form-control">
                    <div class="text-center mt-4">
                        <button class="btn btn-primary" name="sign_in" type="submit"> Entrar</button>
                    </div>
                    <br>
                    <?php
                    echo form_close();
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>