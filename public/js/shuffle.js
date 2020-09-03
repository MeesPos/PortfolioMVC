let Shuffle = window.Shuffle;
let element = document.querySelector('.projectShuffle');
let sizer = element.querySelector('.my-sizer-element');

let shuffleInstance = new Shuffle(element, {
    itemSelector: '.picture-item',
    sizer: sizer
});

$("#all").on("click", function () {
    shuffleInstance.filter();
    $('button.activeProject').removeClass('activeProject');
    $(this).addClass("activeProject");
});
$("#btn-websites").on("click", function () {
    shuffleInstance.filter('website');
    $('button.activeProject').removeClass('activeProject');
    $(this).addClass("activeProject");
});
$("#btn-city").on("click", function () {
    shuffleInstance.filter('city');
    $('button.activeProject').removeClass('activeProject');
    $(this).addClass("activeProject");
});
$("#btn-nature").on("click", function () {
    shuffleInstance.filter('nature');
    $('button.activeProject').removeClass('activeProject');
    $(this).addClass("activeProject");
});