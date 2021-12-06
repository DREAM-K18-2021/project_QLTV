<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Quản lý thư viện</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css'>
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/style/css/style.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/script/js/main.js">
</head>

<body>
<div class="container-fluid">
    <!-- PHẦN MENU -->
    <nav>
        <a id="menu-toggle" href="#" class="button">
            <span class="sr">Toggle Navigation</span>
            <span class="menu-bar bar1"></span>
            <span class="menu-bar bar2"></span>
            <span class="menu-bar bar3"></span>
        </a>
    </nav>
    <div class="_menu">
        <div class="menu__logo">
            <i class="fas fa-home"></i>
        </div>
        <section class="menu__list">
            <ul>
                <li>
                    <a href="{{url('layout/index')}}">
                        <article>
                            <section>
                                <i class="fas fa-book"></i>
                            </section>
                            <span>
                                    Quản lý
                                </span>
                        </article>
                    </a>
                </li>
                <li>
                    <a href="{{url('layout/theloai')}}">
                        <article>
                            <section>
                                <i class="fas fa-filter"></i>
                            </section>
                            <span>
                                    Thể loại
                                </span>
                        </article>
                    </a>
                </li>
                <li>
                    <a href="{{url('layout/muonsach')}}">
                        <article>
                            <section>
                                <i class="fas fa-handshake-slash"></i>
                            </section>
                            <span>
                                    Mượn sách
                                </span>
                        </article>
                    </a>
                </li>
                <li>
                    <a href="{{url('layout/sachdamuon')}}">
                        <article>
                            <section>
                                <i class="fas fa-address-book"></i>
                            </section>
                            <span>
                                    Sách đã mượn
                                </span>
                        </article>
                    </a>
                </li>
                <li>
                    <a href="{{url('layout/docgia')}}">
                        <article>
                            <section>
                                <i class="fas fa-user-check"></i>
                            </section>
                            <span>
                                    Độc giả
                                </span>
                        </article>
                    </a>
                </li>
            </ul>
        </section>
    </div>
    <!-- ***************************************************************************************************************** -->
    <!-- PHẦN NỘI DUNG -->
    <div class="content">
        <div class="home-page__products">
            <h2>Sách đã mượn</h2>
        </div>
        <div class="search--form">
            <form>
                <label>
                    <input type="text" placeholder="Bạn muốn tìm gì...">
                </label>
                <label>
                    <button>
                        <i class="fas fa-search"></i>
                    </button>
                </label>
            </form>
        </div>

        <div class="books_item">
            @if(session('thongbao'))
                <div class="alert alert-success ">
                    {{session('thongbao')}}
                </div>
            @endif
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên sách</th>
                    <th>Mã sách</th>
                    <th>Tên độc giả</th>
                    <th>Mã độc giả</th>
                    <th>Số phiếu</th>
                    <th>Ngày mượn</th>
                    <th>Trả sách</th>
                </tr>
                </thead>
                <tbody>
                @foreach($Tbl_sachdamuon as $key => $sdm)
                    <tr>
                        <td>{{$key + 1}}</td>
                        <td>{{$sdm -> tensach}}</td>
                        <td>{{$sdm -> masach}}</td>
                        <td>{{$sdm -> tendocgia}}</td>
                        <td>{{$sdm -> madocgia}}</td>
                        <td>{{$sdm -> sophieu}}</td>
                        <td>{{$sdm -> ngaymuon}}</td>
                        <td>
                            <form action="/delete/trasach/{{$sdm -> id}}" method="post"
                                  onclick="return confirm('Xác nhận trả sách !') ">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger" type="submit">Trả sách</button>
                            </form>
                            {{--                        <button type="button" class="btn btn_book btn-danger delete_book-items">Trả sách</button>--}}
                            {{--                        <div class="delete_book">--}}
                            {{--                            <div class="card">--}}
                            {{--                                <section>Bạn có muốn trả sách?</section>--}}
                            {{--                                <div class="button_yes-no">--}}
                            {{--                                    <div>--}}
                            {{--                                        <button type="button" class="btn btn-info close_btn">Hủy</button>--}}
                            {{--                                    </div>--}}
                            {{--                                    <div>--}}
                            {{--                                        <form action="/delete/trasach/{{$sdm -> id}}" method="post" onsubmit="return ConfirmDelete( this )">--}}
                            {{--                                            @method('DELETE')--}}
                            {{--                                            @csrf--}}
                            {{--                                            <button class="btn btn-danger" type="submit">Trả sách</button>--}}
                            {{--                                        </form>--}}

                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            {{--                        </div>--}}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>


</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>


</html>
