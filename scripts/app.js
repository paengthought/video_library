

$(function(){
	loadVideoList();
	
	
	$('#formAddNew').on('submit', function(event){
		event.preventDefault();
		
		$.ajax({
		  type: "POST",
		  url: 'functions/add_new_record.php',
		  data: $( this ).serialize(),
		  success: function( result ){
				
				if($('.alert').length > 0) {
					$('.alert').remove();
				}
				loadVideoList();
				$('#formAddNew').before(result);
				$('input[type="text"]').val('');
				$('select').val('');
		  }
		});
	})
	
	$('#formSearch').on('submit', function(event){
		event.preventDefault();
		
		$.ajax({
		  type: "POST",
		  url: 'functions/search_video.php',
		  data: $( this ).serialize(),
		  success: function( result ){
				
				$('.video-list').html(result);
		  }
		});
		
	})
	
	
	function viewModal() {
		
		$('.view-detail').on('click', function(){
			$.ajax({
			  type: "POST",
			  url: 'functions/select_video.php',
			  data: 'id=' + $(this).attr('data-id'),
			  success: function( result ){
			  
				// Empty first the modal content before adding value
				$('.modal-content').html(' ');
				
				$('.modal-content').append(result);
				
				
			  }
			});
		})
	}
	
	function loadVideoList() {
	
		$('.video-list').load('video-list.php',function(){
			$('.delete').on('click', function(){
				var conf = confirm('Are you sure you want to delete this item?');
				if(conf == true) {
					$.ajax({
					  type: "POST",
					  url: 'functions/delete_record.php',
					  data: 'id=' + $(this).attr('data-id'),
					  success: function( result ){
						if($('.alert').length > 0) {
							$('.alert').remove();
						}
						loadVideoList();
					  }
					});
				}		
			});
			
			
			viewModal();
			
		});
	}
	
	
	
	
})