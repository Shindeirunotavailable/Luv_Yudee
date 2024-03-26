function reply(caller){
    console.log('thissssss');
    $('.replydiv').insertAfter($(caller));
    $('.replydiv').show();
    $('.d-none').removeClass();
}
