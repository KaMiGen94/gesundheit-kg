$(".navigation__link, .btn--animated, .footer__link--scroll, .header__author--btn, .popup__close, .popup__btn").on("click", function (event) {
  if (this.hash !== "") {
    // event.preventDefault();
    const hash = this.hash;
    $("html, body").animate(
      {
        scrollTop: $(hash).offset().top + 120,
      },
      800
    );
  }
});