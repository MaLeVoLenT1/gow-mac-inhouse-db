function Attachments(instrument){
    var newElem = $('#attachment' + instrument).clone().attr('id', 'attachment' + instrument).fadeIn('slow');
    newElem.html('<input type="file" name="image_'+ instrument +'[]">');
    $('#attachment' + instrument).after(newElem);
}

function Gas(instrument){


    var newElem = $('#gas' + instrument).clone().attr('id', 'gas' + instrument).fadeIn('slow');

    newElem.html(
        '<div class="form-group"> ' +
        '<label for="name_' + instrument +'">Name: </label> ' +
        '<input class="form-control" name="name_' + instrument +'[]" type="text"> ' +
        '</div> ' +
        '<div class="form-group"> ' +
        '<label for="concentration_' + instrument +'">Notes: </label> ' +
        '<input class="form-control" name="concentration_' + instrument +'[]" type="text"> ' +
        '</div><div><a class="delete">Delete</a> | <a class="updated">Update</a></div> '
    );
    $('#gas' + instrument).after(newElem);
}


function Impurity(instrument){


    var newElem = $('#impurity' + instrument).clone().attr('id', 'impurity' + instrument).fadeIn('slow');

    newElem.html(
        '<div class="form-group"> ' +
        '<label for="impurity_name_' + instrument +'">Name: </label> ' +
        '<input class="form-control" name="impurity_name_' + instrument +'[]" type="text"> ' +
        '</div> ' +
        '<div class="form-group"> ' +
        '<label for="impurity_percent_' + instrument +'">Notes: </label> ' +
        '<input class="form-control" name="impurity_percent_' + instrument +'[]" type="text"> ' +
        '</div> <div><a class="delete">Delete</a> | <a class="updated">Update</a></div>'
    );
    $('#impurity' + instrument).after(newElem);
}





