var url_api = "/api/booking_system";
// console.log("url_api : ", url_api);

$(document).ready(function () {
    $("#fetchRoomsBtn").click(function () {
        $.ajax({
            url: url_api,
            method: "GET",
            dataType: "json",
            success: function (data) {
                var output = "";
                if (data.length === 0) {
                    output = "<p>No rooms found.</p>";
                } else {
                    output = "<ul>";
                    $.each(data, function (index, room) {
                        output += "<li>" + room.name + "</li>";
                    });
                    output += "</ul>";
                }
                $("#roomsOutput").html(output);
            },
            error: function (xhr, status, error) {
                console.error("Error fetching rooms:", error);
                $("#roomsOutput").html("<p>Error loading rooms.</p>");
            },
        });
    });
});
