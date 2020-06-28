function checkPassword(form) { 
    contra = form.contra.value; 
    contra2 = form.contra2.value; 
    if (contra == '') 
        alert ("Please enter Password"); 
    else if (contra2 == '') 
        alert ("Please enter confirm password");     
    else if (contra != contra2) { 
        alert ("\nPassword did not match: Please try again...") 
        return false; 
    } 
    else{ 
        return true; 
    } 
} 