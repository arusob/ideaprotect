
function printDiv(printableArea) {
    var printContents = document.getElementsByClassName(printableArea).innerHTML;
    //var originalContents = document.body.innerHTML;
    window.print(printContents);
}
