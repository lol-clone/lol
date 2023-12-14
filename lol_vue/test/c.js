// const container = document.querySelector(".best-container");
// const prevBtn = document.querySelector(".prev");
// const nextBtn = document.querySelector(".next"); 

// (function addEvent(){
//   prevBtn.addEventListener('click', translateContainer.bind(this, 1));
//   nextBtn.addEventListener('click', translateContainer.bind(this, -1));
// })();

// function translateContainer(direction){
//   const selectedBtn = (direction === 1) ? 'prev' : 'next';
//   container.style.transitionDuration = '500ms';
//   container.style.transform = `translateX(${direction * (100 / 5)}%)`;
//   container.ontransitionend = () => reorganizeEl(selectedBtn);
// }

// function reorganizeEl(selectedBtn) {
//   container.removeAttribute('style');
//   (selectedBtn === 'prev') ? container.insertBefore(container.lastElementChild, container.firstElementChild): container.appendChild(container.firstElementChild);
// }
// container.forEach((interest, imgnum)=>{
//     interest.addEventListener('click', ()=>{
//         butscroll(scroller=imgnum);
//     })
// });

// document.addEventListener('DOMContentLoaded', function () {
//     const track = document.querySelector('.carousel-track');
//     const items = document.querySelectorAll('.carousel-item');
//     const itemsPerGroup = 2; // 한 번에 넘어갈 아이템의 수
//     const groupWidth = 100 / itemsPerGroup; // 각 그룹의 너비 (백분율)

//     let currentIndex = 0;

// 	function updateCarousel() {
//         const translateXValue = -currentIndex * groupWidth;
//         track.style.transform = `translateX(${translateXValue}%)`;
//     }

//     function nextSlide() {
//         currentIndex = Math.min(currentIndex + 1, Math.ceil(items.length / itemsPerGroup) - 1);
//         updateCarousel();
//     }

//     function prevSlide() {
//         currentIndex = Math.max(currentIndex - 1, 0);
//         updateCarousel();
//     }

//     document.querySelector('.carousel-next').addEventListener('click', nextSlide);
//     document.querySelector('.carousel-prev').addEventListener('click', prevSlide);
// });

document.addEventListener('DOMContentLoaded', function () {
    const track = document.querySelector('.best-gird-box2');
    const items = document.querySelectorAll('.div-box');
    const itemsPerGroup = 2; // 한 번에 넘어갈 아이템의 수
    const groupWidth = 100 / itemsPerGroup; // 각 그룹의 너비 (백분율)

    let currentIndex = 0;

	function updateCarousel() {
        const translateXValue = -currentIndex * groupWidth;
        track.style.transform = `translateX(${translateXValue}%)`;
    }

    function nextSlide() {
        const lastGroupStartIndex = (Math.ceil(items.length / itemsPerGroup) - 1) * itemsPerGroup;
        if (currentIndex < lastGroupStartIndex) {
            currentIndex += itemsPerGroup;
            updateCarousel();
        }
		const lastGroupIndex = Math.ceil(items.length / itemsPerGroup) - 1;
        document.querySelector('.carousel-next1').style.display = currentIndex <= lastGroupIndex ? 'block' : 'none';
    }

    function prevSlide() {
        currentIndex = Math.max(currentIndex - itemsPerGroup, 0);
        updateCarousel();
		document.querySelector('.carousel-next1').style.display = 'block';
    }

	

    document.querySelector('.carousel-next1').addEventListener('click', nextSlide);
    document.querySelector('.carousel-prev1').addEventListener('click', prevSlide);
});