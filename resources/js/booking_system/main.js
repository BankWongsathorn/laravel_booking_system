var url_api = "/api/main";

$(document).ready(function () {
    $.ajax({
        url: url_api,
        method: "GET",
        dataType: "json",
        success: function (data) {
            var tbody = $("#roomsTableBody");
            tbody.empty();

            if (data.length === 0) {
                tbody.append(
                    "<tr><td colspan='5' class='text-center'>ไม่มีข้อมูลห้องประชุม</td></tr>"
                );
                return;
            }

            data.forEach(function (room) {
                var statusBadge = room.available
                    ? '<span class="badge bg-success">ว่าง</span>'
                    : '<span class="badge bg-danger">ถูกจองแล้ว</span>';

                var actionButton = room.available
                    ? '<button class="btn btn-primary btn-sm btn-book" data-room-id="' +
                      room.id +
                      '">จอง</button>'
                    : '<button class="btn btn-secondary btn-sm" disabled>ไม่สามารถจองได้</button>';

                var row = `
                    <tr>
                        <td>${room.name}</td>
                        <td>${room.location}</td>
                        <td>${room.capacity} คน</td>
                        <td>${statusBadge}</td>
                        <td>${actionButton}</td>
                    </tr>
                `;
                tbody.append(row);
            });
        },
        error: function (xhr, status, error) {
            console.error("เกิดข้อผิดพลาดในการดึงข้อมูลห้องประชุม:", error);
            var tbody = $("#roomsTableBody");
            tbody.empty();
            tbody.append(
                "<tr><td colspan='5' class='text-center text-danger'>เกิดข้อผิดพลาดในการโหลดข้อมูล</td></tr>"
            );
        },
    });
});

$(document).on("click", ".btn-book", function () {
    var roomId = $(this).data("room-id");

    $.ajax({
        url: url_api,
        method: "POST",
        data: {
            room_id: roomId,
        },
        success: function (response) {
            alert("จองห้องสำเร็จ!");
            location.reload();
        },
        error: function (xhr, status, error) {
            console.error("เกิดข้อผิดพลาดในการจองห้อง:", error);
            alert("ไม่สามารถจองห้องได้ กรุณาลองใหม่อีกครั้ง");
        },
    });
});
