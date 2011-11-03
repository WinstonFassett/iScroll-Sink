$(document).ready(function()
{

	var newScroll = new iScroll('home-wrapper');

	$(".pageLink").bind('click', function(e) 
	{ 
		e.preventDefault();
		var	nextPage = $(e.target.hash);
		$(".current").removeClass("current"); 
		nextPage.addClass("current");
		currentPageId = $(".current").attr("ID");
		newScroll.destroy();
		newScroll = null;
		if (currentPageId === 'custom-scroll'){
			newScroll = new iScroll(currentPageId, { scrollbarClass: 'myScrollbar' });	
		}else if(currentPageId === 'zoom'){
			newScroll = new iScroll(currentPageId, { zoom: true });
		} else if(currentPageId === 'refresh'){ 
			var pullDownEl, 
				pullDownOffset,
				generatedCount = 0;

			function pullDownAction () {
					var el, li, i;
					el = document.getElementById('refreshList');
					for (i=0; i<3; i++) {
						li = document.createElement('li');
						li.innerText = 'Generated row ' + (++generatedCount);
						el.insertBefore(li, el.childNodes[0]);
					}
					
					newScroll.refresh();
			}

				pullDownEl = document.getElementById('pullDown');
				pullDownOffset = pullDownEl.offsetHeight;
				
				newScroll = new iScroll('refresh', {
					useTransition: true,
					topOffset: pullDownOffset,
					onRefresh: function () {
						if (pullDownEl.className.match('loading')) {
							pullDownEl.className = '';
							pullDownEl.querySelector('.pullDownLabel').innerHTML = 'Pull down to refresh...';
						}
					},
					onScrollMove: function () {
						if (this.y > 5 && !pullDownEl.className.match('flip')) {
							pullDownEl.className = 'flip';
							pullDownEl.querySelector('.pullDownLabel').innerHTML = 'Release to refresh...';
							this.minScrollY = 0;
						}
					},
					onScrollEnd: function () {
						if (pullDownEl.className.match('flip')) {
							pullDownEl.className = 'loading';
							pullDownEl.querySelector('.pullDownLabel').innerHTML = 'Loading...';				
							pullDownAction();	// Execute custom function (ajax call?)
						}
					}
				});
		}else if(currentPageId === 'snap'){
			newScroll = new iScroll(currentPageId,
			{
				snap: true,
				momentum: false,
				hScrollbar: false,
				vScrollbar: false 
			});
		}else {
			newScroll = new iScroll(currentPageId);
		}
	
	});
	 
}) 




