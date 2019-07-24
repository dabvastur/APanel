var baseurl = '<?php echo base_url() ?>';
$("#logBusqueda").keyup(function(){
	buscar = $("#logBusqueda").val();
	$("table tbody").html("");
	mostrarDatos(buscar);
})
function mostrarDatos(valor){
	$.ajax({
		url: "/Logs/getBusqueda",
		type:"POST",
		data: {buscar:valor},
		success:function(respuesta){
			//alert(respuesta);
			var registros = eval(respuesta);
			html = "";
			for(var i = 0; i < registros.length; i++) {
				html += "<tr>";
				html += "<td>"+registros[i]["id"]+"</td>";
				html += "<td>"+registros[i]["fechahora"]+"</td>";
				html += "<td>"+registros[i]["Usuario"]+"</td>";
				html += "<td>"+registros[i]["tipo"]+"</td>";
				html += "<td>"+registros[i]["Cadena"]+"</td>";
				html += "</tr>";
			};
			$("table tbody").html(html);
		}
	});
}