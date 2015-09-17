
$(function () {
    $('#btnAdd').click(function () {
        var num = $('.clonedInput').length, // how many "duplicatable" input fields we currently have
            newNum = new Number(num + 1), // the numeric ID of the new input field being added
            newElem = $('#testingDiv' + num).clone().attr('id', 'testingDiv' + newNum).fadeIn('slow'); // create the new element via clone(), and manipulate it's ID using newNum value
        // manipulate the name/id values of the input inside the new element



        // insert the new element after the last "duplicatable" input field
        $('#testingDiv' + num).after(newElem);

        // enable the "remove" button
        $('#btnDel').attr('disabled', false);

        // right now you can only add 5 sections. change '5' below to the max number of times the form can be duplicated
        if (newNum == 5) $('#btnAdd').attr('disabled', true).prop('value', "You've reached the limit");
    });

    $('#btnDel').click(function () {
        // confirmation
        if (confirm("Are you sure you wish to remove this section of the form? Any information it contains will be lost!")) {
            var num = $('.clonedInput').length;
            // how many "duplicatable" input fields we currently have
            $('#testingDiv' + num).slideUp('slow', function () {
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