window.onload = function() {
    document.getElementById("download").addEventListener("click", () => {
        const printable = this.document.getElementById("printable-area");
        console.log(printable);
        console.log(window);

        html2pdf().from(printable).save();
    })
}