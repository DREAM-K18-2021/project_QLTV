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
