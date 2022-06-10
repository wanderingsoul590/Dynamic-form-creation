$(document).ready(function(){

    $('.addne').on('click', function(){
        
        if(this.innerHTML == 'select' || this.innerHTML == 'radio' || this.innerHTML == 'checkbox'){
            $('#titleform').text(this.innerHTML);
            $('.outerpopup').show();
            $('.options').show();
            $('#leboption').show();
        }else{
            $('.options').hide();
            $('#leboption').hide();
            $('#titleform').text(this.innerHTML);
            $('.outerpopup').show();
        }
    });

    $('#closepopup').on('click', function(){
        $('.outerpopup').hide();
    });

    $('#closepopuphtml').on('click', function(){
        $('.htmlform').hide();
    });

    $('#update').on('click', function(){
        $('.htmlform').hide();
        let update = $('#htmlform').val();
        $('#display').html(update);
    });

    $('#htmlcode').on('click', function(){
        $('.htmlform').show();
        $('#closepopuphtml').show();
    });


});



function senddata(){
    
    let option = $('#options').val();

    let info = {
        'type' : $('#titleform').text(),
        'label' : $('#label').val(),
        'id' : $('#id').val(),
        'name' : $('#Name').val(),
        'default' : $('#default').val(),
        'value' : $('#value').val(),
        'placeholder' : $('#placeholder').val(),
        'class' : $('#Class').val(),
        'options' : option,
        'default_select' : true,
        'default_value' : '',
        'wrapper' : true,
        'wrapper_class' : 'warpper',
        'required' : $('#required').is(":checked"), 
        'readonly' : $('#readonly').is(":checked"), 
    };
    
    var data = JSON.stringify(info);
    console.log(data);
    
    $.ajax({
        type: "POST",
        url: "submitdata.php",
        datatype: "json",
        data: data,
        success: function (data) {
            // data['data'] += $('#display').html();

            let form = "<form action='submitEvent.php' method='post'>" + $('#display').html() ;
            form +=data['data'];
            
            $('#display').html(form + "</form>");
            $('#htmlform').val(form + "</form>");
            $('.outerpopup').hide();
        }, error: function(ts) { alert(ts.responseText) }
    })

    $('#form').trigger("reset");
}

