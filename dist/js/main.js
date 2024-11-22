
//# sourceMappingURL=main.js.map

function playVideo(button) {
    const wrapper = button.closest('.how-to-play__video-wrapper');
    const videoContainer = wrapper.querySelector('.video-container');

    button.style.display = 'none';
    wrapper.querySelector('h5').style.display = 'none';
    wrapper.querySelector('p').style.display = 'none';

    videoContainer.style.display = 'block';
}

document.addEventListener("DOMContentLoaded", () => {
    const items = document.querySelectorAll(".faqs-section__qa-block-item");

    items.forEach((item) => {
        const question = item.querySelector(".faqs-section__qa-block-question");
        const answer = item.querySelector(".faqs-section__qa-block-answer");
        const arrow = item.querySelector(".faqs-section__arrow-icon");

        question.addEventListener("click", () => {
            const isActive = answer.style.display === "block";

            items.forEach((otherItem) => {
                const otherAnswer = otherItem.querySelector(".faqs-section__qa-block-answer");
                const otherArrow = otherItem.querySelector(".faqs-section__arrow-icon");

                otherAnswer.style.display = "none";
                otherArrow.classList.remove("rotate");
            });

            if (!isActive) {
                answer.style.display = "block";
                arrow.classList.add("rotate");
            }
        });
    });
});