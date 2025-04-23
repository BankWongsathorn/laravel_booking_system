var url_api = "/api/booking_system";

$(document).ready(function () {
    $.ajax({
        url: url_api,
        method: "GET",
        dataType: "json",
        success: function (data) {
            if (data.length === 0) {
                $("#roomsOutput").html(
                    "<p class='text-danger'>ไม่มีข้อมูลห้องประชุม</p>"
                );
                return;
            }

            let output = `
                    <table class="table table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th>ชื่อห้อง</th>
                                <th>สถานะ</th>
                            </tr>
                        </thead>
                        <tbody>
                `;

            data.forEach((room) => {
                const available =
                    room.available == 0
                        ? `<span class="badge bg-danger">ถูกจองแล้ว</span>`
                        : `<span class="badge bg-success">ว่าง</span>`;

                output += `
                        <tr>
                            <td>${room.name}</td>
                            <td>${available}</td>
                        </tr>
                    `;
            });

            output += `</tbody></table>`;
            $("#roomsOutput").html(output);
        },
        error: function (xhr, status, error) {
            console.error("Error fetching rooms:", error);
            $("#roomsOutput").html(
                "<p class='text-danger'>เกิดข้อผิดพลาดในการโหลดข้อมูล</p>"
            );
        },
    });
});
