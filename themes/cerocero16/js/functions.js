(function($){

	"use strict";

	$(function(){


		/**
		 * Validación de emails
		 */
		window.validateEmail = function (email) {
			var regExp = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			return regExp.test(email);
		};



		/**
		 * Regresa todos los valores de un formulario como un associative array 
		 */
		window.getFormData = function (selector) {
			var result = [],
				data   = $(selector).serializeArray();

			$.map(data, function (attr) {
				result[attr.name] = attr.value;
			});
			return result;
		}


		$(document).ready(function() {



			$(window).on("load",function(){
				$("body").animate({scrollTop: 0}, 5);
			    $("body").delay(300).animate({opacity: 1 }, 200);
			    var ancho = document.documentElement.clientWidth;
			    if (!$("body").hasClass('home')) {
			    	if (ancho > 550 ) {
						$(".log2").removeClass('hidden');
					}
					$(".logo").addClass('animaa');
					$(".log2").removeClass('compact');
					$(".log1").removeClass('compact');
					$(".social").addClass('orilla');
					$("header").addClass('compact');
					$(".topscroll").addClass('compact');
					$(".searchbar a").addClass('compact');
					$(".menu-btn").addClass('reduce');
					$(".social-btn").addClass('reduce');

			    }
			});

			$(window).on("load resize",function(){
			    var ancho = document.documentElement.clientWidth;
			    var alto = document.documentElement.clientHeight;

			    if (ancho <= 550) {
					$(".log2").hide();
			    } else {
			    	$(".log2").show();
			    }

			    var lefty = $('.single-left').height();
			    $(".single-right").css("height", lefty + "px");

			    if (!$("body").hasClass('home')) {

				    var content = $('.single-left').height();
				    var footer = $('footer').height();

				    content = content + footer + 70 ;

				    if ( ancho > 900 ) {
				    	if (alto > content ) {
					    	$(".singlepost").css("height", alto - footer + "px");
					    } else {
					    	$(".singlepost").css("height", $('.single-left').height() + footer + 70 + "px");
					    }	
				    } else {
				    	$(".singlepost").css("height", $('.single-left').height() + $('.single-left').height() + footer + 70 + "px");
				    }

			    }

			});

			if ($("body").hasClass('home')) {

				var win = $(window);
				var counter = 1;

				win.scroll(function() {
					if ($(document).height() - win.height() == win.scrollTop()) {
						console.log('Pagina' + counter );
			            counter++;
						$(".loading").animate({opacity: 0.35 }, 200);
						if (counter < 5) {
							setTimeout(function() {
				                $('.post-container').append('<div class="post"><div class="post-header"><span>hace 2 días</span><span>Fuente: <a href="#">Lorem Ipsum</a></span></div><div class="post-content"><a href="single.html"><h2>Lorem Ipsum Dolor Sit Amet</h2></a><a href="single.html"><img src="images/post.png"></a></div><div class="post-footer"><a><i class="material-icons">share</i>Compartir</a><a><i class="material-icons">chat_bubble_outline</i>Comentar</a><a><i class="material-icons">file_download</i>Descargar</a></div></div><div class="post"><div class="post-header"><span>hace 2 días</span><span>Fuente: <a href="#">Lorem Ipsum</a></span></div><div class="post-content"><a href="single.html"><h2>Lorem Ipsum Dolor Sit Amet</h2></a><a href="single.html"><img src="images/post.png"></a></div><div class="post-footer"><a><i class="material-icons">share</i>Compartir</a><a><i class="material-icons">chat_bubble_outline</i>Comentar</a><a><i class="material-icons">file_download</i>Descargar</a></div></div><div class="post"><div class="post-header"><span>hace 2 días</span><span>Fuente: <a href="#">Lorem Ipsum</a></span></div><div class="post-content"><a href="single.html"><h2>Lorem Ipsum Dolor Sit Amet</h2></a><a href="single.html"><img src="images/post.png"></a></div><div class="post-footer"><a><i class="material-icons">share</i>Compartir</a><a><i class="material-icons">chat_bubble_outline</i>Comentar</a><a><i class="material-icons">file_download</i>Descargar</a></div></div>');
				                $(".loading").animate({opacity: 0 }, 100);
				            }, 1500);
						} else {
							setTimeout(function() {
								$(".loading").removeClass("animated");
				                $(".loading span").html("FIN DE LA LISTA");
				            }, 1500);
						}
					
					/*
					$.ajax({
						url: 'get-post.php',
						dataType: 'html',
						success: function(html) {
							$('#posts').append(html);
							$('#loading').hide();
						}
					});
					*/
			            
					}
				});
			}

			$(window).scroll(function(){
				var windowWidth = $(this).width();
				var windowHeight = $(this).height();
				var windowScrollTop = $(this).scrollTop();

				
				if ($("body").hasClass('home')) {
					if(windowScrollTop>195){
						$(".logo").addClass('animaa');
					}else{
						$(".logo").removeClass('animaa');
					}

					if(windowScrollTop>388){
						$(".log2").removeClass('compact');
						$(".log1").removeClass('compact');
						$(".social").addClass('orilla');
					}else{
						$(".log2").addClass('compact');
						$(".log1").addClass('compact');
						$(".social").removeClass('orilla');
					}

					if(windowScrollTop>100){
						if (windowWidth > 550 ) {
							$(".log2").removeClass('hidden');
						}
					}else{
						$(".log2").addClass('hidden');
					}

					if(windowScrollTop>409){
						$("header").addClass('compact');
						$(".topscroll").addClass('compact');
						$(".searchbar a").addClass('compact');
						$(".menu-btn").addClass('reduce');
						$(".social-btn").addClass('reduce');
					}else{
						$("header").removeClass('compact');
						$(".topscroll").removeClass('compact');
						$(".searchbar a").removeClass('compact');
						$(".menu-btn").removeClass('reduce');
						$(".social-btn").removeClass('reduce');
					}
				}

			});

			$(".searchbar a").click(function(){
	            var anchohead = document.documentElement.clientWidth;
	            $(".searchbar").show();
	            if (anchohead < 901 ) {
	                $(".menu-btn").animate({opacity:"0"}, 150);
	            }
	            $(".social-btn").animate({opacity:"0"}, 150);
	            $(".searchbar").delay(200).animate({width:"205px"}, 300);
	            setTimeout(function() {
	                $(".searchbar input").show();
	                $(".searchbar input").focus();
	            }, 500);
	        });

			$(document).mouseup(function (e){
				var container = $(".searchbar");
			    if (!container.is(e.target)&& container.has(e.target).length === 0) {
			    	var anchohead = document.documentElement.clientWidth;
			        $(".searchbar input").hide();
			        $(".searchbar").animate({width:"32px"}, 200);    
			        setTimeout(function() {
			        	if (anchohead < 640 ) { $(".menu-btn").animate({opacity:"0.75"}, 200) } 
			            $(".social-btn").animate({opacity:"1"}, 150); 
			        }, 50);
			    }
			});

			$('.topscroll img:nth-of-type(1)').transe({
			    0: {
			        left: '18%',
			        top: '50%',
			        opacity: '1'
			    },
			    400: {
			        left: '-26%',
			        top: '125%',
			        opacity: '1'
			    },
			    408: {
			        left: '-26%',
			        top: '125%',
			        opacity: '1'
			    },
			    409: {
			        left: '-26%',
			        top: '125%',
			        opacity: '0'
			    }
			});

			$('.topscroll img:nth-of-type(2)').transe({
			    0: {
			        top: '50%',
			        opacity: '1'
			    },
			    400: {
			        top: '150%',
			        opacity: '1'
			    },
			    408: {
			        top: '150%',
			        opacity: '1'
			    },
			    409: {
			        top: '150%',
			        opacity: '0'
			    }
			});

			$('.topscroll img:nth-of-type(3)').transe({
			    0: {
			        left: '86%',
			        top: '50%',
			        opacity: '1'
			    },
			    400: {
			        left: '130%',
			        top: '125%',
			        opacity: '1'
			    },
			    408: {
			        left: '130%',
			        top: '125%',
			        opacity: '1'
			    },
			    409: {
			        left: '130%',
			        top: '125%',
			        opacity: '0'
			    }
			});

		});


	});

})(jQuery);