function send(event) {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var question = document.getElementById("question").value;
    
    
    if (name && email && question){
        var form = document.querySelector(".form");
        var success = document.querySelector(".success");
        form.style.display = "none";
        success.style.display = "flex"
    }
    
}

function init()
{
    let sendButton = document.getElementById("send");
    sendButton.addEventListener("click", send);
}

init();