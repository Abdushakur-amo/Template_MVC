// Start function Ajax_All
function Ajax_All(name, data, url=false){
    $.ajax({
        url: url,
        method: 'POST',
        data: { 'name': name,'data':  data },
        dataType: "html",
        beforeSend: function(){
            // Loader O
            $('.body-load').addClass('body-load-none');

        },
        success: function(result){
            // Loader O
        	$('.body-load').removeClass('body-load-none');
            console.log(result);
            json = jQuery.parseJSON(result);
            // Ҳаммаи функсияҳо дар дохили худди файлҳоянд
            if(json.message) swal({ title: json.title, text: json.message, icon: json.icon, buttons: json.button, });
            else if(json.url){ window.location.href = json.url; }
            else console.log('Error: file ajax.js name not faud!');
        } //success
    }); //$.ajax
}// End function Ajax_All
















