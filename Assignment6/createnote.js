const noteContent = document.getElementById('notecontent');
const characterCountOutput = document.getElementById('character-count');

noteContent.addEventListener("input", (e) => {

   

const characterCount = e.target.value.length;

characterCountOutput.innerText = characterCount;


})


var notecount = document.forms['form']['notecontent'];

var content_error = document.getElementById('content_error');

var content_error = document.getElementById('content_error');

noteContent.addEventListener('textInput', validated);


function validated(){

  


    if (notecontent.value.length > 256){
    notecontent.style.border = "1px solid red";
    content_error.style.display = "block";
    notecontent.focus();
    return false;
    }

    else
    {   notecontent.style.border = "none";
        content_error.style.display = "none";
        notecontent.focus();
        return true;
    }
} 




