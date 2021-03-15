const Swal = require('sweetalert2');
$(document).ready(function () {

    let formId = '';
    let formAction = '';
    let formMethod = '';
    let $formOutput = $('#dataID');


//Get submit event
    $('#formId').submit(function (event) {
        event.preventDefault();

        formId = $(this).attr('id');
        formAction = $(this).attr('action');
        formMethod = $(this).attr('method');
        /*loading function will add some animation on data submitting in the form*/
        loading(true);
        clearFormErrors();

//ajax Call
        $.ajax({
            url: formAction,
            type: formMethod,
            data: $(this).serialize(),
            dataType: 'JSON',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {
                if (data.success == false) {
                    showFormErrors(formId,data.errors);
                } else {

                    document.getElementById(formId).reset();
                    $('.modal').modal('hide');
                    $formOutput.append(data.html);

                    Swal.fire(
                        'Success',
                        data.message,
                        'success'
                    )
                }
                loading(false);

            },
            error: function (err) {
                loading(false);
                Swal.fire(
                    'Alert',
                    err.message,
                    'errors'
                )

            }
        });
    });


//add some animation on data submitting
function loading(state) {

    switch (state) {
        case true:
            $('#submitBtn').hide();
            $('#processingBtn').show();
            break;
        case false:
            $('#submitBtn').show();
            $('#processingBtn').hide();
            break;
        default:
        //every thing is okay
    }
}
    function showFormErrors(formId,errors)
    {
        $.each($('#'+formId).serializeArray(),function(i,fields)
        {
            let input=$('input[name=' +fields.name+']');
            let fieldName=input.attr('name');
            if(errors[fieldName]!==undefined)
            {
                input.after('<span class="text-danger form-error">' + errors[fieldName]+ '</span>');
            }
        });
    }
function clearFormErrors()
{
    $('.form-error').remove();
}

});
