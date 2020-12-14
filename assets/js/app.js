/*const titlePaths = document.querySelectorAll(".title path");

console.log(titlePaths);*/

const form = document.querySelector("form");
const message = document.getElementById("message");

form.addEventListener("submit", e => {
    e.preventDefault();
    message.innerHTML = "";
    const formData = new FormData(form);
    fetch("send_mail.php",{
        method: "POST",
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if(data.message !== undefined)
        {
            form.reset();
            message.innerHTML = data.message;
        }
    });
})