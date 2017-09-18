$(function() {
	/* Modal add task form */
	$('#modal_add').on('show.bs.modal', function() {
        var host = 'http://' + location.host;
        var urlPath = location.pathname;
        var remoteLink = host + urlPath + '?/task/add';
        
        $(this).find('.modal-content').load(remoteLink, function() {
        	// Init Select2 when loaded
        	$('.select').select2({
                minimumResultsForSearch: Infinity
            });
        });
    });

    $('body').on('click', '#btnCreate', function(e) {
    	e.preventDefault();
    	var error = false;
    	var urlPath = 'http://' + location.host + location.pathname;
    	var taskName = $('#taskName').val();
    	var taskDesc = $('#taskDesc').val();
    	
    	if(taskName.length == 0)
    	{
    		var error = true;
    		$('#taskNameError').show();
    	}
    	else
    	{
    		$('#taskNameError').hide();
    	}
    	
    	if(taskDesc.length == 0)
    	{
    		var error = true;
    		$('#taskDescError').show();
    	}
    	else
    	{
    		$('#taskDescError').hide();
    	}
    	
        if(error == false)
        {
	    	$.post(urlPath + '?/task/save', $("#taskForm").serialize(), function(data) {
	    		$('#modal_add').modal('hide');
	    		
	    		if(data.status == 'success')
	    		{
		        	swal({
		                title: "Success!",
		                text: data.message,
		                confirmButtonColor: "#EF5350",
		                type: "success"
		            },
		            function(isConfirm){
		                if (isConfirm) {
		                   $(window.location).attr('href', urlPath + '?/task');
		                }
		            });
	    		}
	    		else
	    		{
	    			swal({
	    				title: "Failed!",
	    	            text: data.message,
	    	            confirmButtonColor: "#EF5350",
	    	            type: "error"
	    			});
	    		}
	    	}, 'JSON');
    	}
    });

    /* Modal add task form */
	$('#modal_edit').on('show.bs.modal', function(e) {
        var host = 'http://' + location.host;
        var urlPath = location.pathname;
        var id = $(e.relatedTarget).data('taskid');
        var remoteLink = host + urlPath + '?/task/edit/' + id;
        
        $(this).find('.modal-content').load(remoteLink, function() {
        	// Init Select2 when loaded
        	$('.select').select2({
                minimumResultsForSearch: Infinity
            });
        });
    });


    $('body').on('click', '#btnEdit', function(e) {
    	e.preventDefault();
    	var error = false;
    	var urlPath = 'http://' + location.host + location.pathname;
    	var taskName = $('#taskName').val();
    	var taskDesc = $('#taskDesc').val();
    	
    	if(taskName.length == 0)
    	{
    		var error = true;
    		$('#taskNameError').show();
    	}
    	else
    	{
    		$('#taskNameError').hide();
    	}
    	
    	if(taskDesc.length == 0)
    	{
    		var error = true;
    		$('#taskDescError').show();
    	}
    	else
    	{
    		$('#taskDescError').hide();
    	}
    	
        if(error == false)
        {
	    	$.post(urlPath + '?/task/update', $("#taskFormEdit").serialize(), function(data) {
	    		$('#modal_add').modal('hide');
	    		
	    		if(data.status == 'success')
	    		{
		        	swal({
		                title: "Success!",
		                text: data.message,
		                confirmButtonColor: "#EF5350",
		                type: "success"
		            },
		            function(isConfirm){
		                if (isConfirm) {
		                   $(window.location).attr('href', urlPath + '?/task');
		                }
		            });
	    		}
	    		else
	    		{
	    			swal({
	    				title: "Failed!",
	    	            text: data.message,
	    	            confirmButtonColor: "#EF5350",
	    	            type: "error"
	    			});
	    		}
	    	}, 'JSON');
    	}
    });


    $('body').on('focus', '#taskName', function() {
		$('#taskNameError').hide();
	});
    
    $('body').on('focus', '#taskDesc', function() {
		$('#taskDescError').hide();
	});

});


function deleteTask(tid)
{
	swal({
        title: "Are you sure?",
        text: "You will not be able to recover this data!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#EF5350",
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, cancel pls!",
        closeOnConfirm: false,
        closeOnCancel: false
    },
    function(isConfirm){
        if (isConfirm) {
        	var urlPath = 'http://' + location.host + location.pathname;

        	$.post(urlPath + '?/task/delete/', { id:tid }, function(data) {
        		if(data.status == 'success')
        		{
		            swal({
		                title: "Deleted!",
		                text: data.message,
		                confirmButtonColor: "#EF5350",
		                type: "success"
		            },
		            function(isConfirm){
		                if (isConfirm) {
		                   $(window.location).attr('href', urlPath + '?/task');
		                }
		            });
		        }
		        else
		        {
		        	swal({
	    				title: "Failed!",
	    	            text: data.message,
	    	            confirmButtonColor: "#EF5350",
	    	            type: "error"
	    			});
		        }

        	}, 'JSON');
        }
        else {
            swal({
                title: "Cancelled",
                text: "Your data is safe :)",
                confirmButtonColor: "#EF5350",
                type: "error"
            });
        }
    });
}

