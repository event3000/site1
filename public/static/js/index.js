jQuery(document).ready(function () {
    'use strict';

    document.getElementById('reg_modal').addEventListener('click', openRegModal);
    function openRegModal() {
        jQuery("#authModal").modal('hide');
        setTimeout(function () {
            jQuery("#regModal").modal('show');
        }, 500);
    }

    document.getElementById('auth_modal').addEventListener('click', openAuthModal);
    function openAuthModal() {
        jQuery("#regModal").modal('hide');
        setTimeout(function () {
            jQuery("#authModal").modal('show');
        }, 500);
    }
});

