window.addEvent('load',function()
{
	$('login').addEvent('submit',function(event)
	{	
		event.stop();
		new Request({
			method:'post',
			url:this.action,
			data:this,
			onSuccess:function(html)
			{				
			},
			evalScripts:true
		}).send()
	})
})