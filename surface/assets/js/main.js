$( document ).ready(function() {
    $('.clients').select2();


    $(".clients").change(function () {
        if( $('.clients').val() == 'null'){
            $('.submitBtn').attr('disabled', true);
        } else{
            $('.submitBtn').attr('disabled', false);
        }
    });
});

function test() {

    document.getElementById("c1").selectedIndex = "0";
    document.getElementById("c2").selectedIndex = "0";
    document.getElementById("c3").selectedIndex = "0";

    if (document.getElementById('catg').value == 'Battante') {
        document.getElementById('c1').style.display = 'block';
    } else {
        document.getElementById('c1').style.display = 'none';
    }
     if (document.getElementById('catg').value == 'Coulissante') {
        document.getElementById('c2').style.display = 'block';
    } else {
        document.getElementById('c2').style.display = 'none';
    }
     if (document.getElementById('catg').value == 'Escamotable') {
        document.getElementById('c3').style.display = 'block';
    } else {
        document.getElementById('c3').style.display = 'none';
    }
}   