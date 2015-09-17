var current_id = 0;
$('#btn').click(function(){
    nextElement($('#Instrument_00'));
})

function nextElement(element){
    var newElement = element.clone();
    var id = current_id+1;
    current_id = id;
    if(id <10)id = "0"+id;
    newElement.attr("id",element.attr("id").split("_")[0]+"_"+id);
    var field = $('input', newElement).attr("id");
    $('input', newElement).attr("id", field.split("_")[0]+"_"+id );
    newElement.appendTo($("#elements"));
}