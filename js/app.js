$(document).ready(function() 
{
	consultaArticulos();
	$('#contacto').submit(enviaMensaje);
});
// Función que obtiene todos los articulos registrados en la base de datos
function consultaArticulos() 
{
	$.ajax({
		type:'GET',
		url: 'php/consultaArticulos.php',
		dataType: 'JSON',
		success:function(respuesta) 
		{
			if(respuesta.error == false)
			{
				swal({
					type: 'error',
					title: 'Error!',
					text: respuesta.message
				});
			}
			else
			{
				for (indice in respuesta) 
				{
					mostrarArticulo(respuesta[indice]);
				}
			}
		}
	});
}
// Función que crea las cards para pintarlas en el HTML
function mostrarArticulo(informacion) 
{
	// Obteniendo los datos de la respuesta JSON
	const id_titulo = informacion.id_articulo,
	titulo = informacion.titulo,
	extracto = informacion.extracto,
	texto = informacion.texto,
	img = informacion.img,
	fecha = informacion.fecha,
	usuario = informacion.usuario;
	// Creadon los elementos html para imprimirlos en pantalla
	const card = $('<div></div>').attr('class' , 'card'),
	columna = $('<div></div>').attr('class', 'col-4 mb-2');
	imagen = $('<img>').attr({src : `img/${img}`, class : 'card-img-top', alt : `${titulo}`}),
	card_body = $('<div></div>').attr('class', 'card-body'),
	card_footer = $('<div></div>').attr('class', 'card-footer'),
	etiquetaTitulo = $('<h5></h5>').attr('class', 'titulo card-title').text(titulo),
	textoExtracto = $('<p></p>').attr('class', 'extracto card-text').text(extracto),
	textoInformacion = $('<p></p>').attr('class', 'card-text'),
	autor = $('<small></small>').attr('class', 'text-muted').text(usuario),
	enlace = $('<a></a>').attr({href: `single.php?id=${id_titulo}`, class: 'btn btn-sm btn-danger'}).text('Leer más');
	// Agregando los elementos al DOM
	textoInformacion.append(autor);
	card_body.append(etiquetaTitulo);
	card_body.append(textoExtracto);
	card_body.append(textoInformacion);
	card_footer.append(enlace);
	card.append(imagen);
	card.append(card_body);
	card.append(card_footer);
	columna.append(card);
	$('.fila').append(columna);
}
// Función qu envia el formulario de contacto
function enviaMensaje(event) 
{
	event.preventDefault();
	const datos = $('#contacto').serialize();
	$.ajax({
		type: 'POST',
		data: datos,
		url: 'php/ingresaMensajeContacto.php',
		dataType: 'JSON',
		success: function(respuesta) 
		{
			if (respuesta.success == true) 
			{
				swal({
					type: 'success',
					title: 'Mensaje Enviado',
					text: respuesta.message
				})
				.then(respuesta => {
					if (respuesta.value) 
					{
						window.location.href = 'index.php';
					}
				});
			} 
			else 
			{
				swal({
					type: 'error',
					title: 'Fatal Error!',
					text: respuesta.message
				});
			}
		}
	});
}
// Función que limpia los datos del formulario
// function limpiaFormulario() 
// {
// 	$('#contacto')[0].reset();
// }