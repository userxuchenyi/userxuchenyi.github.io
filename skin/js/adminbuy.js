var _0x5245 = ["width", ".sub-header .banner", "height", "scrollTop", "show", "#backtop", "hide", "scroll", "animate", "html,body", "click", "#backtop a", "ul", "children", "hover", ".header .nav .menu ul > li", "current", "addClass", "a", "removeClass", "find", "end", ".sub-header .sub-nav .menu ul > li", "#nav .inner", "appendTo", "clone", ".header .nav .menu", "slideToggle", "#nav", ".header .nav-btn", "body", "resize", "mouseover", "#comment li", ".qrcode-img", ".footer .pageslist ul li.qrcode", "fadeToggle", "siblings", ".footer .pageslist ul li.qrcode a", "val", "#logsearch .input-search", "", "请输入搜索词再搜索！", "#logsearch .btn-round"];

function custom() {
    $_scale = 4 / 1;
    $_bannerWidth = $(_0x5245[1])[_0x5245[0]]();
    $(_0x5245[1])[_0x5245[2]]($_bannerWidth / $_scale)
}
$(function() {
    $(window)[_0x5245[7]](function() {
        if ($(window)[_0x5245[3]]() > 200) {
            $(_0x5245[5])[_0x5245[4]]()
        } else {
            $(_0x5245[5])[_0x5245[6]]()
        }
    });
    $(_0x5245[11])[_0x5245[10]](function() {
        $(_0x5245[9])[_0x5245[8]]({
            scrollTop: 0
        }, 200)
    });
    $(_0x5245[15])[_0x5245[14]](function() {
        $(this)[_0x5245[13]](_0x5245[12])[_0x5245[4]]()
    }, function() {
        $(this)[_0x5245[13]](_0x5245[12])[_0x5245[6]]()
    });
    $(_0x5245[22])[_0x5245[14]](function() {
        $(this)[_0x5245[13]](_0x5245[18])[_0x5245[17]](_0x5245[16]);
        $(this)[_0x5245[13]](_0x5245[12])[_0x5245[4]]()
    }, function() {
        $(this)[_0x5245[20]](_0x5245[12])[_0x5245[6]]()[_0x5245[21]]()[_0x5245[20]](_0x5245[18])[_0x5245[19]](_0x5245[16])
    });
    $(_0x5245[26])[_0x5245[25]](false)[_0x5245[24]](_0x5245[23]);
    $(_0x5245[29])[_0x5245[10]](function() {
        $(_0x5245[28])[_0x5245[27]](20)
    });
    custom();
    $(window)[_0x5245[31]](function() {
        $_body = $(_0x5245[30])[_0x5245[0]]();
        if ($_body > 768) {
            $(_0x5245[28])[_0x5245[6]]()
        };
        custom()
    });
    $(_0x5245[33])[_0x5245[14]](function() {
        $(this)[_0x5245[17]](_0x5245[32])
    }, function() {
        $(this)[_0x5245[19]](_0x5245[32])
    });
    $(_0x5245[35])[_0x5245[14]](function() {
        $(this)[_0x5245[20]](_0x5245[34])[_0x5245[4]]()
    }, function() {
        $(this)[_0x5245[20]](_0x5245[34])[_0x5245[6]]()
    });
    $(_0x5245[38])[_0x5245[10]](function() {
        $(this)[_0x5245[37]](_0x5245[34])[_0x5245[36]](100)
    });
    $(_0x5245[43])[_0x5245[10]](function() {
        var _0x82b2x2 = $(_0x5245[40])[_0x5245[39]]();
        if (_0x82b2x2 == _0x5245[41]) {
            alert(_0x5245[42]);
            return false
        }
    })
});