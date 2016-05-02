$(document).ready(function () {
  $("form").submit(function (e) {

    var ref = $(this).find("[error]");

    $(ref).each(function () {
      if ( $(this).val() === '' )
      {
          $('#error-message').show();
          $('#error-message').fadeOut(5000);

          $(this).focus();

          e.preventDefault();
          return false;
      }
    });
    return true;
  });
});
