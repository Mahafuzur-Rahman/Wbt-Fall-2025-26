<!DOCTYPE html>
<html>
<head>
    <title>Form Validation</title>
    <style>
        body { font-family: Arial; margin: 20px; }
        .box { border: 1px solid #aaa; padding: 20px; width: 350px; margin-bottom: 40px; }
        label { font-weight: bold; }
        .error { color: red; font-size: 14px; }
        input { margin-bottom: 10px; }
    </style>
</head>

<body>


<div class="box">
    <label>NAME</label><br><br>
    <input type="text" id="name"><br>
    <button onclick="validateName()">Submit</button>
    <p id="nameError" class="error"></p>
</div>


<div class="box">
    <label>EMAIL</label><br><br>
    <input type="text" id="email"><br>
    <button onclick="validateEmail()">Submit</button>
    <p id="emailError" class="error"></p>
</div>


 <div class="box">
    <label>DATE OF BIRTH</label><br><br>
    <input type="text" id="dd" placeholder="dd" size="4"> /
    <input type="text" id="mm" placeholder="mm" size="4"> /
    <input type="text" id="yyyy" placeholder="yyyy" size="6"><br>
    <button onclick="validateDOB()">Submit</button>
    <p id="dobError" class="error"></p>
</div>


<div class="box">
    <label>GENDER</label><br><br>
    <input type="radio" name="gender" value="male"> Male
    <input type="radio" name="gender" value="female"> Female
    <input type="radio" name="gender" value="other"> Other
    <br><br>
    <button onclick="validateGender()">Submit</button>
    <p id="genderError" class="error"></p>
</div>


<div class="box">
    <label>DEGREE</label><br><br>
    <input type="checkbox" name="degree" value="SSC"> SSC
    <input type="checkbox" name="degree" value="HSC"> HSC
    <input type="checkbox" name="degree" value="BSc"> BSc
    <input type="checkbox" name="degree" value="MSc"> MSc
    <br><br>
    <button onclick="validateDegree()">Submit</button>
    <p id="degreeError" class="error"></p>
</div>

<div class="box">
    <label>BLOOD GROUP</label><br><br>
    <select id="blood">
        <option value="">-- Select --</option>
        <option> A+ </option>
        <option> A- </option>
        <option> B+ </option>
        <option> B- </option>
        <option> AB+ </option>
        <option> AB- </option>
        <option> O+ </option>
        <option> O- </option>
    </select>
    <br><br>
    <button onclick="validateBlood()">Submit</button>
    <p id="bloodError" class="error"></p>
</div>


<script>
function validateName() {
    let name = document.getElementById("name").value.trim();
    let error = document.getElementById("nameError");
    let regex = /^[A-Za-z][A-Za-z.\- ]+$/;

    if (name === "") {
        error.innerHTML = "Name cannot be empty";
        return;
    }
    if (!regex.test(name)) {
        error.innerHTML = "Name must start with a letter and contain only letters, period, dash";
        return;
    }
    if (name.split(" ").length < 2) {
        error.innerHTML = "Name must contain at least two words";
        return;
    }

    error.innerHTML = "✔ Valid name";
}

function validateEmail() {
    let email = document.getElementById("email").value.trim();
    let error = document.getElementById("emailError");
    let regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (email === "") {
        error.innerHTML = "Email cannot be empty";
        return;
    }
    if (!regex.test(email)) {
        error.innerHTML = "Invalid email address format";
        return;
    }

    error.innerHTML = "✔ Valid email";
}

function validateDOB() {
    let dd = parseInt(document.getElementById("dd").value);
    let mm = parseInt(document.getElementById("mm").value);
    let yyyy = parseInt(document.getElementById("yyyy").value);
    let error = document.getElementById("dobError");

    if (isNaN(dd) || isNaN(mm) || isNaN(yyyy)) {
        error.innerHTML = "All fields must be filled";
        return;
    }
    if (dd < 1 || dd > 31) {
        error.innerHTML = "Day must be 1–31";
        return;
    }
    if (mm < 1 || mm > 12) {
        error.innerHTML = "Month must be 1–12";
        return;
    }
    if (yyyy < 1950 || yyyy > 2027) {
        error.innerHTML = "Year must be 1953–1998";
        return;
    }

    error.innerHTML = "✔ Valid date";
}

function validateGender() {
    let g = document.querySelector('input[name="gender"]:checked');
    let error = document.getElementById("genderError");

    if (!g) {
        error.innerHTML = "Please select at least one gender.";
        return;
    }
    error.innerHTML = "✔ Gender selected";
}

function validateDegree() {
    let degrees = document.querySelectorAll('input[name="degree"]:checked');
    let error = document.getElementById("degreeError");

    if (degrees.length < 2) {
        error.innerHTML = "Please select at least TWO degrees.";
        return;
    }

    error.innerHTML = "✔ Degrees selected";
}

function validateBlood() {
    let blood = document.getElementById("blood").value;
    let error = document.getElementById("bloodError");

    if (blood === "") {
        error.innerHTML = "Please select a blood group.";
        return;
    }

    error.innerHTML = "✔ Blood group selected";
}
</script>

</body>
</html>