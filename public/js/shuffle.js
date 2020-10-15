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
    shuffleInstance.filter('Website');
    $('button.activeProject').removeClass('activeProject');
    $(this).addClass("activeProject");
});
$("#btn-optimalisatie").on("click", function () {
    shuffleInstance.filter('Optimalisatie');
    $('button.activeProject').removeClass('activeProject');
    $(this).addClass("activeProject");
});