<!DOCTYPE html>
<html lang="en">

<head>
    <title>Natawut</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-login">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form id="login-form" action="#" method="post" role="form" style="display: block;">
                                    <h2>REGISTER</h2>
                                    <hr>
                                    <div class="form-group col-lg-6">
                                        <label>First Name</label>
                                        <input type="text" name="" id="cus_fname" tabindex="1" class="form-control" placeholder="First Name" value="">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Last Name</label>
                                        <input type="text" name="" id="cus_lname" tabindex="1" class="form-control" placeholder="Last Name" value="">
                                    </div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" name="" id="cus_add" tabindex="2" class="form-control" placeholder="Address">
                                    </div>
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" name="" id="cus_tel" tabindex="2" class="form-control" placeholder="Phone">
                                    </div>
                                    <div class="form-group">
                                        <label>E-Mail</label>
                                        <input type="email" name="" id="cus_email" tabindex="2" class="form-control" placeholder="E-Mail">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Password</label>
                                        <input type="password" name="" id="cus_pass" tabindex="2" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>ConFrim Password</label>
                                        <input type="password" name="" id="cus_conpass" tabindex="2" class="form-control" placeholder="ConFrim Password">
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3">
                                                <input type="button" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now" onclick="submitData()">                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
function submitData() {
    var cus_fname = $('#cus_fname').val();
    var cus_lname = $('#cus_lname').val();
    var cus_add = $('#cus_add').val();
    var cus_tel = $('#cus_tel').val();
    var cus_email = $('#cus_email').val();
    var cus_pass = $('#cus_pass').val();
    var cus_conpass = $('#cus_conpass').val();
    if (cus_pass != cus_conpass) {
        alert('กรุณากรอก Password ให้ตรงกัน !!');
        return;
    } else {
        var emailFilter = /^.+@.+\..{2,3}$/;
        if (!(emailFilter.test(cus_email))) {
            alert("ท่านใส่อีเมล์ไม่ถูกต้อง");
            return false;
        } else {
            //alert(eats);
            $.ajax({
                    type: "POST",
                    url: "insert_cus.php",
                    data: {
                        'cus_fname': cus_fname,
                        'cus_lname': cus_lname,
                        'cus_add': cus_add,
                        'cus_tel': cus_tel,
                        'cus_email': cus_email,
                        'cus_pass': cus_pass
                    }
                })
                .done(function(msg) {
                    // alert( "Send Data : " + msg);
                    //$('#myModal').modal('hide');
                    window.location = "login.php";
                });
        }
    }
}
// alert(idFood + ' ' + hn + ' ' + detail);
</script>

</html>
