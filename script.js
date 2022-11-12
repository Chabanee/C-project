

$(document).ready(function(){


    //Permet de changer de page avec un bouton ou une icon.
    stage.onclick = () => $(window.location.href = "offre_stage.php");
    alternance.onclick = () => $(window.location.href = "offre_stage.php");
    img2.onclick = () => $(window.location.href = "offre_stage.php");
    img2_alternance.onclick = () => $(window.location.href = "offre_stage.php");
    recruteur.onclick = () => $(window.location.href = "#global_recruteur_part");
    img2_recruteur.onclick = () => $(window.location.href = "publier_stage.php");
    stg.onclick = () => $(window.location.href = "#global_stage_part");
    alter.onclick = () => $(window.location.href = "#global_alternance_part");
    etudiant.onclick = () => $(window.location.href = "connexion_etudiant.php");
    msg_icon.onclick = () => $(window.location.href = "#contact");
    aides.onclick = () => $(window.location.href = "https://www.1jeune1solution.gouv.fr/accompagnement");
    publier.onclick = () => $(window.location.href = "#global_recruteur_part");
    img1_alternance.onclick = () => $(window.location.href = "https://www.1jeune1solution.gouv.fr/jobdating");
    pilote.onclick = () => $(window.location.href = "connexion_pilote.php");
    img1_recruteur.onclick = () => $(window.location.href = "inscription_pilote.php");
    delegue.onclick = () => $(window.location.href = "connexion_delegue.php");
    img3.onclick = () => $(window.location.href = "https://www.1jeune1solution.gouv.fr/accompagnement");
    img_soma_chabane.onclick = () => $(window.location.href = "https://www.linkedin.com/in/soma-chabane-91620b20a/");
    img_badiane_fallou.onclick = () => $(window.location.href = "https://www.linkedin.com/in/fallou-badiane18/");
    img_cherif_bilal.onclick = () => $(window.location.href = "https://www.linkedin.com/in/bilal-cherif-5798b2232/");

    // Partie PWA.
    if('serviceWorker' in navigator){
        navigator.serviceWorker.register('ServiceWorker.js')
        .then( (sw) => console.log('Le Service Worker a été enregistrer', sw))
        .catch((err) => console.log('Le Service Worker est introuvable !!!', err));
        }

});
