var projects = [
    { title: "Portfolio Website", desc: "First web project", img: "Pictures/img1.jpg" },
    { title: "Student Manager", desc: "DOM manipulation study", img: "Pictures/img2.jpg" },
    { title: "E-commerce UI", desc: "Responsive layout design", img: "Pictures/img3.jpg" }
];

var container = document.getElementById("projectContainer");

for (var i = 0; i < projects.length; i++) {
    var p = projects[i];
    container.innerHTML += `
        <div class="card">
            <img src="${p.img}" width="100%">
            <h3>${p.title}</h3>
            <p>${p.desc}</p>
            <a href="#">View</a>
        </div>
    `;
}

var form = document.getElementById("contactForm");

form.onsubmit = function(e) {
    e.preventDefault();

    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var subject = document.getElementById("subject").value;
    var message = document.getElementById("message").value;

    document.getElementById("nameError").innerText = "";
    document.getElementById("emailError").innerText = "";
    document.getElementById("subjectError").innerText = "";
    document.getElementById("messageError").innerText = "";

    var isValid = true;

    if (name == "") {
        document.getElementById("nameError").innerText = "Name required";
        isValid = false;
    }
    if (email == "" || !email.includes("@")) {
        document.getElementById("emailError").innerText = "Valid email required";
        isValid = false;
    }
    if (subject == "") {
        document.getElementById("subjectError").innerText = "Subject required";
        isValid = false;
    }
    if (message == "") {
        document.getElementById("messageError").innerText = "Message required";
        isValid = false;
    }

    if (isValid) {
        alert("Sent by Fahad (23-52272-2)");
        form.reset();
    }
};

var btn = document.getElementById("modeToggle");

btn.onclick = function() {
    document.body.classList.toggle("dark");
    if (document.body.classList.contains("dark")) {
        localStorage.setItem("theme", "dark");
        btn.innerText = "☀️ Light Mode";
    } else {
        localStorage.setItem("theme", "light");
        btn.innerText = "🌙 Dark Mode";
    }
};

if (localStorage.getItem("theme") == "dark") {
    document.body.classList.add("dark");
    btn.innerText = "☀️ Light Mode";
}

var topBtn = document.getElementById("topBtn");

window.onscroll = function() {
    if (window.pageYOffset > 200) {
        topBtn.style.display = "block";
    } else {
        topBtn.style.display = "none";
    }
};

topBtn.onclick = function() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
};