$(function () {
    $('#btnAdd').click(function () {
        var num = $('.clonedInstrument').length,
            newNum = new Number(num + 1),
            newElem = $('#instrument' + num).clone().attr('id', 'instrument' + newNum).fadeIn('slow'); // create the new element via clone(), and manipulate it's ID using newNum value

            newElem.html(
                '<div class="panel-group">' +
                '<div class="panel panel-default">' +
                '<div class="panel-heading">' +
                    '<h4 class="panel-title">' +
                        '<a data-toggle="collapse" href="#collapseInstru_' + newNum +'">Instrument ' + newNum +'</a>' +
                    '</h4>' +
                '</div>' +
                '<div id="collapseInstru_' + newNum +'" class="panel-collapse collapse">' +
                    '<div class="panel-body">'+

                        '<h2 id="reference" name="reference" class="heading-reference">Instrument Section ' + newNum + '</h2> ' +
                        '<div class="form-group">' +
                            '<label for="instrument_name_' + newNum +'">Instrument Name: </label>' +
                            '<input class="form-control" name="instrument_name_' + newNum +'" type="text">' +
                        '</div>' +
                        '<div class="form-group">' +
                            '<label for="InstrumentSerial_' + newNum +'">Instrument Serial: </label>' +
                            '<input class="form-control" name="instrument_serial_' + newNum +'" type="text">' +
                        '</div>' +
                        '<div class="form-group">'+
                            '<label for="PN_' + newNum +'">P/N: </label> '+
                            '<input class="form-control" name="PN_' + newNum +'" type="text"> ' +
                        '</div> ' +
                        '<div class="form-group">' +
                            '<label for="SeriesNumber_' + newNum +'">Series Number: </label> ' +
                            '<input class="form-control" name="series_number_' + newNum +'" type="text"> ' +
                        '</div> ' +
                        '<div class="form-group"> ' +
                            '<label for="power_' + newNum +'">Power: </label> ' +
                            '<input class="form-control" name="power_' + newNum +'" type="text"> ' +
                        '</div> ' +
                        '<div class="form-group"> ' +
                            '<label for="volts_' + newNum +'">Volts: </label> ' +
                            '<input class="form-control" name="volts_' + newNum +'" type="text"> ' +
                        '</div> ' +
                        '<div class="form-group"> ' +
                            '<label for="frequency_' + newNum +'">Frequency: </label> ' +
                            '<input class="form-control" name="frequency_' + newNum +'" type="text"> ' +
                        '</div> ' +
                        '<div class="form-group"> ' +
                            '<label for="approvals_' + newNum +'">Approvals: </label> ' +
                            '<input class="form-control" name="approvals_' + newNum +'" type="text"> ' +
                        '</div> ' +
                        '<div class="form-group"> ' +
                            '<label for="FlowSystemNumber_' + newNum +'">Flow System Number: </label> ' +
                            '<input class="form-control" name="flow_system_number_' + newNum +'" type="text"> ' +
                        '</div> ' +
                        '<div class="form-group"> ' +
                            '<label for="SpecialFeatures_' + newNum +'">Special Features: </label> ' +
                            '<input class="form-control" name="special_features_' + newNum +'" type="text"> ' +
                        '</div> ' +
                        '<div class="form-group"> ' +
                            '<label for="DesignStatus_' + newNum +'">Design Status: </label> ' +
                            '<input class="form-control" name="design_status_' + newNum +'" type="text"> ' +
                        '</div>' +

                        '<div class="attachments"> ' +
                            '<div class="panel-group"> ' +
                                '<div class="panel panel-default"> ' +
                                '<div class="panel-heading"> ' +
                                    '<h4 class="panel-title"> ' +
                                        '<a data-toggle="collapse" href="#attachments_'+ newNum +'">Attachments</a> ' +
                                    '</h4> ' +
                                '</div> ' +
                                '<div id="attachments_'+ newNum +'" class="panel-collapse collapse"> ' +
                                    '<div class="panel-body">' +
                                        '<div id="attachment'+ newNum +'" class="clonedInputa">' +
                                            '<input type="file" name="image_'+ newNum +'[]">' +
                                        '</div> ' +
                                        '<div id="add-del-buttonsz"> ' +
                                            '<input type="button" id="btnAdda" value="[ + ]" onclick="Attachments(' + newNum + ')">' +
                                        '</div>'+
                                    '</div> ' +
                                '</div> ' +
                            '</div> ' +
                        '</div> ' +

                        '<div class="Base_Impurity" id="left"> ' +
                            '<div class="panel-group"> ' +
                                '<div class="panel panel-default"> ' +
                                    '<div class="panel-heading"> ' +
                                        '<h4 class="panel-title"> ' +
                                            '<a data-toggle="collapse" href="#collapseBase_'+ newNum +'">Base gas & Concentration</a>' +
                                        '</h4>' +
                                    '</div>' +
                                    '<div id="collapseBase_'+ newNum +'" class="panel-collapse collapse"> ' +
                                        '<div class="panel-body">'+
                                            '<div id="gas'+ newNum +'" class="clonedInputz">' +
                                                '<div class="form-group">' +
                                                    '<label for="name' + newNum +'">Name: </label>' +
                                                    '<input class="form-control" name="name_' + newNum +'[]" type="text">' +
                                                '</div> ' +
                                                '<div class="form-group">' +
                                                    '<label for="concentration' + newNum +'">Notes: </label>' +
                                                    '<input class="form-control" name="concentration_' + newNum +'[]" type="text">' +
                                                '</div><div><a class="delete">Delete</a> | <a class="updated">Update</a></div>' +
                                            '</div> ' +
                                            '<div id="add-del-buttonsz">' +
                                                '<input type="button" id="btnAddzz" value="[ + ]" onclick="Gas(' + newNum + ')">' +
                                                '<input type="button" id="btnDelz" value="[ - ]">' +
                                            '</div>' +
                                        '</div> ' +
                                    '</div>' +
                                '</div> ' +
                            '</div> ' +
                        '</div>'+

                        '<div class="Base_Impurity" id="right">' +
                            '<div class="panel-group">' +
                                '<div class="panel panel-default">' +
                                    '<div class="panel-heading">' +
                                        '<h4 class="panel-title">' +
                                            '<a data-toggle="collapse" href="#collapseImpurities_' + newNum +'">Impurities</a>' +
                                        '</h4>' +
                                    '</div>' +
                                    '<div id="collapseImpurities_' + newNum +'" class="panel-collapse collapse">' +
                                        '<div class="panel-body">' +
                                            '<div id="impurity' + newNum +'" class="ClonedImpurity">' +
                                                '<div class="form-group">' +
                                                    '<label for="name' + newNum +'">Name: </label>' +
                                                    '<input class="form-control" name="impurity_name_' + newNum +'[]" type="text">' +
                                                '</div>' +
                                                '<div class="form-group">' +
                                                    '<label for="percent' + newNum +'">Notes: </label>' +
                                                    '<input class="form-control" name="impurity_percent_' + newNum +'[]" type="text">' +

                                                '</div><div><a class="delete">Delete</a> | <a class="updated">Update</a></div>' +
                                            '</div>' +
                                            '<div id="add-del-buttonsz">' +
                                                '<input type="button" id="btnAddImpurity" value="[ + ]" onclick="Impurity(' + newNum +')">' +
                                                '<input type="button" id="btnDelImpurity" value="[ - ]">' +
                                            '</div>'+
                                        '</div>' +
                                    '</div>' +
                                '</div>' +
                            '</div> ' +
                        '</div>'+

                    '</div>'+
                '</div>' +
                '</div>' +
                '</div>');
        // insert the new element after the last "duplicatable" input field
        $('#instrument' + num).after(newElem);

        // enable the "remove" button
        $('#btnDel').attr('disabled', false);

    });

    $('#btnDel').click(function () {
        // confirmation
        if (confirm("Are you sure you wish to remove this section of the form? Any information it contains will be lost!")) {
            var num = $('.clonedInput').length;
            // how many "duplicatable" input fields we currently have
            $('#instrument' + num).slideUp('slow', function () {
                $(this).remove();
                // if only one element remains, disable the "remove" button
                if (num - 1 === 1) $('#btnDel').attr('disabled', true);
                // enable the "add" button
                $('#btnAdd').attr('disabled', false).prop('value', "[ + ] add to this form");
            });
        }
        return false;
        // remove the last element

        // enable the "add" button
        $('#btnAdd').attr('disabled', false);
    });

    $('#btnDel').attr('disabled', true);
});



