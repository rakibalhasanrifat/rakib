function initMenueffect() {
    "use strict";
jQuery(".sliding-menu a ").mousemove(function (e) {
        jQuery(this).shuffleLetters({});
});
}

jQuery(function () {
   initMenueffect()
});