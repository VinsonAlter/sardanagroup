
$(document).ready(()=>{
     $("#tanggalBooking").datepicker({
        startDate: "+1d",
        format: "dd/mm/yyyy",
        daysOfWeekDisabled: "0",
        autoclose: true,
        todayHighlight: true,
    })
})
   