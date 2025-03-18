function typeWriterEffect() {
    const text = "Progetti web unici, design che parla e contenuti che coinvolgono.";
    let i = 0;

    function typeWriter() {
        if (i < text.length) {
            document.getElementById("typing-effect").innerHTML += text.charAt(i);
            i++;
            setTimeout(typeWriter, 75); // Velocità della digitazione
        } else {
            setTimeout(function() {
                document.getElementById("typing-effect").innerHTML = ""; // Pulisce il testo
                i = 0; // Resetta l'indice
                typeWriter(); // Ricomincia l'effetto
            }, 1000); // Pausa di 1 secondo prima di ricominciare
        }
    }

    typeWriter(); // Avvia l'effetto macchina da scrivere
}
