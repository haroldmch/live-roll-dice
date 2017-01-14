$(function(){
    if(update){
        $.load();
        setInterval('$.load()',1000);
    }
});

$('.lanzar').on('click',function(e){
    e.preventDefault();
    
    var id = $(this).prop('id');
    var value = id.slice(1);
    var mul = $('#mul-'+id).val(); 
    var sum = $('#sum-'+id).val(); 
    var num_array = new Array();
    var string = '';
    var total = parseInt(sum);
    
    for(var i = 0; i < mul; i++){
        num_array[i] = Math.floor((Math.random() * value)+1);
        string += '<img src="'+img+id+'-'+num_array[i]+'.png"> ';
        total += num_array[i];
    }

    $.ajax({
        async:true, 
        type: "POST",
        dataType: "html",
        contentType: "application/x-www-form-urlencoded", 
        url:base+"home/insert",
        data:{
            dado: id,
            nombre: nombre,
            images: string,
            multiplicador: mul,
            suma: sum,
            total: total
        },  
        success:function(data){

        },
        timeout:4000,
    });
    
    /*console.log(
        nombre+",",
        "lanzo",
        mul+id+' ('+num_array+')',
        "+ "+sum,
        "= "+total
    );*/
    
});
$('.roll').focusout(function(input){
    var val = $(this).val();
    if(val <= 0 || val == ''){
        $(this).val(1);
    }
});
$('.sum').focusout(function(input){
    var val = $(this).val();
    if(val < 0 || val == ''){
        $(this).val(0);
    }
});
$('#clear').on('click',function(e){
    $.ajax({
        async:true, 
        type: "POST",
        dataType: "html",
        contentType: "application/x-www-form-urlencoded", 
        url:base+"home/clearHistorical",
        data:{
            data: true,
        },  
        success:function(data){
            console.log("El Historial ha sido limpiado");
        },
        timeout:4000,
    });
});
$.load = function(){
    $.ajax({
        async:true, 
        type: "POST",
        dataType: "html",
        contentType: "application/x-www-form-urlencoded", 
        url:base+"home/load",
        data:{
            data: true,
        },  
        success:function(data){
            //console.log(data);
            var obj = JSON.parse(data);
            var html = '';

            for(var i=0;i<obj.length;i++){
                html += '<div>';
                    html += '<strong>'+obj[i].nombre+'</strong> lanzó '+obj[i].images+' + '+obj[i].suma+' = <span class="total">'+obj[i].total+'</span> ';
                    html += '<span>'+$.convertDate(obj[i].fecha)+' '+$.fullConvertDate(obj[i].fecha)+'</span>';
                html += '</div>';
            }
            $('#historial').html(html);
        },
        timeout:4000,
    });
}

$.convertDate = function(date){
    var y = date.slice(0,4);
    var m = date.slice(5,7);
    var d = date.slice(8,10);
    return(d+"/"+m+"/"+y);
}
$.fullConvertDate = function(date){
    date = date.slice(11,13)+':'+date.slice(14,16);
    
    time = date.toString ().match (/^([01]\d|2[0-3])(:)([0-5]\d)(:[0-5]\d)?$/) || [date];

    if (time.length > 1) {
        time = time.slice (1);
        time[5] = +time[0] < 12 ? ' am' : ' pm';
        time[0] = +time[0] % 12 || 12;
    }
    
    return time.join ('');
}