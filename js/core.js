$(document).ready(function() {

    $('#datepicker-example1').Zebra_DatePicker();

    $('#datepicker-example2').Zebra_DatePicker({
        direction: 1    // boolean true would've made the date picker future only
                        // but starting from today, rather than tomorrow
    });

    $('#datepicker-example3').Zebra_DatePicker({
        direction: true,
        disabled_dates: ['* * * 0,6']   // all days, all monts, all years as long
                                        // as the weekday is 0 or 6 (Sunday or Saturday)
    });

    $('#datepicker-example4').Zebra_DatePicker({
        direction: [1, 10]
    });

    $('#datepicker-example5').Zebra_DatePicker({
        // remember that the way you write down dates
        // depends on the value of the "format" property!
        direction: ['2012-08-01', '2012-08-12']
    });

    $('#datepicker-example6').Zebra_DatePicker({
        // remember that the way you write down dates
        // depends on the value of the "format" property!
        direction: ['2012-08-01', false]
    });

    $('#datepicker-example7-start').Zebra_DatePicker({
        direction: true,
        pair: $('#datepicker-example7-end')
    });

    $('#datepicker-example7-end').Zebra_DatePicker({
        direction: 1
    });

    $('#datepicker-example8').Zebra_DatePicker({
        format: 'm-Y'
    });

    $('#datepicker-example9').Zebra_DatePicker({
        show_week_number: 'Wk'
    });

    $('#datepicker-example10').Zebra_DatePicker({
        view: 'years'
    });
/*------------------------------------------------------*/
    $('#datepicker-example0').Zebra_DatePicker({
        format: 'd-m-Y'
    });
	
 $('#datepicker-example1').Zebra_DatePicker({
        format: 'd-m-Y'
    });
 
  $('#datepicker-example2').Zebra_DatePicker({
        format: 'd-m-Y'
    });
  
   $('#datepicker-example3').Zebra_DatePicker({
        format: 'd-m-Y'
    });
   
    $('#datepicker-example4').Zebra_DatePicker({
        format: 'd-m-Y'
    });
	
	
	 $('#datepicker-example5').Zebra_DatePicker({
        format: 'd-m-Y'
    });
	 
	  $('#datepicker-example6').Zebra_DatePicker({
        format: 'd-m-Y'
    });
	  
	  
	   $('#datepicker-example7').Zebra_DatePicker({
        format: 'd-m-Y'
    });
	   
 $('#datepicker-example8').Zebra_DatePicker({
        format: 'd-m-Y'
    });
 
  $('#datepicker-example9').Zebra_DatePicker({
        format: 'd-m-Y'
    });
  
   $('#datepicker-example10').Zebra_DatePicker({
        format: 'd-m-Y'
    });
   
    $('#datepicker-example11').Zebra_DatePicker({
        format: 'd-m-Y'
    });
	
	 $('#datepicker-example12').Zebra_DatePicker({
        format: 'd-m-Y'
    });
	 
	  $('#datepicker-example13').Zebra_DatePicker({
        format: 'd-m-Y'
    });
	  
	  
	   $('#datepicker-example14').Zebra_DatePicker({
        format: 'd-m-Y'
    });
	   
	    $('#datepicker-example15').Zebra_DatePicker({
        format: 'd-m-Y'
    });

 $('#datepicker-example16').Zebra_DatePicker({
        format: 'd-m-Y'
    });
  $('#datepicker-example17').Zebra_DatePicker({
        format: 'd-m-Y'
    });


/*------------------------------------------------------	*/
	 $('#datepicker').Zebra_DatePicker({
        format: 'd-m-Y'
    });
	 
	 $('#datepicker1').Zebra_DatePicker({
        format: 'd-m-Y'
    });
	 
	  $('#datepicker2').Zebra_DatePicker({
        format: 'd-m-Y'
    });
	  
	   $('#datepicker3').Zebra_DatePicker({
        format: 'd-m-Y'
    });
	   
	    $('#datepicker4').Zebra_DatePicker({
        format: 'd-m-Y'
    });
		
		 $('#datepicker5').Zebra_DatePicker({
        format: 'd-m-Y'
    });
		 
		  $('#datepicker6').Zebra_DatePicker({
        format: 'd-m-Y'
    });
		   $('#datepicker7').Zebra_DatePicker({
        format: 'd-m-Y'
    });
	
	
	 $('#datepicker8').Zebra_DatePicker({
        format: 'd-m-Y'
    });
	 
	  $('#datepicker9').Zebra_DatePicker({
        format: 'd-m-Y'
    });
	    $('#datepicker99').Zebra_DatePicker({
        format: 'd-m-Y'
    });
	   $('#datepicker10').Zebra_DatePicker({
        format: 'd-m-Y'
    });
	 $('#datepicker-example121').Zebra_DatePicker({
        format: 'd-m-Y'
    });
	 
	  $('#datepicker-example122').Zebra_DatePicker({
        format: 'd-m-Y'
    });
	
	 $('#datepicker-example111').Zebra_DatePicker({
        format: 'M-Y'
    });
	 
	 
	 	 $('#datepicker-example112').Zebra_DatePicker({
        format: 'M-Y',
		direction: -1
		 
    });
	 
	 
	  $('#datepicker-examples111').Zebra_DatePicker({
        format: 'm-Y'
    });


$('#datepicker-example101').Zebra_DatePicker({
        format: 'Y'
    });
 

   

    
});