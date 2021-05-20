<!DOCTYPE html>
<html>
<head>
    <title>Toggle Password Visibility</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .container i {
    margin-left: -30px;
    cursor: pointer;
}
    </style>
</head>
<body>
    <div class="container">
        <h1>Toggle Password Visibility</h1>
        <input type="password" name="password" id="password" placeholder="Enter the password">
        <i class="far fa-eye" id="togglePassword"></i>
    </div>
    <script src="js/app.js"></script>
</body>
<script>
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#password');
togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
</script>
</html>