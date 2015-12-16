function Gas(instrument){


    var newElem = $('#gas' + instrument).clone().attr('id', 'gas' + instrument).fadeIn('slow');

    newElem.html(
        '<div class="form-group"> ' +
        '<label for="name_' + instrument +'">Name: </label> ' +
        '<input class="form-control" name="name_' + instrument +'[]" type="text"> ' +
        '</div> ' +
        '<div class="form-group"> ' +
        '<label for="concentration_' + instrument +'">Concentration: </label> ' +
        '<input class="form-control" name="concentration_' + instrument +'[]" type="text"> ' +
        '</div> '
    );
    $('#gas' + instrument).after(newElem);
}


$(function () {
    $('#btnAdd').click(function () {
        var num = $('.clonedInstrument').length,
            newNum = new Number(num + 1),
            newElem = $('#instrument' + num).clone().attr('id', 'instrument' + newNum).fadeIn('slow'); // create the new element via clone(), and manipulate it's ID using newNum value

            newElem.html(

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
                '</div> ' +
                '<hr> Base Gases<hr> ' +
                '<div id="gas'+ newNum +'"> ' +
                    '<div class="form-group"> ' +
                        '<label for="name">Name: </label> ' +
                        '<input class="form-control" name="name_' + newNum +'[]" type="text"> ' +
                    '</div> ' +
                    '<div class="form-group"> ' +
                        '<label for="concentration">Concentration: </label> ' +
                        '<input class="form-control" name="concentration_' + newNum +'[]" type="text"> ' +
                    '</div> ' +
                '</div> ' +
                '<div id="add-del-buttonsz"> ' +
                    '<input type="button" id="btnAddz_' + newNum + '" value="[ + ] add to this form"  onclick="Gas(' + newNum + ')"> ' +
                    '<input type="button" id="btnDelz" value="[ - ] remove the section above" disabled="disabled"> ' +
                '</div> ');
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



