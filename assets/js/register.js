$(document).ready(function()
{
	//On click signup, hide log in and show registration form
	$("#signup").click(function()
	{
		$("#first").slideUp("slow", function()
		{
			$("#second").slideDown("slow");
		});
	});
	//On click signup, hide log in and show registration form
	$("#signin").click(function()
	{
		$("#second").slideUp("slow", function()
		{
			$("#first").slideDown("slow");
		});
	});

});