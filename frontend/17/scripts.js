document.addEventListener('DOMContentLoaded', () => {
    // 1. События мыши (hover)
    const mouseHandler = (element) => {
        if (element) {
            element.addEventListener('mouseenter', () => 
                element.style.transform = 'scale(1.02)');
            element.addEventListener('mouseleave', () => 
                element.style.transform = 'scale(1)');
        }
    };
    document.querySelectorAll('.button, .style-primary-small').forEach(mouseHandler);

    // 2. События клавиатуры (форма)
    const emailInput = document.querySelector('.form-default input');
    if(emailInput) {
        emailInput.addEventListener('keypress', (e) => {
            if(e.key === 'Enter') {
                e.preventDefault();
                const btn = document.querySelector('.button-primary-b0');
                if(btn) btn.click();
            }
        });
    }

    // 3. Drag&Drop (исправленная версия)
    const initDragDrop = () => {
        const draggables = document.querySelectorAll('.column-6b, .column-6e, .column-71');
        draggables.forEach(item => {
            item.draggable = true;
            item.ondragstart = (e) => {
                e.dataTransfer.setData('text/plain', 'Dragged Item');
                item.style.opacity = '0.4';
            };
            item.ondragend = () => item.style.opacity = '1';
        });
    };
    initDragDrop();

    // 5. События прокрутки (рабочая версия)
    const scrollHandler = () => {
        document.querySelectorAll('.layout').forEach(layout => {
            const rect = layout.getBoundingClientRect();
            if(rect.top < window.innerHeight * 0.8) {
                layout.style.opacity = '1';
                layout.style.transform = 'translateY(0)';
                layout.style.transition = 'all 0.5s cubic-bezier(0.4, 0, 0.2, 1)';
            }
        });
    };
    window.addEventListener('scroll', scrollHandler);
    scrollHandler(); // Инициализация

    // 6. Сенсорные события (исправленная версия)
    const initTouch = () => {
        const slider = document.querySelector('.testimonial .container-84');
        if(!slider) return;

        let touchStartX = 0;
        
        slider.addEventListener('touchstart', e => {
            touchStartX = e.touches[0].clientX;
        }, {passive: true});

        slider.addEventListener('touchend', e => {
            const touchEndX = e.changedTouches[0].clientX;
            if(Math.abs(touchStartX - touchEndX) > 30) {
                console.log(touchStartX > touchEndX ? 'Свайп влево' : 'Свайп вправо');
            }
        }, {passive: true});
    };
    initTouch();

    // 7. Таймер (рабочая версия)
    const timerContainer = document.createElement('div');
    timerContainer.className = 'style-primary-small';
    timerContainer.style.cssText = `
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 9999;
        padding: 8px 16px;
    `;
    document.body.appendChild(timerContainer);

    let seconds = 604800; // 7 дней
    const updateTimer = () => {
        const days = Math.floor(seconds / 86400);
        const hours = Math.floor((seconds % 86400) / 3600);
        timerContainer.innerHTML = `<span class="button">До курсов: ${days}d ${hours}h</span>`;
        seconds--;
    };
    setInterval(updateTimer, 1000);
});