$("#formMessage").submit(function(e) {
    var message = $("#message-input").val();
    e.preventDefault();

    if (message.length >= 3) {
        $.ajax({
            type: "POST",
            url: "assets/envoieMessage.php", 
            data: { envoie_msg: message },
            success: function(response) {
                console.log("réussis")
                 
                 $("#message-input").val() = "";
            }
        });
    } else {
        alert("Le message doit contenir au moins 3 caractères.");
    }
});