(function ($) {
  const $popupBtn = $(".popup-button");
  const $popup = $(".popup");
  const $closePopupBtn = $(".close-popup");

  $popupBtn.on("click", function () {
    $popup.fadeIn();
  });

  $closePopupBtn.on("click", function () {
    $popup.fadeOut();
  });

  customSelect2($("select"));

  $(window).on("resize", function (e) {});

  $(window).on("scroll", function () {});

  $(window).on("load", function () {});

  //Custom select (select 2 js)
  function customSelect2($el) {
    $el.each(function () {
      if (!$(this).hasClass("loaded-select2-js")) {
        //Check if custom select is already created for this select
        $(this).addClass("loaded-select2-js");

        let selectClassList = $(this).data("class");
        let holderID;

        if ($(this).attr("id")) {
          holderID = $(this).attr("id");
        } else {
          holderID = $(this).attr("name");
        }

        holderID = holderID.concat("_holder");

        $(this).wrap(
          '<div class="select_2_holder" id="' + holderID + '"></div>'
        );

        let selectHolder = $("#" + holderID);

        let args = {
          dropdownParent: selectHolder,
          width: "100%",
          minimumResultsForSearch: -1,
        };

        //if select is part of hubspot form add placeholder
        if ($(this).hasClass("hs-input")) {
          args["placeholder"] = "Select...";
        }

        $(this).select2(args);

        selectHolder.addClass(selectClassList);
      }
    });
  }
  //Custom select (select 2 js) END

  var $form = $("#mc-embedded-subscribe-form");

  if ($form.length > 0) {
    $("#mc-embedded-subscribe").bind("click", function (event) {
      if (event) event.preventDefault();
      register($form);
    });
  }

  function register($form) {
    $.ajax({
      type: $form.attr("method"),
      url: $form.attr("action"),
      data: $form.serialize(),
      cache: false,
      dataType: "json",
      contentType: "application/json; charset=utf-8",
      error: function (err) {
        console.log("ERROR");
        console.log(err);
        alert(
          "Could not connect to the registration server. Please try again later."
        );
      },
      success: function (data) {
        console.log("SUCCESS");

        if (data.result != "success") {
          console.log(data);
          $("#mce-success-response").html(data.msg).addClass("init");
        } else {
          // success
          $("#mce-success-response")
            .text("Thank you for subscribing!")
            .addClass("init");
        }
      },
    });
  }
  /** MAILCHIMP SIGNUP FORM END **/

  var $formPopup = $("#mc-embedded-subscribe-form-popup");

  if ($formPopup.length > 0) {
    $("#mc-embedded-subscribe-popup").bind("click", function (event) {
      if (event) event.preventDefault();
      registerFormPopup($formPopup);
    });
  }

  function registerFormPopup($formPopup) {
    $.ajax({
      type: $formPopup.attr("method"),
      url: $formPopup.attr("action"),
      data: $formPopup.serialize(),
      cache: false,
      dataType: "json",
      contentType: "application/json; charset=utf-8",
      error: function (err) {
        console.log("ERROR");
        console.log(err);
        alert(
          "Could not connect to the registration server. Please try again later."
        );
      },
      success: function (data) {
        console.log("SUCCESS");

        if (data.result != "success") {
          console.log(data);
          $("#mce-success-response-popup").html(data.msg).addClass("init");
        } else {
          // success
          $("#mce-success-response-popup")
            .text("Thank you for subscribing!")
            .addClass("init");
        }
      },
    });
  }
  /** MAILCHIMP SIGNUP FORM END **/
})(jQuery);
