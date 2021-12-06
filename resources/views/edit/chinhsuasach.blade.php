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

    <div class="content">
        <div class="edit_card">

            <form action="/edit-sach/{{$Tbl_editsach->id}}" method="post">
                @csrf
                <h2>Chỉnh sửa sách</h2>
                <div class="_card--form">
                    <div class="input-contact">
                        <label>
                            <input type="text" name="tensach" value="{{$Tbl_editsach->tensach}}">
                            <section>
                                Tên sách
                            </section>
                        </label>
                    </div>
                    <div class="input-contact">
                        <label>
                            <input type="text" name="masach" value="{{$Tbl_editsach->masach}}">
                            <section>
                                Mã sách
                            </section>
                        </label>
                    </div>
                    <div class="input-contact">
                        <label for="">
                            <section>
                                Thể Loại
                            </section>
                        </label>
                        <select id="theloai" name="theloai">
                            @foreach($Tbl_theloai as $tl)
                                @if($Tbl_editsach->theloai == $tl->id)
                                    <option selected value="{{$tl->id}}">{{$tl->theloai}}</option>
                                @else
                                    <option value="{{$tl->id}}">{{$tl->theloai}}</option>
                                @endif
                            @endforeach

                        </select>
                    </div>
                    <div class="input-contact">
                        <label>
                            <input type="text" name="namxuatban" value="{{$Tbl_editsach->namxuatban}}">
                            <section>
                                năm xuất bản
                            </section>
                        </label>
                    </div>
                    <!-- <div class="input-contact">
                        <label>
                            <input type="text" name="ma-sach" placeholder="ms123">
                            <section>
                                mã sách
                            </section>
                        </label>
                    </div> -->
                    <div class="input-contact">
                        <label>
                            <input type="text" name="tacgia" value="{{$Tbl_editsach->tacgia}}">
                            <section>
                                tác giả
                            </section>
                        </label>
                    </div>
                    <div class="input-checkbox">
                        <section>
                            trạng thái
                        </section>
                        <form>
                            <input name="trangthai" type="radio" value="0"/>
                            <label for="">
                                Chưa mượn
                            </label>

                            <input name="trangthai" type="radio" value="1"/>
                            <label for="">
                                Đã mượn
                            </label>
                        </form>
                        <br>
                        {{$errors->first('trangthai')}}
                    </div>



                    <div class="button_edit">
                        <div class="button--close">
                            <button type="button" class="close-edit-card">
                                <a href="{{ URL::previous() }}" style="width: 100%;">Quay Lại</a>
                            </button>
                        </div>
                        <div class="button--submit">
                            <button type="submit">Xác nhận</button>
                        </div>
                    </div>
                </div>
            </form>

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
