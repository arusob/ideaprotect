
let numberInput = $('input[type=number]')

setTimeout(unblockContractBtn, 500);
setTimeout(generateCostsBtn, 500);

numberInput.on("input", function() {
    unblockContractBtn();
    generateCostsBtn(); 
 });

function unblockContractBtn() {
    let enabledSubmitButton = false
    for(let i=0; i < numberInput.length; i++) {
        if (numberInput[i].value.length != 0) {
            enabledSubmitButton = true
            
        }
    }
    if (enabledSubmitButton) {
        $('#viewDocs').attr("disabled", false)    
    } else {
        $('#viewDocs').attr("disabled", true)    
    }
}

function generateCostsBtn() {
    let enabledSubmitButton = false
    for(let i=0; i < numberInput.length; i++) {
        if (numberInput[i].value.length != 0) {
            enabledSubmitButton = true
            
        }
    }
    if (enabledSubmitButton) {
        $('#viewPdf').attr("disabled", false)    
    } else {
        $('#viewPdf').attr("disabled", true)    
    }
}