
    
    $(document).ready(function(){
      var minDate = new Date();
      $("#comeco").datepicker({
        uiLibrary: 'bootstrap4',
        iconsLibrary: 'fontawesome',
        showAnim: 'drop',
        numberOfMonth: 1,
        minDate: minDate,
        dateFormt:'dd/mm/yy',
        onClose: function(selectedDate){
          $('#final').datepicker("option","minDate",selectedDate);
        }
      });

      $("#final").datepicker({
        showAnim: 'drop',
        uiLibrary: 'bootstrap4',
        iconsLibrary: 'fontawesome',
        numberOfMonth: 1,
        minDate: minDate,
        dateFormt:'dd/mm/yy',
        onClose: function(selectedDate){
          $('#comeco').datepicker("option",selectedDate);
        }
      });



    });
  