window.onload = function () {
    console.log("Entered script")
    document.getElementById("download").addEventListener("click", () => {
        const transcript = this.document.getElementById("transcript");
        html2pdf().from(transcript).save("transcript.pdf");
    })
}