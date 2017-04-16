var inputs = document.querySelectorAll( '.inputfile' );
Array.prototype.forEach.call( inputs, function( input )
{
	var label = $("label[for='"+$(input).attr('id')+"']");
		labelVal = label.html();
	input.addEventListener( 'change', function( e )
	{
		var fileName = '';
		if( this.files && this.files.length > 1 )
			fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
		else
			fileName = e.target.value.split( '\\' ).pop();

		if( fileName )
			label.html('<span class="glyphicon glyphicon-open"></span>&nbsp;&nbsp;&nbsp;' + fileName);
		else
			label.html('<span class="glyphicon glyphicon-open"></span>&nbsp;&nbsp;&nbsp;' + labelVal);
	});
});
