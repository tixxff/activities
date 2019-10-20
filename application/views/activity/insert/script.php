<script>
  $( function() {
    var start = $("#start_date");
    var end = $("#end_date");

    start.datepicker({
        dateFormat:'dd/mm/yy'
         
    });
    start.change(function() {
        end.datepicker("option", "minDate", getDate(start));
    });

    end.datepicker({
        dateFormat:'dd/mm/yy'
    });

    end.change(function() {
        start.datepicker("option", "maxDate", getDate(end));
    });

    function getDate(target) {
        var date = target.val();
        if(!date){
            data = null;
        }
      return date;
    }
});
// $(document).ready(function () {
    
// });
</script>