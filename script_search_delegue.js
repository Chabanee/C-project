function GETRessources() {
    let codePostal = $("#code_postal").val();
    //let codePostal = document.getElementById("code_postal").value;
    console.log(codePostal);

    if (codePostal.length == 5) {
        var url = `https://apicarto.ign.fr/api/codes-postaux/communes/${codePostal}`;

    $.get(url, callBackGetSuccess).done(function() {
        // alert("Second success");
    })
    .fail(function() {
        alert("Erreur : code postal inconnu");
    })
    .always(function() {
        // Alert("Finished");
    })
    }
}