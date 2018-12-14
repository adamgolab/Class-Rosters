function switchVisible() {
    if (document.getElementById('twoG').style.display == 'none') {
        document.getElementById('twoG').style.display = 'inline-block';
        document.getElementById('threeG').style.display = 'none';
    }
    else {
        document.getElementById('twoG').style.display = 'none';
        document.getElementById('threeG').style.display = 'inline-block';
    }
}

function twoGroupRotate() {
    var t1 = document.getElementById("t1").innerHTML;
    var t2 = document.getElementById("t2").innerHTML;
    var t3 = document.getElementById("t3").innerHTML;
    var t4 = document.getElementById("t4").innerHTML;
    var t5 = document.getElementById("t5").innerHTML;
    var t6 = document.getElementById("t6").innerHTML;
    var t7 = document.getElementById("t7").innerHTML;
    var t8 = document.getElementById("t8").innerHTML;
    var t9 = document.getElementById("t9").innerHTML;
    var t10 = document.getElementById("t10").innerHTML;
    var t11 = document.getElementById("t11").innerHTML;
    var t12 = document.getElementById("t12").innerHTML;
    var check13 = document.getElementById("t13")
    if(check13 != null)
        var t13 = document.getElementById("t13").innerHTML

    document.getElementById("t1").innerHTML = document.getElementById("r1").innerHTML;
    document.getElementById("t2").innerHTML = document.getElementById("r2").innerHTML;
    document.getElementById("t3").innerHTML = document.getElementById("r3").innerHTML;
    document.getElementById("t4").innerHTML = document.getElementById("r4").innerHTML;
    document.getElementById("t5").innerHTML = document.getElementById("r5").innerHTML;
    document.getElementById("t6").innerHTML = document.getElementById("r6").innerHTML;
    document.getElementById("t7").innerHTML = document.getElementById("r7").innerHTML;
    document.getElementById("t8").innerHTML = document.getElementById("r8").innerHTML;
    document.getElementById("t9").innerHTML = document.getElementById("r9").innerHTML;
    document.getElementById("t10").innerHTML = document.getElementById("r10").innerHTML;
    document.getElementById("t11").innerHTML = document.getElementById("r11").innerHTML;
    document.getElementById("t12").innerHTML = document.getElementById("r12").innerHTML;
    if(check13 != null)
        document.getElementById("t13").innerHTML = document.getElementById("r13").innerHTML;

    document.getElementById("r1").innerHTML = t1;
    document.getElementById("r2").innerHTML = t2;
    document.getElementById("r3").innerHTML = t3;
    document.getElementById("r4").innerHTML = t4;
    document.getElementById("r5").innerHTML = t5;
    document.getElementById("r6").innerHTML = t6;
    document.getElementById("r7").innerHTML = t7;
    document.getElementById("r8").innerHTML = t8;
    document.getElementById("r9").innerHTML = t9;
    document.getElementById("r10").innerHTML = t10;
    document.getElementById("r11").innerHTML = t11;
    document.getElementById("r12").innerHTML = t12;
    if(check13 != null)
        document.getElementById("r13").innerHTML = t13;

    $("#names td").css("font-weight","normal");
    $("#names td").css('color', 'black');
    $("#names td:contains('*')").css("font-weight","Bold");
    $("#names td:contains('*')").css("color", "green");
}

function threeGroupRotate() {
    var r1 = document.getElementById("r1").innerHTML;
    var r2 = document.getElementById("r2").innerHTML;
    var r3 = document.getElementById("r3").innerHTML;
    var r4 = document.getElementById("r4").innerHTML;
    var r5 = document.getElementById("r5").innerHTML;
    var r6 = document.getElementById("r6").innerHTML;
    var r7 = document.getElementById("r7").innerHTML;
    var r8 = document.getElementById("r8").innerHTML;
    var r9 = document.getElementById("r9").innerHTML;
    var r10 = document.getElementById("r10").innerHTML;
    var r11 = document.getElementById("r11").innerHTML;
    var r12 = document.getElementById("r12").innerHTML;
    var check13 = document.getElementById("r13")
    if(check13 != null)
        var r13 = document.getElementById("r13").innerHTML

    document.getElementById("r1").innerHTML = document.getElementById("t1").innerHTML;
    document.getElementById("r2").innerHTML = document.getElementById("t2").innerHTML;
    document.getElementById("r3").innerHTML = document.getElementById("t3").innerHTML;
    document.getElementById("r4").innerHTML = document.getElementById("t4").innerHTML;
    document.getElementById("r5").innerHTML = document.getElementById("t5").innerHTML;
    document.getElementById("r6").innerHTML = document.getElementById("t6").innerHTML;
    document.getElementById("r7").innerHTML = document.getElementById("t7").innerHTML; 
    document.getElementById("r8").innerHTML = document.getElementById("t8").innerHTML;
    document.getElementById("r9").innerHTML = document.getElementById("t9").innerHTML;
    document.getElementById("r10").innerHTML = document.getElementById("t10").innerHTML; 
    document.getElementById("r11").innerHTML = document.getElementById("t11").innerHTML;
    document.getElementById("r12").innerHTML = document.getElementById("t12").innerHTML;
    if(check13 != null)
        document.getElementById("r13").innerHTML = document.getElementById("t13").innerHTML;

    document.getElementById("t1").innerHTML = document.getElementById("f1").innerHTML;
    document.getElementById("t2").innerHTML = document.getElementById("f2").innerHTML;
    document.getElementById("t3").innerHTML = document.getElementById("f3").innerHTML;
    document.getElementById("t4").innerHTML = document.getElementById("f4").innerHTML;
    document.getElementById("t5").innerHTML = document.getElementById("f5").innerHTML;
    document.getElementById("t6").innerHTML = document.getElementById("f6").innerHTML;
    document.getElementById("t7").innerHTML = document.getElementById("f7").innerHTML;
    document.getElementById("t8").innerHTML = document.getElementById("f8").innerHTML;
    document.getElementById("t9").innerHTML = document.getElementById("f9").innerHTML;
    document.getElementById("t10").innerHTML = document.getElementById("f10").innerHTML;
    document.getElementById("t11").innerHTML = document.getElementById("f11").innerHTML;
    document.getElementById("t12").innerHTML = document.getElementById("f12").innerHTML;
    if(check13 != null)
        document.getElementById("t13").innerHTML = document.getElementById("f13").innerHTML;

    document.getElementById("f1").innerHTML = r1;
    document.getElementById("f2").innerHTML = r2;
    document.getElementById("f3").innerHTML = r3;
    document.getElementById("f4").innerHTML = r4;
    document.getElementById("f5").innerHTML = r5;
    document.getElementById("f6").innerHTML = r6;
    document.getElementById("f7").innerHTML = r7;
    document.getElementById("f8").innerHTML = r8;
    document.getElementById("f9").innerHTML = r9;
    document.getElementById("f10").innerHTML = r10;
    document.getElementById("f11").innerHTML = r11;
    document.getElementById("f12").innerHTML = r12;
    if(check13 != null)
        document.getElementById("f13").innerHTML = r13;

    $("#names td").css("font-weight","normal");
    $("#names td").css('color', 'black');
    $("#names td:contains('*')").css("font-weight","Bold");
    $("#names td:contains('*')").css("color", "green");
    $("#names td").css('width', '10%');
}