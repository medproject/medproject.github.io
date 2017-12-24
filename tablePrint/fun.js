    function tableToJson(table) {
    var data = [];

    // first row needs to be headers
    var headers = [];
    for (var i=0; i<table.rows[0].cells.length-1; i++) {
        headers[i] = table.rows[0].cells[i].innerHTML.replace(/ /gi,' ');
    }
    data.push(headers);
    // go through cells
    for (var i=1; i<table.rows.length; i++) {

        var tableRow = table.rows[i];
        var rowData = {};

        for (var j=0; j<tableRow.cells.length; j++) {

            rowData[ headers[j] ] = tableRow.cells[j].innerHTML;

        }

        data.push(rowData);
    }       

    return data;
}
function callme(){
var table = tableToJson($('#table-id').get(0));
var doc = new jsPDF('l','pt','letter',true);


doc.text('All Tests Available in Our Medical Center:', 18, 90);
$.each(table, function(i, row){
    $.each(row, function(j,cell){
    
        doc.cell(15,100,190,50,cell,i);
    
    
    });
});

doc.save('Test.pdf');
}