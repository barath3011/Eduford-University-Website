var navlinks= document.getElementById("navlinks")
function showmenu(){
    navlinks.style.right="0px";
}
function hidemenu(){
    navlinks.style.right="-200px";
}

document.getElementById('scrollButton').addEventListener('click', function() {
 const target = document.getElementById('targetSection');
 target.scrollIntoView({ behavior: 'smooth' });
});



function showThankYouMessage() {
    // Prevent the form from actually submitting
    event.preventDefault();

    // Show the thank you message
    document.getElementById('tq').classList.remove('thankyou');

    // Optionally, you can reset the form after showing the message
    document.getElementById('myform').reset();

    // Return false to prevent the form from submitting (for demonstration)
    return false;
}
function hideThankYouMessage(){
    document.getElementById('tq').classList.add('thankyou');
}  