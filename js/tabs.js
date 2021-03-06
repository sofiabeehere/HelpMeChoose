// Script to open tabs on program entry pages
function openReq(evt, yearName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("reqtabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("reqtablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(yearName).style.display = "flex";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultReqOpen").click();