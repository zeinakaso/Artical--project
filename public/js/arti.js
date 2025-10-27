
// for slide
// ***************************************************

var swiper = new Swiper(".book_slider", {
  spaceBetween: 10,
  grabCursor:true,
  loop:true,
  pagination: {
  el: ".swiper-pagination",
  clickable:true,
  },

  breakpoints: {
    540: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },

 navigation: {
    nextEl:'.swiper-button-next',
    prevEl:'.swiper-button-prev'
 }

});
// end slide
// *****************************************************************

/* *************عندما بنروح الى الكارد من خلال الزر اضافة التاثير****** */
// ********************************************************
function highlightCard(bookId) {
    // تحديد الكارد المطلوب
    const card = document.getElementById('book-card-' + bookId);

    // تمرير الصفحة إلى مكان الكارد بسلاسة
    card.scrollIntoView({ behavior: 'smooth', block: 'center' });

    // إضافة التأثير
    card.classList.add('highlight');

    // إزالة التأثير بعد 2.5 ثانية
    setTimeout(() => {
        card.classList.remove('highlight');
    }, 2500);
}

// ********************************************************
