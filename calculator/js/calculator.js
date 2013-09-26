function calculator() {
    var a = $('#a').val(); // num A
    var b = $('#b').val(); // num B
    var act = $("input:radio:checked").attr('id'); // Action
    if(a === '' || b === '') {
        alert('a & b is empty');
    } else if(/^[A-Za-z\)\(\[\]\{\}\$\#\,\.]{1,255}$/.test(a) || /^[A-Za-z\)\(\[\]\{\}\$\#\,\.]{1,255}$/.test(b)) {
        $('#a').val('');
        $('#b').val('');
        alert('not correct');
    } else if(!act) {
        alert('no action');
    }else {
        a = parseFloat(a);
        b = parseFloat(b);
        switch(act) {
            case 'plus':
                var result = a + b;
                break;
            case 'multiply':
                var result = a * b;
                break;
            case 'divide':
                var result = a / b;
                break;
            case 'minus':
                var result = a - b;
                break;
        }
        $('.result_block h2').html(result);
    }    
}