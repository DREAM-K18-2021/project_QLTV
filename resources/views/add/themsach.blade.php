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
        <div class="create_card">

            <form action="{{url('add-sach')}}" method="post">
                @method('POST')
                @csrf
                <h2>Thêm mới sách</h2>
                <div class="_card--form">
                    <div class="input-contact">
                        <label>
                            <input type="text" name="tensach" placeholder="Tên sách...">
                            <section>
                                Tên sách
                            </section>
                        </label>
                        <p type="hiden">{{$errors->first('tensach')}}</p>

                    </div>
                    <div class="input-contact">
                        <label>
                            <section>
                                Thể Loại
                            </section>

                        </label>
                        <select id="theloai" name="theloai">
                            <option name="truyentranh" selected value="">---- Chọn Sách ----</option>
                            @if(isset($Tbl_theloai))
                                @foreach($Tbl_theloai as $tl)
                                    <option name="truyentranh" value="{{$tl->id}}">{{$tl->theloai}}</option>
                                @endforeach
                            @endif
                        </select>
                        <p type="hiden">{{$errors->first('theloai')}}</p>

                    </div>
                    <div class="input-contact">
                        <label>
                            <input type="date" name="namxuatban">
                            <section>
                                năm xuất bản
                            </section>
                        </label>
                        <p type="hiden">{{$errors->first('namxuatban')}}</p>
                    </div>
                    <div class="input-contact">
                        <label>
                            <input type="text" name="masach" placeholder="Mã sách...">
                            <section>
                                mã sách
                            </section>
                        </label>
                        <p type="hiden">{{$errors->first('masach')}}</p>
                    </div>
                    <div class="input-contact">
                        <label>
                            <input type="text" name="tacgia" placeholder="Tên tác giả...">
                            <section>
                                tác giả
                            </section>
                        </label>
                        <p>{{$errors->first('tacgia')}}</p>
                    </div>
                    <div class="input-checkbox">
                        <section>
                            trạng thái
                        </section>
                        <form>
                            <input checked="checked" name="trangthai" type="radio" value="0"/>
                            <label for="">
                                Chưa mượn
                            </label>
                            <input name="trangthai" type="radio" value="1"/>
                            <label for="">
                                Đã mượn
                            </label>
                        </form>

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
