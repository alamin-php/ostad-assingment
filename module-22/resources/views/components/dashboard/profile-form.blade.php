<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-lg-10 center-screen">
            <div class="card animated fadeIn w-100 p-3">
                <div class="card-body">
                    <h4>User Profile</h4>
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
                            <div class="col-md-4 p-2">
                                <label for="input-file">Profile Picture</label>
                                <input id="input-file" onchange="onUploadPhoto()" class="form-control" type="file" accept="image/*"/>
                            </div>
                        </div>
                        <div class="row m-0 p-0">
                            <div class="col-md-4 p-2">
                                <button onclick="onUpdate()" class="btn mt-3 w-100  btn-primary">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    getProfile();

    async function getProfile() {
        let URL = '/user-profile';
        showLoader();
        let res = await axios.get(URL);
        hideLoader();
        if (res.status === 200 && res.data['status'] === 'success') {
            let data = res.data['data'];
            document.getElementById('email').value = data['email'];
            document.getElementById('firstName').value = data['firstName'];
            document.getElementById('lastName').value = data['lastName'];
            document.getElementById('mobile').value = data['mobile'];
            document.getElementById('password').value = data['password'];
        }
    }

    async function onUpdate() {
        let firstName = document.getElementById('firstName').value;
        let lastName = document.getElementById('lastName').value;
        let mobile = document.getElementById('mobile').value;
        let password = document.getElementById('password').value;

        if (0 === firstName.length) {
            errorToast("First name is required");
        } else if (0 === lastName.length) {
            errorToast("Last name is required");
        } else if (0 === mobile.length) {
            errorToast("Mobile number is required");
        } else if (0 === password.length) {
            errorToast("Password is required")
        } else if (password.length < 4) {
            errorToast("Password must be up to 4 digit")
        } else {
            let URL = '/user-update';
            showLoader();
            let res = await axios.post(URL,
                {
                    firstName: firstName,
                    lastName: lastName,
                    mobile: mobile,
                    password: password,
                }
            );
            hideLoader();
            if (res.status === 200 && res.data['status'] === 'success') {
                successToast(res.data['message']);
                await getProfile();
            } else {
                errorToast(res.data['message']);
            }
        }
    }
    function onUploadPhoto(){
        let profilePic = document.getElementById('profile-pic');
        let inputFile = document.getElementById('input-file');
        profilePic.src = URL.createObjectURL(inputFile.files[0]);
    }
</script>
