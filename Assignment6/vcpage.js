

const noteContent = document.getElementById('notecontent');
const characterCountOutput = document.getElementById('character-count');

noteContent.addEventListener("input", (e) => {

const characterCount = e.target.value.length;

characterCountOutput.innerText = characterCount;

const remainingCharText = document.getElementById('remainingchar');
const MAX_CHARS = 1500;

noteContent.addEventListener('input',() => {

    const remaining = MAX_CHARS - noteContent.value.length;

    remainingCharText.textContent = `${remaining} characters remaining`;



});


})



var notecontent = document.forms['form']['notecontent'];

function validated(){


    if (notecontent.value.length >1500){
    notecontent.style.border = "1px solid red";
    content_error.style.display = "block";
    notecontent.focus();
    return false;

    }
    else{
        notecontent.style.border = "none";
        content_error.style.display = "none";
        notecontent.focus();
        return true;
    }
} 