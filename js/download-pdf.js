document.getElementById('content').addEventListener('submit', onSubmit);

function onSubmit(e) {
    e.preventDefault();
    var text = this.elements.text.value;

    // PDF settings
    var pdf     = new jsPDF(),
        width   = 210,  // width of 4A in mm
        height  = 297;  // height of 4A in mm

    var lMargin = 15,
        rMargin = 15,
        tMargin = 15,
        bMargin = 15;

    // add font 
    pdf.setFont("times");
    pdf.setFontType("normal");

    // add fotnSize 
    pdf.setFontSize(13);
    
    // Handle page/line wrapping
    var lineHeight = pdf.getTextDimensions('X').h / 2,
    page       = 1,
    top        = tMargin,
    addFooter  = function(){
        pdf.text(''+page, width - 8 - pdf.getTextDimensions(''+page).w / 2, height - 8);
    },
    addPage    = function(){
            pdf.addPage();
            top = tMargin;
            page++;
            addFooter();
        };
        
    // Add pages/lines
    addFooter();
    var lines = pdf.splitTextToSize(text, (width-lMargin-rMargin));
        
    for(var i=0;i<lines.length;i++) {
        if(top + bMargin > height) {
        addPage();
        }
        pdf.text(lines[i], lMargin, top);
        top += lineHeight;
    }

    pdf.save('a4.pdf');
    return false;
}