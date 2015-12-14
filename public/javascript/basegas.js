
$(function () {
    $('#btnAddz').click(function () {
        var num = $('.clonedInputz').length, // how many "duplicatable" input fields we currently have
            newNum = new Number(num + 1), // the numeric ID of the new input field being added
            newElem = $('#testingDivz' + num).clone().attr('id', 'testingDivz' + newNum).fadeIn('slow'); // create the new element via clone(), and manipulate it's ID using newNum value

        // insert the new element after the last "duplicatable" input field
        $('#testingDivz' + num).after(newElem);

        // enable the "remove" button
        $('#btnDelz').attr('disabled', false);

        // right now you can only add 5 sections. change '5' below to the max number of times the form can be duplicated
        if (newNum == 5) $('#btnAddz').attr('disabled', true).prop('value', "You've reached the limit");
    });

    $('#btnDelz').click(function () {
        // confirmation
        if (confirm("Are you sure you wish to remove this section of the form? Any information it contains will be lost!")) {
            var num = $('.clonedInputz').length;
            // how many "duplicatable" input fields we currently have
            $('#testingDivz' + num).slideUp('slow', function () {
                $(this).remove();
                // if only one element remains, disable the "remove" button
                if (num - 1 === 1) $('#btnDelz').attr('disabled', true);
                // enable the "add" button
                $('#btnAddz').attr('disabled', false).prop('value', "[ + ] add to this form");
            });
        }
        return false;
        // remove the last element

        // enable the "add" button
        $('#btnAddz').attr('disabled', false);
    });

    $('#btnDelz').attr('disabled', true);
});