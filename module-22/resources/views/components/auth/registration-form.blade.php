<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-lg-10 center-screen">
            <div class="card animated fadeIn w-100 p-3">
                <div class="card-body">
                    <h4>Sign Up</h4>
                    <hr/>
                    <div class="container-fluid m-0 p-0">
                        <div class="row m-0 p-0">
                            <div class="col-md-4 p-2">
                                <label>Email Address</label>
                                <input id="email" placeholder="User Email" class="form-control" type="email"/>
                            </div>
                            <div class="col-md-4 p-2">
                                <label>First Name</label>
                                <input id="firstName" placeholder="First Name" class="form-control" type="text"/>
                            </div>
                            <div class="col-md-4 p-2">
                                <label>Last Name</label>
                                <input id="lastName" placeholder="Last Name" class="form-control" type="text"/>
                            </div>
                            <div class="col-md-4 p-2">
                                <label>Mobile Number</label>
                                <input id="mobile" placeholder="Mobile" class="form-control" type="mobile"/>
                            </div>
                            <div class="col-md-4 p-2">
                                <label>Password</label>
                                <input id="password" placeholder="User Password" class="form-control" type="password"/>
                            </div>
                        </div>
                        <div class="row m-0 p-0">
                            <div class="col-md-4 p-2">
                                <button onclick="onRegistration()" class="btn mt-3 w-100  btn-primary">Complete</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    async function onRegistration() {
        let email = document.getElementById('email').value;
        let firstName = document.getElementById('firstName').value;
        let lastName = document.getElementById('lastName').value;
        let mobile = document.getElementById('mobile').value;
        let password = document.getElementById('password').value;

        if (0 === email.length) {
            errorToast("Email is required");
        }else if(!ValidateEmail(email)){
            errorToast("You have entered an invalid email address!");
        } else if (0 === firstName.length) {
            errorToast("First name is required");
        } else if (0 === lastName.length) {
            errorToast("Last name is required");
        } else if (0 === mobile.length) {
            errorToast("Mobile number is required");
        }else if(!ValidateBDPhone(mobile)){
            errorToast("You have entered an invalid mobile number");
        } else if (0 === password.length) {
            errorToast("Password is required")
        } else if (password.length < 4) {
            errorToast("Password must be up to 4 digit")
        } else {
            let URL = '/user-registration';
            showLoader();
            let res = await axios.post(URL,
                {
                    email: email,
                    firstName: firstName,
                    lastName: lastName,
                    mobile: mobile,
                    password: password,
                }
            );
            hideLoader();
            if (res.status === 200 && res.data['status'] === 'success') {
                successToast(res.data['message']);
                setTimeout(function () {
                    window.location.href = '/userLogin'
                }, 1000);
            } else {
                errorToast(res.data['message']);
            }
        }
    }
</script>
