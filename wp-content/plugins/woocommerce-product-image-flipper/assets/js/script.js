jQuery(document).ready(function($){
	jQuery( 'ul.products li.pif-has-gallery a:first-child' ).hover( function() {
		// console.log("hoverIn", this);
		jQuery( this ).children( '.wp-post-image' ).removeClass( 'fadeInDown' ).addClass( 'animated fadeOutUp' );
		jQuery( this ).children( '.secondary-image' ).removeClass( 'fadeOutUp' ).addClass( 'animated fadeInDown' );
	// },function(abc){
	// 	var local = jQuery(abc);
	// 	return function(){
	// 		setTimeout(function(){
	// 			console.log("local", local);
	// 			local.children( '.wp-post-image' ).removeClass( 'fadeOutUp' ).addClass( 'fadeInDown' );
	// 			local.children( '.secondary-image' ).removeClass( 'fadeInDown' ).addClass( 'fadeOutUp' );
	// 		}, 1000);
	// 	}
	// }(this));
	}, function() {
	// 	console.log("hoverOut", this);
	// 	var local = function(abc){return jQuery(this)}(this);
	// 	setTimeout(function(){
	// 		console.log("local", local);
	// 		local.children( '.wp-post-image' ).removeClass( 'fadeOutUp' ).addClass( 'fadeInDown' );
	// 		local.children( '.secondary-image' ).removeClass( 'fadeInDown' ).addClass( 'fadeOutUp' );
	// 	}, 1000);
	// 	setTimeout(function(){
	// 		console.log("this");
	// 		console.log("this", this);
	// 		jQuery(this).children( '.wp-post-image' ).removeClass( 'fadeOutUp' ).addClass( 'fadeInDown' );
	// 		jQuery(this).children( '.secondary-image' ).removeClass( 'fadeInDown' ).addClass( 'fadeOutUp' );
	// 	}, 1000);
		jQuery( this ).children( '.wp-post-image' ).removeClass( 'fadeOutUp' ).addClass( 'fadeInDown' );
		jQuery( this ).children( '.secondary-image' ).removeClass( 'fadeInDown' ).addClass( 'fadeOutUp' );
	});
});
// jQuery(document).ready(function($){
// 	jQuery( 'ul.products li.pif-has-gallery a:first-child' ).on("mouseover", function(){
// 		var thisProduct = jQuery(this);
// 		thisProduct.children( '.wp-post-image' ).removeClass( 'fadeInDown' ).addClass( 'animated fadeOutUp' );
// 		thisProduct.children( '.secondary-image' ).removeClass( 'fadeOutUp' ).addClass( 'animated fadeInDown' );

// 		thisProduct.on("mouseout", function(){
// 			setTimeout(function(){
// 				console.log("local", thisProduct);
// 				thisProduct.children( '.wp-post-image' ).removeClass( 'fadeOutUp' ).addClass( 'fadeInDown' );
// 				thisProduct.children( '.secondary-image' ).removeClass( 'fadeInDown' ).addClass( 'fadeOutUp' );
// 			}, 1000);
// 		});
// 	});
// });