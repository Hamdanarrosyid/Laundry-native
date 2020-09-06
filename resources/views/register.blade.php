@extends('layouts.main')
@section('content')
    <div>
        <form action="{{BASEURL}}users/registerProcess" method="POST" id="register">
            <div class="demo-table">

                <div class="form-head">Register</div>
                <?php
                if(isset($_SESSION["errorMessage"])) {
                ?>
                <div class="error-message"><?php  echo $_SESSION["errorMessage"]; ?></div>
                <?php
                unset($_SESSION["errorMessage"]);
                }
                ?>
                <div class="field-column">
                    <div>
                        <label for="email">Email</label><span id="user_info" class="error-info"></span>
                    </div>
                    <div>
                        <input required name="email" id="email" type="email"
                               class="demo-input-box">
                    </div>
                </div>
                <div class="field-column">
                    <div>
                        <label for="password">Password</label><span id="password_info" class="error-info"></span>
                    </div>
                    <div>
                        <input name="password" id="password" type="password" pattern=".{8,}"   required title="8 characters minimum"
                               class="demo-input-box">
                    </div>
                </div>
                <div class="field-column">
                    <div>
                        <label for="confirmpassword">Confirm Password</label><span id="password_info" class="error-info"></span>
                    </div>
                    <div>
                        <input name="confirmpassword" id="confirmpassword" type="password" pattern=".{8,}"   required title="8 characters minimum"
                               class="demo-input-box">
                    </div>
                </div>
                <div class=field-column>
                    <div>
                        <input type="submit" name="login" value="Register"
                               class="btnLogin"></span>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection