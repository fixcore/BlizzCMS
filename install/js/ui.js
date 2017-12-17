var UI = {

	/**
	 * Initialize the admin panel
	 */
	initialize: function()
	{
		this.Tooltip.initialize();
	},

	/**
	 * Shows an alert box
	 * @param String message
	 */
	alert: function(question, time)
	{
	
		// Put question and button text
		$("#alert_message").html(question);

		// Show box
		$("#popup_bg").fadeTo(200, 0.5);
		$("#alert").fadeTo(200, 1);

		if(typeof time == "undefined")
		{
			$("#alert_message").css({marginBottom:"10px"});
			$(".popup_links").show();

			// Assign click event
			$("#alert_button").bind('click', function()
			{
				UI.hidePopup();	
			});
		}
		else
		{
			$("#alert_message").css({marginBottom:"0px"});
			$(".popup_links").hide();

			setTimeout(function()
			{
				UI.hidePopup();
			}, time);
		}

		// Assign hide-function to background
		$("#popup_bg").bind('click', function()
		{
			UI.hidePopup();
		});

		// Assign key events
		$(document).keypress(function(event)
		{
			// If "enter"
			if(event.which == 13)
			{
				UI.hidePopup();
			}
		});
	},

	/**
	 * Shows a confirm box
	 * @param String question
	 * @param String button
	 * @param Function callback
	 */
	confirm: function(question, button, callback)
	{
		$(".popup_links").show();
		
		// Put question and button text
		$("#confirm_question").html(question);
		$("#confirm_button").html(button);

		// Show box
		$("#popup_bg").fadeTo(200, 0.5);
		$("#confirm").fadeTo(200, 1);

		// Assign click event
		$("#confirm_button").bind('click', function()
		{
			callback();
			UI.hidePopup();	
		});

		// Assign hide-function to background
		$("#popup_bg").bind('click', function()
		{
			UI.hidePopup();
		});

		// Assign key events
		$(document).keypress(function(event)
		{
			// If "enter"
			if(event.which == 13)
			{
				callback();
				UI.hidePopup();
			}
		});
	},

	/**
	 * Hides the current popup box
	 */
	hidePopup: function()
	{
		// Hide box
		$("#popup_bg").hide();
		$("#confirm").hide();
		$("#alert").hide();
		$("#vote_reminder").hide();

		// Remove events
		$("#confirm_button").unbind('click');
		$("#alert_button").unbind('click');
		$(document).unbind('keypress');
	},

	Navigation: {

		current: 1,
		max: 7,

		next: function()
		{
			// Save the current step's fields
			Memory.save(this.current);

			if(this.current < this.max)
			{
				$(".sub .active").removeClass("active");

				$("#installer_step_" + this.current).fadeOut(200, function()
				{
					UI.Navigation.current++;

					$(".sub a:nth-child(" + UI.Navigation.current + ")").addClass("active");
					$("#installer_step_" + UI.Navigation.current).fadeIn(200);
				});
			}
		},

		previous: function()
		{
			if(this.current > 1)
			{
				$(".sub .active").removeClass("active");

				$("#installer_step_" + this.current).fadeOut(200, function()
				{
					UI.Navigation.current--;

					$(".sub a:nth-child(" + UI.Navigation.current + ")").addClass("active");
					$("#installer_step_" + UI.Navigation.current).fadeIn(200);
				});
			}
		}
	},

	Tooltip: {

		/**
		 * Add event-listeners
		 */
		initialize: function()
		{
			// Add the tooltip element
			$("body").prepend('<div id="tooltip"></div>');

			// Add mouse-over event listeners
			this.addEvents();

			// Add mouse listener
			$(document).mousemove(function(e)
			{
				UI.Tooltip.move(e.pageX, e.pageY);
			});
		},

		/**
		 * Used to support Ajax content
		 * Reloads the tooltip elements
		 */
		refresh: function()
		{
			// Remove all
			$("[data-tip]").unbind('hover');

			// Re-add
			this.addEvents();
		},

		addEvents: function()
		{
			// Add mouse-over event listeners
			$("[data-tip]").hover(
				function()
				{
					UI.Tooltip.show($(this).attr("data-tip"));
				},
				function()
				{
					$("#tooltip").hide();
				}
			);
		},

		/**
		 * Moves tooltip
		 * @param Int x
		 * @param Int y
		 */
		move: function(x, y)
		{
			// Get half of the width
			var width = ($("#tooltip").css("width").replace("px", "") / 2);

			// Position it at the mouse, and center
			$("#tooltip").css("left", x - width).css("top", y + 25);
		},

		/**
		 * Displays the tooltip
		 * @param Object element
		 */
		show: function(data)
		{
			$("#tooltip").html(data).show();
		}
	}
}