$('#Search').change(function() {
    /*
        0 == None
        1 == User
        2 == Customer
        3 == Instrument
        4 == Attachment
        5 == Base gas & Concentration
        6 == Impurities
     */
    if($(this).val() == 0) {
        $('#userSearch').hide();
        $('#userCustomer').hide();
        $('#userInstrument').hide();
        $('#userAttachment').hide();
        $('#userBaseGas').hide();
        $('#userImpurities').hide();
    }
    if($(this).val() == 1) {
        $('#userSearch').css("display", "-webkit-inline-box");
        $('#userCustomer').hide();
        $('#userInstrument').hide();
        $('#userAttachment').hide();
        $('#userBaseGas').hide();
        $('#userImpurities').hide();
    }
    if($(this).val() == 2) {
        $('#userSearch').hide();
        $('#userCustomer').css("display", "-webkit-inline-box");
        $('#userInstrument').hide();
        $('#userAttachment').hide();
        $('#userBaseGas').hide();
        $('#userImpurities').hide();
    }
    if($(this).val() == 3) {
        $('#userSearch').hide();
        $('#userCustomer').hide();
        $('#userInstrument').css("display", "-webkit-inline-box");
        $('#userAttachment').hide();
        $('#userBaseGas').hide();
        $('#userImpurities').hide();
    }
    if($(this).val() == 4) {
        $('#userSearch').hide();
        $('#userCustomer').hide();
        $('#userInstrument').hide();
        $('#userAttachment').css("display", "-webkit-inline-box");
        $('#userBaseGas').hide();
        $('#userImpurities').hide();
    }
    if($(this).val() == 5) {
        $('#userSearch').hide();
        $('#userCustomer').hide();
        $('#userInstrument').hide();
        $('#userAttachment').hide();
        $('#userBaseGas').css("display", "-webkit-inline-box");
        $('#userImpurities').hide();
    }
    if($(this).val() == 6) {
        $('#userSearch').hide();
        $('#userCustomer').hide();
        $('#userInstrument').hide();
        $('#userAttachment').hide();
        $('#userBaseGas').hide();
        $('#userImpurities').css("display", "-webkit-inline-box");
    }
});