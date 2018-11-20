$.ajax({
    type: "POST",
    url: "./cabinetCheck.php",
    data: "",
    success:  function(data){
        for (var i = 0; i < data["length"]; i++) {
            $("#" + data[i]).css('background-color', 'red');
        }
    },
    dataType: "json"
});
