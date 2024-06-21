jQuery(document).ready(function($){
  $(".eos-dp-save-eos_dp_soitb_" + fdp_oxygen.page).on("click", function () {
    $('.eos-dp-opts-msg').addClass('eos-hidden');
    var chk,str = '';
    $('.eos-dp-oxygen').each(function(){
      chk = $(this);
      str += !chk.is(':checked') ? ',' + $(this).attr('data-path') : ',';
    });
    eos_dp_send_ajax($(this),{
      "nonce" : $("#eos_dp_oxygen_" + fdp_oxygen.page + "_setts").val(),
      "eos_dp_oxygen_data" : str,
      "page" : fdp_oxygen.page,
      "action" : 'eos_dp_save_oxygen_' + fdp_oxygen.page + '_settings'
    });
    return false;
  });
});
