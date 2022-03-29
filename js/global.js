(function ($) {
    const $popupBtn = $('.popup-button');
    const $popup = $('.popup');
    const $closePopupBtn = $('.close-popup');

    $popupBtn.on('click', function() {
        $popup.fadeIn();
    })

    $closePopupBtn.on('click', function() {
        $popup.fadeOut();
    })

    customSelect2($('select'));

    $(window).on('resize', function(e) {});

    $(window).on('scroll', function () {});

    $(window).on('load', function () {});

    //Custom select (select 2 js)
    function customSelect2($el) {
        $el.each(function(){
            if( !$(this).hasClass('loaded-select2-js') ) {
                //Check if custom select is already created for this select
                $(this).addClass('loaded-select2-js');

                let selectClassList = $(this).data('class');
                let holderID;

                if( $(this).attr('id') ) {
                    holderID = $(this).attr('id');
                } else {
                    holderID =  $(this).attr('name');
                }

                holderID = holderID.concat('_holder')


                $(this).wrap('<div class="select_2_holder" id="'+holderID+'"></div>');

                let selectHolder = $('#' + holderID);

                let args = {
                    dropdownParent: selectHolder,
                    width: '100%',
                    minimumResultsForSearch: -1,
                };

                //if select is part of hubspot form add placeholder
                if( $(this).hasClass('hs-input') ) {
                    args['placeholder'] = 'Select...';
                }

                $(this).select2(args);

                selectHolder.addClass(selectClassList);
            }
        });
    }
    //Custom select (select 2 js) END
}(jQuery));