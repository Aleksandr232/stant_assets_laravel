function shareOnFacebook() {
    var url = window.location.href;
    var facebookUrl = "https://www.facebook.com/sharer/sharer.php?u=" + encodeURIComponent(url);
    window.open(facebookUrl, "_blank");
}

function shareOnInstagram() {
    var url = window.location.href;
    var instagramUrl = "https://www.instagram.com/share?url=" + encodeURIComponent(url);
    window.open(instagramUrl, "_blank");
}

function shareOnTelegram() {
    var url = window.location.href;
    var telegramUrl = "https://t.me/share/url?url=" + encodeURIComponent(url);
    window.open(telegramUrl, "_blank");
}
