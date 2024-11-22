
//# sourceMappingURL=main.js.map

function playVideo(button) {
    const wrapper = button.closest('.how-to-play__video-wrapper');
    const videoContainer = wrapper.querySelector('.video-container');

    button.style.display = 'none';
    wrapper.querySelector('h5').style.display = 'none';
    wrapper.querySelector('p').style.display = 'none';

    videoContainer.style.display = 'block';
}