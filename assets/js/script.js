function volumeToggle(button){
    // Mute & Unmute video
    var muted = $(".previewVideo").prop("muted");
    $(".previewVideo").prop("muted", !muted);

    $(button).find("i").toggleClass("fa-volume-mute");
    // volume-up not existing so adding it auto
    $(button).find("i").toggleClass("fa-volume-up");
}

// Replace video ended by image
function previewEnded(){
    $(".previewVideo").toggle(); 
    $(".previewImage").toggle();
}