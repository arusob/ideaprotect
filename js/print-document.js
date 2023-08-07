
function printDiv(printableArea) {
    var printContents = document.getElementsByClassName(printableArea).innerHTML;
    //var originalContents = document.body.innerHTML;
    window.print(printContents);
}


$('#firstInputToCopyDate').focusout(function(){
    let otherInputs = $('.inputsNotToCopy');
    let dateToCopy = $('#firstInputToCopyDate').val()
    for(let i=0; i<otherInputs.length; i++) {
        otherInputs[i].value = dateToCopy
        console.log(otherInputs[i])    
        //console.log(dateToCopy)    
    }
});



