var $ =jQuery.noConflict();
$(document).ready(function() {
  get_mc_lists();
  get_cc_lists();
});
/*MailChimp Get List ID*/
$( "#wps_wcnc_mailchimp_key" ).keyup(function() {
    get_mc_lists();

});
function get_mc_lists(){
  if(!$( "#wps_wcnc_mailchimp_key" ).val())
    return;
  var data = {
    'action': 'wps_wcnc_get_mc_list',
    'dataType': "html",
    'api_key': $( "#wps_wcnc_mailchimp_key" ).val(),
  };
  $("#wps_wcnc_mailchimp_list_id").html('');
  $('.wpcWcncloaderDiv').show();
  jQuery.post(ajaxurl, data, function(response) {
      $("#wps_wcnc_mailchimp_list_id").html(response);
      $('.wpcWcncloaderDiv').hide();
  });
}
/*ConstantContact Get List ID*/
$( "#wps_wcnc_constantcontact_key" ).keyup(function() {
    get_cc_lists();
});
$( "#wps_wcnc_constantcontact_token" ).keyup(function() {
    get_cc_lists();
});
function get_cc_lists(){
  if(!$( "#wps_wcnc_constantcontact_key" ).val())
    return;
  if(!$( "#wps_wcnc_constantcontact_token" ).val())
    return;
  var data = {
    'action': 'wps_wcnc_get_cc_list',
    'dataType': "html",
    'api_key': $( "#wps_wcnc_constantcontact_key" ).val(),
    'access_token': $( "#wps_wcnc_constantcontact_token" ).val()
  };
  $("#wps_wcnc_constantcontact_list_id").html('');
  $('.wpcWcncloaderDiv').show();
  jQuery.post(ajaxurl, data, function(response) {
      $("#wps_wcnc_constantcontact_list_id").html(response);
      $('.wpcWcncloaderDiv').hide();
  });
}




