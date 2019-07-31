$(document).ready(function(){
	
	//$('#edit-color').paletteColorPicker();
	// You can use something like...
	// $('[data-palette]').paletteColorPicker();
	
	// Generate drag & drop
	$('#event-list .day').sortable({
    	connectWith: ".day"
    	, items: "div.event"
    	, placeholder: "ui-state-highlight"
    	, revert : true
    	, zIndex: 9999
    	, stop:function( event, ui ) {
    		var object = ui.item.context;
    		var rowid = $(object).find('input[name="rowid"]').val();
    		var new_date = $(object).parent().find('input[name="current_date"]').val();
        	var y = window.pageYOffset;
    		var id = $('#compteid').val();
    		var year = $('#yearid').val();
    		$.ajax({
				url: "interface.php"
				, method: "GET"
				, data: { action:'move', rowid: rowid, new_date: new_date, bank: id }
			}).done(function() {
				$(object).find('input[name="datep"]').val(new_date);
				$(location).attr('href','?id=' + id + '&year=' + year + '&posy=' + y);
			});
    	}
	});
	

	// Edit action trigger
    $('#event-list').on('click','.day .event', function(e) {
        var y = window.pageYOffset;
        $('#editModal').modal();
        e.stopPropagation();
        var rowid = $(this).find('input[name="rowid"]').val();
        var status = $(this).find('input[name="status"]').val();
        var datep = $(this).find('input[name="datep"]').val();
        var mode = $(this).find('input[name="mode"]').val();
        var provision = $(this).find('input[name="provision"]').val();
        var tva = $(this).find('input[name="tva"]').val();
        var label = $(this).find('input[name="label"]').val();
        var color = $(this).find('input[name="color"]').val();
        var amount = $(this).find('input[name="amount"]').val();
        var date_facture = $(this).find('input[name="date_facture"]').val();
        var fk_categcomptable = $(this).find('input[name="fk_categcomptable"]').val();
        
       	if(datep == '' || datep == '1970-01-01') {
       		datep = null;
       	}

        $('#editModal input[name="rowid"]').val(rowid);
        $('#editModal input[name="posy"]').val(y);
        $('#editModal input[name="label"]').val(label);
        $('#editModal input[name="amount"]').val(amount);
        $('#editModal input[name="datep"]').val(datep);
        $('#editModal input[name="color"]').val(color);
        $('#editModal select[name="fk_categcomptable"]').val(fk_categcomptable);
        if(date_facture != '1970-01-01') $('#editModal input[name="date_facture"]').val(date_facture);
        $('#editModal #mode' + mode +'').prop('checked', true);
        $('#editModal #tva' + tva +'').prop('checked', true);
        if(status > 0)
        	$('#editModal input[name="status"]').prop('checked', true);
        else
            $('#editModal input[name="status"]').prop('checked', false);
        
        if(provision > 0)
        	$('#editModal input[name="provision"]').prop('checked', true);
        else
            $('#editModal input[name="provision"]').prop('checked', false);
        
        $('select.special-select').select2("destroy");
        $('select.special-select').select2({
    	    minimumResultsForSearch:4
        });
        $("#editModal input.special-ui").checkboxradio( "destroy" );
        $("#editModal input.special-ui").checkboxradio({
            icon: false
        });
        
    });

    // New action trigger
    $('#event-list').on('click','.day', function(e) {
    	var y = window.pageYOffset;
        $('#newModal').modal();
        $('#newModal #nmode0').prop('checked', true);
        $('#newModal #tva0-new').prop('checked', true);
        $('#newModal #provision-new').prop('checked', false);
        $('#newModal input[name="posy"]').val(y);
        $('#newModal input[name="datep"]').val($(this).find('input[name="current_date"]').val());
        $('#newModal input[name="label"]').focus();
        $('#newModal input[name="color"]').val('');
        $('select.special-select').select2("destroy");
        $('select.special-select').select2({
    	    minimumResultsForSearch:4
        });
        $("#newModal input.special-ui").checkboxradio( "destroy" );
        $("#newModal input.special-ui").checkboxradio({
            icon: false
        });
    });

    // SET FOCUS bootstrap 3
    $('#newModal').on('shown.bs.modal', function () {
        $(this).find('input[name="label"]').focus();
    })
    $('#editModal').on('shown.bs.modal', function () {
        $(this).find('input[name="amount"]').focus();
    })
    
    // Delete Case
    $('#delete-event').click(function(){
        $('#editModal input[name="action"]').val('delete');
        $('#editModal form').submit();
    });

    // Datepicker for date
    $('#new-date').datepicker();
    $('#new-date-facture').datepicker();
    $('#edit-date-facture').datepicker();
    
    // Radio
    $('#newModal input.special-ui').checkboxradio({
        icon: false
    });
    $("#editModal input.special-ui").checkboxradio({
        icon: false
    });

    $('select.special-select').select2({
	    minimumResultsForSearch:4
    });
    
    // Waiting-payments heigh
    // Move change waiting payments position
    $(function() {
    	function movewaiting($sidebar, $window, offset, topPadding) {
    	    var wH = $window.height();
    	    $('#waiting-payments .days').height(wH - 100);
    	    console.log(wH);
            if ($window.scrollTop() > offset.top - 50) {
                $sidebar.stop().animate({
                    marginTop: $window.scrollTop() - offset.top + topPadding
                },0);
            } else {
                $sidebar.stop().animate({
                    marginTop: 0
                },0);
            }
    	}
        var $sidebar   = $("#waiting-payments"), 
            $window    = $(window),
            offset     = $sidebar.offset(),
            topPadding = $('.navbar-fixed-top').height();

        $window.scroll(function() {
        	movewaiting($sidebar, $window, offset, topPadding);
        });
        
        // First start (if view already down with posY)
    	movewaiting($sidebar, $window, offset, topPadding);
        
    });
    
    
    // Change posY if already pass by param
    posy = $('#posy').val();
    if(posy > 0) {
    	// Go to current position
    	$(document).scrollTop(posy);
    }else{
    	// Go to current day
    	$(document).scrollTop($('.day.current').position().top);
    }
});