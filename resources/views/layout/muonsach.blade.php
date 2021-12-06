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
        <div class="result_user">
            <section class="user--info">
                <h2>Mượn Sách</h2>
                <form action="{{url('/add-muonsach')}}" method="post">
                    @csrf
                    <div class="_card--form">
                        <div class="input-contact">
                            <label>
                                <input type="text" name="tensach" placeholder="Tên sách...">
                                <section>
                                    Tên sách
                                </section>
                            </label>
                            <p>{{$errors->first('tensach')}}</p>
                        </div>
                        <div class="input-contact">
                            <label>
                                <input type="text" name="masach" placeholder="Mã sách...">
                                <section>
                                    Mã sách
                                </section>
                            </label>
                            <p>{{$errors->first('masach')}}</p>
                        </div>
                        <div class="input-contact">
                            <label>
                                <input type="text" name="tendocgia" placeholder="Tên độc giả">
                                <section>
                                    Tên độc giả
                                </section>
                            </label>
                            <p>{{$errors->first('tendocgia')}}</p>
                        </div>
                        <div class="input-contact">
                            <label>
                                <input type="text" name="madocgia" placeholder="id...">
                                <section>
                                    Mã độc giả
                                </section>
                            </label>
                            <p>{{$errors->first('madocgia')}}</p>
                        </div>
                        <div class="input-contact">
                            <label>
                                <input type="text" name="sophieu" placeholder="- 01">
                                <section>
                                    Số phiếu
                                </section>
                            </label>
                            <p>{{$errors->first('sophieu')}}</p>
                        </div>
                        <div class="input-contact">
                            <label>
                                <input type="date" name="ngaymuon">
                                <section>
                                    Ngày Mượn
                                </section>
                            </label>
                            <p>{{$errors->first('ngaymuon')}}</p>
                        </div>

                        <article class="btn--borrow_book">
                            <button type="submit" class="btn btn-primary">
                                Mượn sách
                            </button>
                        </article>
                    </div>
                </form>
            </section>
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
