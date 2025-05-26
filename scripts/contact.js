const urlParams = new URLSearchParams(window.location.search);
if (urlParams.has('success')) {
alert('Merci, votre message a bien été envoyé !');
} else if (urlParams.has('error')) {
alert('Erreur lors de l’envoi du message, veuillez réessayer.');
}