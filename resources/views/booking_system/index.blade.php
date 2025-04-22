<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ระบบจองห้องประชุม</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>


<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">ระบบจองห้องประชุม</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">หน้าหลัก</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/main">ตรวจสอบห้องว่าง</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">จัดการห้อง</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/home">เปลี่ยนบัญชี</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>

            </form>
          </div>
        </div>
      </nav>
        <div class="container py-2">
            <h1>ระบบจองห้องประชุม</h1>
        </div>

        <div class="container py-2">
            <button id="fetchRoomsBtn" class="btn btn-primary">Click Me</button>
            <div id="roomsOutput" class="mt-3"></div>
        </div>

{{--
    <div class="container">
        <table class="table table-bordered">
          <thead>
            <tr>
                <th>ID</th>
                <th>Room Name</th>
                <th>Capacity</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($test as $room)
                <tr>
                  <td>{{ $room->id }}</td>
                  <td>{{ $room->name }}</td>
                  <td>{{ $room->capacity }}</td>
                </tr>
            @endforeach
          </tbody>
        </table>
    </div> --}}
</body>
</html>


@vite('resources/js/booking_system/index.js')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
