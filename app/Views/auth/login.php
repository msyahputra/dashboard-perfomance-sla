<?= $this->extend('auth/layout/template'); ?>

<?= $this->section('content'); ?>
<div class="error-pagewrap">
    <div class="error-page-int">
        <div class="text-center m-b-md custom-login">
            <h3>Dashboard SLA Performance</h3>
            <p>This is the best app ever!</p>
        </div>
        <div class="content-error">
            <div class="hpanel">
                <div class="panel-body">
                    <form action="#" id="loginForm">
                        <div class="form-group">
                            <label class="control-label" for="username">User Parner</label>
                            <input type="text" placeholder="176920" title="Please enter you username" required="" value="" name="username" id="username" class="form-control">
                            <span class="help-block small">Your unique user parner to app</span>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="password">Password</label>
                            <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control">
                            <span class="help-block small">Yur strong password</span>
                        </div>
                        <!-- <div class="checkbox login-checkbox">
                                <label>
										<input type="checkbox" class="i-checks"> Remember me </label>
                                <p class="help-block small">(if this is a private computer)</p>
                            </div> -->
                        <!-- <button class="btn btn-success btn-block loginbtn">Login</button> -->
                        <a class="btn btn-default btn-block" href="dashboard">Login</a>
                    </form>
                </div>
            </div>
        </div>
        <div class="text-center login-footer">
            <!-- <p>Copyright © 2018. All rights reserved. Template by <a href="https://colorlib.com/wp/templates/">Colorlib</a></p> -->
        </div>
    </div>
</div>
<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();
        })
    }, 3000);

    function myFunction() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>
<?= $this->endSection(''); ?>