function updateMastheadCartQty(newQty) {
    if (newQty > 0)
        $('bagitems').innerHTML = '<span class="topmenu" id="bagitems">(' + newQty + ' item' + (newQty != 1 ? 's' : '') + ')</span>';
    else
        $('bagitems').innerHTML = '<span id="bagitems" class="topmenu">(0 items)</span>';
}
