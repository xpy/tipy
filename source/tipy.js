/// Προσθέτει tooltip...

jQuery.fn.tooltip = function(text,pos,duration,classes)
{
	var T = this;
	pos = (pos === undefined) ? 'trbl' : pos; // Default is 'auto' (trbl)
	if(typeof pos == 'number'){ classes = duration; duration = pos; pos="trbl"; }
	if(typeof duration == 'string') { classes = duration; duration = null;}
	classes = classes || '';
	var classAttr = (classes !== '')?'class="'+classes+'"': ''; // Add Optional Classes...

	duration = (!isNaN(duration) && duration!=null) ? duration : ((text.split(/\s+/).length+1)*1500); // If duration is not Defined it is computed by the text's words

	if($('#tooltip')[0]===undefined){ $('body').append('<div id="tooltip" '+classAttr+' ></div>'); }  // Set it up
	else { $('#tooltip').attr("class",classes); }

	var $tooltip = $('#tooltip');

	$tooltip.html(text);

	//  All the dimensions needed...
	var w = parseFloat($tooltip.outerWidth()),
		h = parseFloat($tooltip.outerHeight()),
		objW = T.outerWidth(),
		objH = T.outerHeight(),
		objDim = { "t":T.offset().top , 'r': T.offset().left + objW ,'b': T.offset().top + objH ,'l': T.offset().left };

	for( var i in objDim ) { objDim[i] = parseInt( objDim[i] ); }

	var left = 0, top = 0;

	function _autoPosition(){
		var space = {
			't' :   objDim.t - $(window).scrollTop(),
			'r' :   ( $(window).width() - objDim.r ) + $(window).scrollLeft(),
			'b' :   $(window).height() - ($(window).scrollTop() - objDim.b),
			'l' :   objDim.l - $(window).scrollLeft()
		},
			wRemain = (w - objW)/ 2,
			hRemain = (h - objH)/2;

		for( var i = 0; i<pos.length;i++ ){
			switch (pos[i]){
				case 't':
					if(h < space.t && wRemain < space.l && wRemain < space.r ){ return 't';}
					break;
				case 'r':
					if(w < space.r && hRemain < space.t && hRemain < space.b ){ return 'r'; }
					break;
				case 'b':
					if(h < space.b && wRemain < space.l && wRemain < space.r ){ return 'b';}
					break;
				case 'l':
					if(w < space.l && hRemain < space.t && hRemain < space.b ){ return 'l';}
					break;
			}
		}

		return 't';
	}

	if(pos.search(/^(t|tr|r|br|b|bl|l|tl)$/) < 0){ pos = _autoPosition();}

	switch (pos){
		case 't':
			left = parseInt(objDim.l + objW/2 - w/2);
			top = parseInt( objDim.t - h);
			break;
		case 'tr':
			left = parseInt(objDim.l + objW);
			top = parseInt( objDim.t - h);
			break;
		case 'r':
			left = parseInt(objDim.l + objW);
			top = parseInt( objDim.t + objH/2 - h/2);
			break;
		case 'br':
			left = parseInt(objDim.l + objW);
			top = parseInt( objDim.t + objH );
			break;
		case 'b':
			left = parseInt(objDim.l + objW/2 - w/2);
			top = parseInt( objDim.t + objH );
			break;
		case 'bl':
			left = parseInt(objDim.l - w);
			top = parseInt( objDim.t + objH );
			break;
		case 'l':
			left = parseInt(objDim.l - w);
			top = parseInt( objDim.t + objH/2 - h/2);
			break;
		case 'tl':
			left = parseInt(objDim.l - w);
			top = parseInt(objDim.t - h);
			break;
		default :

			break;
	}

	T.leave = function(){
		if(tooltipInterval){ window.clearInterval(tooltipInterval); }
		$tooltip.stop(true,false).animate({'opacity':0},300).remove();
	};

	T._check = function(){
		if(!T.closest('html').length){
			T.leave();
		}
	};

	$("#tooltip").css({"display":"block","left":left,"top":top});
	$("#tooltip").addClass('position-'+pos);

	$tooltip.one('click', T.leave);

	var tooltipInterval = window.setInterval(T._check,300);
	$tooltip.stop(true,false).animate({'opacity':1},300,function(){
		if( duration > 0 ) {
		$tooltip.delay(duration * .5).animate({'opacity':0},(duration * .5), function(){$tooltip.unbind('click')});
		}
	});

	return T;
};

var tooltipController = function(attr, cl){

	attr = attr || 'data-tipy-text';
	var checker = (cl!== undefined)?("."+cl):('['+attr+']');

	function tooltipCheck(e){
		var $tar = $(e.target);
		var tooltipClass = $tar.attr('data-tipy-class') || '';
		var removeTooltip = function(){
			if($tar.is(checker)){ $tar.leave(); }
		};
		if($tar.is(checker)){
			var text = $tar.attr(attr);
			$tar.tooltip(text,0,tooltipClass);
			$(document).unbind('mouseout',removeTooltip).one('mouseout',removeTooltip);
		}
	}

	$(document).unbind('mouseover',tooltipCheck).bind('mouseover',tooltipCheck);

}("title");
