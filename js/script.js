function showTrailer(trailer) {
    var modal = $('#trailerModal');
    var video = $('#trailerVideo');
    video.attr('src', trailer);
    modal.modal('show');
    video[0].play();
    modal.on('hidden.bs.modal', function () {
        video[0].pause();
        video[0].currentTime = 0;
        video.attr('src', '');
    });
}
