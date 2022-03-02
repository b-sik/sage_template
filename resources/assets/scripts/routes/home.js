export default {
  init() {
    $('.carousel').carousel();
    $('.next').click(function () {
      $('.carousel').carousel('next');
      return false;
    });
    $('.prev').click(function () {
      $('.carousel').carousel('prev');
      return false;
    });
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
