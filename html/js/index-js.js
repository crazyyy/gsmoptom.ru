function korzina(o,a,l){kolvo=$("#tovar_col_"+a).val(),kolvo=parseInt(kolvo),kolvo=parseFloat(kolvo),isNaN(kolvo)&&(kolvo=0),"ravno"==l&&kolvo<="0"&&(kolvo="1"),"0"==kolvo?($("#tovar_res_"+a).find("#smena #vkor").hide(),$("#tovar_res_"+a).find("#smena #but").show(),$("#tovar_res_"+a).find("select").prop("disabled",!1)):($("#tovar_res_"+a).find("#smena #vkor").show(),$("#tovar_res_"+a).find("#smena #but").hide(),$("#tovar_res_"+a).find("select").prop("disabled",!0)),$.ajax({url:"/modul/catalog/option/ajax.php?task=addkorzina",data:"idcat="+o+"&id="+a+"&kolvo="+kolvo,success:function(o){var o=o.split("^"),a=o[0],t=o[1],n=(o[2],o[3],o[4]);"0"==a?$("#korzina_img").attr("src","/modul/catalog/img/korzina.png"):$("#korzina_img").attr("src","/modul/catalog/img/korzina2.png"),"ravno"==l&&(html_code="<div style='font:19px/18px arial;color:#3c3c3c;text-align:center;padding-top:15px;'>"+n+" - � �������!</div><div style='padding-top:20px;text-align:center;'><div><button onclick=\"dialog_close();\" style='background:#3c3c3c;color:#fff;padding-top:5px;padding-bottom:5px;padding-left:10px;padding-right:10px;'>����������</button> &nbsp;&nbsp;&nbsp;<a href=\"javascript:void(0);\" onclick=\"Get('//korzina/');\" style='padding-top:5px;padding-bottom:5px;padding-left:10px;padding-right:10px;'>������� � �������</a></div></div>",dialog({data:html_code,width:"550",top:"-50"})),$(".alltovar").html(a),$(".allcena").html(t)}})}function kolkorzina(o,a){kolvo=$("#korzina_tovar_col_"+o).val(),kolvo=parseInt(kolvo),kolvo=parseFloat(kolvo),isNaN(kolvo)&&(kolvo=0),"plus"==a?kolvo+=1:"minus"==a&&(kolvo-=1),cena=$("#cena"+o).val(),kolvo<="0"&&(kolvo="1",$("#korzina_tovar_col_"+o).css({"background-color":"#ff0000"}),$("#korzina_tovar_col_"+o).animate({"background-color":"#fff"},400)),kolvo>"0"&&($("#korzina_tovar_col_"+o).val(kolvo),$.ajax({url:"/modul/catalog/option/ajax.php?task=addkorzina",data:"id="+o+"&kolvo="+kolvo,success:function(a){var a=a.split("^"),l=a[0],t=a[1],n=(a[2],a[3]);a[4];$("#korzina_tovar_summa_"+o).html(n),$(".alltovar").html(l),$(".allcena").html(t)}}))}function deltovar_one(o){deltovar(o),$("#tovar_res_"+o).find("#smena #vkor").hide(),$("#tovar_res_"+o).find("#smena #but").show(),$("#tovar_res_"+o).find("select").prop("selectedIndex",0),$("#tovar_res_"+o).find("select").prop("disabled",!1)}function deltovar(o){$.ajax({url:"/modul/catalog/option/ajax.php?task=deltovar",data:"id="+o,success:function(a){$("#row"+o).remove();var a=a.split("^"),l=a[0],t=a[1];"0"==l?$("#korzina_img").attr("src","/modul/catalog/img/korzina.png"):$("#korzina_img").attr("src","/modul/catalog/img/korzina2.png"),$(".alltovar").html(l),$(".allcena").html(t)}})}function Valid1(o){o.value=o.value.replace(/[^\d\.]/g,""),o.value.match(/\./g).length>1&&(o.value=o.value.substr(0,o.value.lastIndexOf(".")))}function Valid2(o){o.value=o.value.replace(/[^\d]/g,"")}$(function(){$(".catalog_pokup2 select").on("change",function(){parent1=$(this).parent().parent()})});
//# sourceMappingURL=maps/index-js.js.map
