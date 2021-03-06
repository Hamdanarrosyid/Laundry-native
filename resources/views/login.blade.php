@extends('layouts.main')
@section('content')
    <div>
        <form action="{{BASEURL}}users/loginProcess" method="post" id="frmLogin">
            <div class="demo-table">

                <div class="form-head">Login</div>
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
                        <input required name="password" id="password" type="password"
                               class="demo-input-box">
                    </div>
                </div>
                <div class=field-column>
                    <div>
                        <input type="submit" name="login" value="Login"
                               class="btnLogin"></span>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection