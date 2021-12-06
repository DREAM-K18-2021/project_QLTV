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
            <form action="/edit-theloai/{{$Tbl_edittheloai->id}}" method="post">
                @csrf
                <h2>Chỉnh sửa thể loại</h2>
                <div class="_card--form">
                    <div class="input-contact">
                        <label>
                            <input type="text" name="theloai" value="{{$Tbl_edittheloai->theloai}}">
                            <section>
                                Tên thể loại
                            </section>
                        </label>
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
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var menu = document.getElementById('menu-toggle'),
            toggled = false;

        menu.addEventListener('click', function () {
            if (!toggled) {
                this.className += " toggled";
                toggled = true;
                document.querySelector("._menu").classList.add("_menu--show");
            } else {
                this.className = this.className.replace(/\b\stoggled\b/, "");
                toggled = false;
                document.querySelector("._menu").classList.remove("_menu--show");
            }
        }, false);

        const deleteBookItems = document.querySelectorAll(".delete_book-items");

        deleteBookItems.forEach(function (item) {
            item.addEventListener('click', () => {
                document.querySelector(".delete_book").classList.add("edit_card--show");
            });
        });

        const closeDeleteBookItems = document.querySelectorAll(".close_btn");

        closeDeleteBookItems.forEach(function (item) {
            item.addEventListener('click', () => {
                document.querySelector(".delete_book").classList.remove("edit_card--show");
            });
        });

        // document.querySelector("").addEventListener('click', () => {
        //   document.querySelector(".delete_book").classList.remove("edit_card--show");
        // });


        const borrowBook = document.querySelector(".btn--borrow_book > button");
        if (borrowBook != null) {
            borrowBook.addEventListener('click', () => {
                document.querySelector(".create-borrow_book").classList.add("edit_card--show");
            });
        }

        const closeBorrowBook = document.querySelector(".create-borrow_book .button--close > button");
        if (closeBorrowBook != null) {
            closeBorrowBook.addEventListener('click', () => {
                document.querySelector(".create-borrow_book").classList.remove("edit_card--show");
            });
        }


        const payBook = document.querySelector(".btn--pay_book > button");
        if (payBook != null) {
            payBook.addEventListener('click', () => {
                document.querySelector(".create-pay_book").classList.add("edit_card--show");
            });
        }

        const closepayBook = document.querySelector(".create-pay_book .button--close > button");
        if (closepayBook != null) {
            closepayBook.addEventListener('click', () => {
                document.querySelector(".create-pay_book").classList.remove("edit_card--show");
            });
        }

    }, false);
</script>
</body>
</html>

