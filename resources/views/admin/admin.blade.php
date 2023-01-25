<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>SPY</title>
</head>

<body>

    <div class="screen-cover d-none d-xl-none"></div>

    <div class="row">
        <div class="col-12 col-lg-3 col-navbar d-none d-xl-block">

            <aside class="sidebar">
                <a href="#" class="sidebar-logo">
                    <div class="d-flex justify-content-start align-items-center">
                        <img src="{{ asset('spy/image/1.png') }}">
                        <span>SPY</span>
                    </div>

                    <button id="toggle-navbar" onclick="toggleNavbar()">
                        <img src="./assets/img/global/navbar-times.svg" alt="">
                    </button>
                </a>

                <h5 class="sidebar-title">Daily Use</h5>

                <!-- <a href="./index.html" class="sidebar-item" onclick="toggleActive(this)"> -->
                <!-- <img src="./assets/img/global/grid.svg" alt=""> -->

                <a href="/role" class="sidebar-item" onclick="toggleActive(this)">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21 14H14V21H21V14Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M10 14H3V21H10V14Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M21 3H14V10H21V3Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M10 3H3V10H10V3Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                    <span>Role</span>
                </a>

                <h5 class="sidebar-title">Others</h5>

                <a href="/donasi" class="sidebar-item" onclick="toggleActive(this)">
                    <!-- <img src="./assets/img/global/box.svg" alt=""> -->
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21 16V8C20.9996 7.64927 20.9071 7.30481 20.7315 7.00116C20.556 6.69751 20.3037 6.44536 20 6.27L13 2.27C12.696 2.09446 12.3511 2.00205 12 2.00205C11.6489 2.00205 11.304 2.09446 11 2.27L4 6.27C3.69626 6.44536 3.44398 6.69751 3.26846 7.00116C3.09294 7.30481 3.00036 7.64927 3 8V16C3.00036 16.3507 3.09294 16.6952 3.26846 16.9988C3.44398 17.3025 3.69626 17.5546 4 17.73L11 21.73C11.304 21.9055 11.6489 21.9979 12 21.9979C12.3511 21.9979 12.696 21.9055 13 21.73L20 17.73C20.3037 17.5546 20.556 17.3025 20.7315 16.9988C20.9071 16.6952 20.9996 16.3507 21 16Z" stroke="#ABB3C4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M3.27002 6.96L12 12.01L20.73 6.96" stroke="#ABB3C4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 22.08V12" stroke="#ABB3C4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                        <span>Donasi</span>
                </a>
                <a href="#" class="sidebar-item" onclick="toggleActive(this)">
                    <!-- <img src="./assets/img/global/log-out.svg" alt=""> -->

                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 17L21 12L16 7" stroke="#ABB3C4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M21 12H9" stroke="#ABB3C4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M9 21H5C4.46957 21 3.96086 20.7893 3.58579 20.4142C3.21071 20.0391 3 19.5304 3 19V5C3 4.46957 3.21071 3.96086 3.58579 3.58579C3.96086 3.21071 4.46957 3 5 3H9" stroke="#ABB3C4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                    <span>Logout</span>
                </a>

            </aside>

        </div>


        <div class="col-12 col-xl-9">
            <div class="nav">
                <div class="d-flex justify-content-between align-items-center w-100 mb-3 mb-md-0">
                    <div class="d-flex justify-content-start align-items-center">
                        <button id="toggle-navbar" onclick="toggleNavbar()">
                            <img src="./assets/img/global/burger.svg" class="mb-2" alt="">
                        </button>
                        <h2 class="nav-title">Pengelolaan</h2>
                    </div>
                    <button class="btn-notif d-block d-md-none"><img src="./assets/img/global/bell.svg" alt=""></button>
                </div>

                <div class="d-flex justify-content-between align-items-center nav-input-container">
                    <div class="nav-input-group">
                        <input type="text" class="nav-input" placeholder="Search people, team, project">
                        <button class="btn-nav-input"><img src="./assets/img/global/search.svg" alt=""></button>
                    </div>

                    <button class="btn-notif d-none d-md-block"><img src="./assets/img/global/bell.svg" alt=""></button>
                </div>
            </div>

            <div class="content">
                <div class="row">
                    <div class="col-12">
                        <h2 class="content-title">Statistics</h2>
                        <h5 class="content-desc mb-4">Perhitungan Donasi</h5>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="statistics-card simple">

                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex flex-column justify-content-around align-items-start employee-stat">
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="statistics-card simple">

                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex flex-column justify-content-around align-items-start employee-stat">
                                    
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="statistics-card simple">

                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex flex-column justify-content-around align-items-start employee-stat">
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row mt-5 pb-5">
                    <div class="col-12">
                        <h2 class="content-title">People</h2>
                        <h5 class="content-desc mb-4">The rangers</h5>
                    </div>

                    <div class="">
                    <!-- On tables -->
                    <div class="caption">Donasi Details</div>
                    <a href="/tambah">Tambah</a>
                    <table class="styled-table">
                        <thead>
                            
                            <div class="tr">
                                <tr>
                                    <td>Nama</td>
                                    <td>No Telepon</td>
                                    <td>Bukti (gambar)</td>
                                    <td>Email</td>
                                    <td>Nominal</td>
                                    <td>Tanggal</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($donasi as $d)
                                <tr>
                                    <td>{{$d->nama}}</td>
                                    <td>{{$d->no_telp}}</td>
                                    <td><img src="{{asset('images/'.$d->gambar)}}" width="100" height="100"></td>
                                    <td>{{$d->email}}</td>
                                    <td>{{$d->nominal}}</td>
                                    <td>{{$d->tanggal}}</td>
                                    <td>
                                        <a href="/edit/{{$d->id}}">edit</a>
                                        <a href="/hapus/{{$d->id}}">Hapus</a>
                                    </td>
                                </tr>
                                @endforeach
                            </div>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script>
        const navbar = document.querySelector('.col-navbar')
        const cover = document.querySelector('.screen-cover')

        const sidebar_items = document.querySelectorAll('.sidebar-item')

        function toggleNavbar() {
            navbar.classList.toggle('d-none')
            cover.classList.toggle('d-none')
        }

        function toggleActive(e) {
            sidebar_items.forEach(function(v, k) {
                v.classList.remove('active')
            })
            e.closest('.sidebar-item').classList.add('active')

        }
    </script>
</body>

</html>