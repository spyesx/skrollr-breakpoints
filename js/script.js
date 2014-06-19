'use strict';

(function(window, document)
{
	window.App = {};

	App.viewport = new wlib.viewport();

	App.viewport.breakpoint
		.set('too-small', 'all and (min-width:0px) and (max-width:699px)')
		.set('small', 'all and (min-width:700px) and (max-width:799px)')
		.set('large', 'all and (min-width:800px) and (max-width:999px)')
		.set('x-large', 'all and (min-width:1000px)');

	var handlerResize = function()
	{
		var newVBreakpoint = App.viewport.breakpoint.identify();
		if(newVBreakpoint != App.viewport.breakpoint.original)
		{
			wlib.events.trigger('App/viewport/breakpoint/change');
			skrollr.stylesheets();
			App.skrollr.refresh();
			App.viewport.breakpoint.original = newVBreakpoint;
		}
	};

	$(window).on('resize', handlerResize);
	handlerResize();
	skrollr.stylesheets();

	App.skrollr = skrollr.init(
	{
		smoothScrolling: false,
		render: function(data)
		{
			document.getElementById('dashboard-skrollr-x').innerHTML = data.curTop;
		}
	});	

})(window, document);
