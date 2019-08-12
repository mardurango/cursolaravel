$(document).ready(function (){
    //cerrar las alertas automaticamente
    $('.alert[data-dismiss]').each(function(index, element){
        const $element = $(element),
        timeout = $element.data('auto-dismiss') || 5000;
        setTimeout(function () {
            $element.alert('close');
        }, timeout);
    });
    //tolltips
    $('body').tooltip({
        trigger: 'hover',
        selector: 'tooltipsC',
        placement: 'top',
        html: true,
        container: 'body'
    });
    
});