document.getElementById('top_header_1_textbox_style_int').onclick = function () {;   
document.getElementById('top_header_1_textbox_style_int').focus();
var mc = document.getElementById('top_header_1_textbox_style_int');
if (mc.is(':focus')) {
    (document.getElementById('top_header_1_textbox').style.border = '2px solid cyan');
}
else{
    (document.getElementById('top_header_1_textbox').style.border = '2px solid transparent');
}
}

function naver(){   
    if (document.getElementById('mainhamb').style.display != 'flex') {
        document.getElementById('mainhamb').style.display = 'flex';
    }
    else{
        document.getElementById('mainhamb').style.display = 'none';
    }
}