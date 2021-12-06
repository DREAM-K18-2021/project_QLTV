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
            <h2>Danh sách độc giả</h2>
            <div class="create-book">
                <a class="btn-book" href="{{url('/add/docgia')}}">Thêm độc giả</a>
            </div>
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
                    <th>Tên độc giả</th>
                    <th>Mã độc giả</th>
                    <th>Lớp</th>
                    <th>SĐT</th>
                    <th>Chỉnh sửa</th>
                    <th>Xóa</th>
                </tr>
                </thead>
                <tbody>
                @foreach($Tbl_docgia as $key => $dg)
                    <tr>
                        <td>{{$key + 1}}</td>
                        <td>{{$dg -> tendocgia}}</td>
                        <td>{{$dg -> madocgia}}</td>
                        <td>{{$dg -> lop}}</td>
                        <td>{{$dg -> sodienthoai}}</td>
                        <td><a class="btn btn-info" href="/edit/docgia/{{$dg->id}}">Chỉnh sửa</a></td>
                        <td>
                            <form action="/delete/docgia/{{$dg -> id}}" method="post"
                                  onclick="return confirm('Xác nhận xóa !') ">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger" type="submit">Xóa</button>
                            </form>
                            {{--                        <button type="button" class="btn btn_book btn-danger delete_book-items">Xóa</button>--}}
                            {{--                        <div class="delete_book">--}}
                            {{--                            <div class="card">--}}
                            {{--                                <section>Bạn xác nhận xóa?</section>--}}
                            {{--                                <div class="button_yes-no">--}}
                            {{--                                    <div>--}}
                            {{--                                        <button type="button" class="btn btn-info close_btn">Hủy</button>--}}
                            {{--                                    </div>--}}
                            {{--                                    <div>--}}
                            {{--                                        <form action="/delete/docgia/{{$dg -> id}}" method="post" onsubmit="return ConfirmDelete( this )">--}}
                            {{--                                            @method('DELETE')--}}
                            {{--                                            @csrf--}}
                            {{--                                            <button class="btn btn-danger" type="submit">Xóa</button>--}}
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
