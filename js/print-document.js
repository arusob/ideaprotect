
function printDiv(printableArea) {
    var printContents = document.getElementsByClassName(printableArea).innerHTML;
    window.print(printContents);
}

$('#firstInputToCopyDate').focusout(function(){
    let otherInputs = $('.inputsNotToCopy');
    let dateToCopy = $('#firstInputToCopyDate').val()
    for(let i=0; i<otherInputs.length; i++) {
        otherInputs[i].value = dateToCopy
        console.log(otherInputs[i])    
    }
});
