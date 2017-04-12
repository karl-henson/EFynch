// JavaScript Document
$(document).ready(function()
{
	$("#intro_video").on('change',function()
	{
		upload_video();
	});
	
	$("#video_upload").on('click',function()
	{
		$("#intro_video").trigger('click');
		return false;
	});
});


function delete_video(video_id)
{
	$.ajax(
	{
		url:base_url+'video/delete_video',
		data:'vid='+video_id,
		method:'post',
		success:function()
		{
			$("ul").find("[_id='" + video_id + "']").parents(".item-post:first").hide(1000);
		},
		
	});
}

function progressHandler(event)
{
	var percent = (event.loaded / event.total) * 100;
	$("#progress-bar").css('width',Math.round(percent)+"%");
	$("#progress_count").text(Math.round(percent));
	//_("status").innerHTML = Math.round(percent)+"% uploaded... please wait";
}

function completeHandler(event)
{
	$("#progress-bar").css('width',"100%");
	$("#upload_video").hide(500);
	$("#video_player").show(500);
	
	$("#progress-bar").css('width',"0%");
	$("#progress_count").text("0");
	get_video_source(document.getElementById("intro_video"));
	
}

function errorHandler(event)
{
	//_("status").innerHTML = "Upload Failed";
	alert("problem processing video. ffmpeg not installed");
}

function abortHandler(event)
{
	_("status").innerHTML = "Upload Aborted";
}

function upload_video()
{
	var file_data = $('#intro_video').prop('files')[0];   
	var form_data = new FormData();                  
	form_data.append('intro_video', file_data);
	var ajax = new XMLHttpRequest();
	ajax.upload.addEventListener("progress", progressHandler, false);
	ajax.addEventListener("load", completeHandler, false);
	ajax.addEventListener("error", errorHandler, false);
	ajax.addEventListener("abort", abortHandler, false);
	ajax.open("POST", base_url+"frontend/add_intro_video");
	ajax.send(form_data);
}

function get_video_source(input) 
{
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $("#video_source").attr('src',e.target.result);	
			player = document.getElementById("player");
			player.load();
        }
        reader.readAsDataURL(input.files[0]);
    }
	
}

function delIntroVideo(key)
{
	if(confirm("Are you sure you want to delete video?"))
	{
		$.ajax(
		{
			url:base_url+'frontend/remove_video',
			data: 'k='+key,
			method:'post',
			success:function(data)
			{
				$("#video_player").hide(500);
				$("#upload_video").show(500);
			}
		});
	}
}