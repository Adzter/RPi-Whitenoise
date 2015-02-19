$(document).ready(function(){
		//
		// AUDIO OUTPUT DEVICE
		//
        $("#hdmi").click(function() {
            $.ajax({
                type: "POST",
                url: "inc/audio/hdmi.php",
                data: "",
                success: function(response){
                    $('#audioType').val('hdmi');
                    $('#output').html(response);
                }
            });
        return false;
        });
		
        $("#audiojack").click(function() {
            $.ajax({
                type: "POST",
                url: "inc/audio/audiojack.php",
                data: "",
                success: function(response){
                    $('#audioType').val('local');
                    $('#output').html(response);
                }
            });
        return false;
        });
		
		//
		//	VOLUME CONTROLS
        //		
        $("#play").click(function() {
			//Get the audio type we've set and the song
			var audioType = $("#audioType").val();
			var dropdown = $("#dropdown").val();
			var postData = {
				"audioType":audioType,
				"song":dropdown
			};
                   
			$.ajax({
				type: "POST",
				url: "inc/controls/play.php",
				data: postData,
				success: function(response){
					$('#output').html(response);
				}
			});
        return false;
        });
});