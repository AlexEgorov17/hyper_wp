document.addEventListener('DOMContentLoaded', () => {
    console.info('DOMContentLoaded');
    let activeSlideIdx = 0;
    const sliderElementsWrappers = document.getElementsByClassName('why-we-cards');
    const sliderControls = document.getElementsByClassName('slider-control');
    const sliderStatus = document.getElementById('slider-status');
    const paginationBtns = document.getElementsByClassName('page-numbers');

    if(sliderControls.length) {
        // left arrow
        sliderControls[0].addEventListener('click', () => {
            console.info('Click on Left Arrow')
            setActiveSlide(activeSlideIdx - 1);
        })

        // right arrow
        sliderControls[1].addEventListener('click', () => {
            console.info('Click on Right Arrow')
            setActiveSlide(activeSlideIdx + 1);
        })     
        setInterval(() => {
            setActiveSlide(activeSlideIdx + 1);
        }, 10000);   
    }


    function setActiveSlide(idx) {
        if(idx < 0) idx = sliderElementsWrappers.length - 1;
        if(sliderElementsWrappers.length <= idx) idx = 0;

        if(sliderElementsWrappers[activeSlideIdx] && sliderElementsWrappers[idx]) {
            sliderElementsWrappers[activeSlideIdx].style.display = 'none';
            activeSlideIdx = idx;
            sliderElementsWrappers[activeSlideIdx].style.display = 'flex';
            updateSliderStatus();
        } else console.error(`idx ${activeSlideIdx} || ${idx} not found`);
    }

    updateSliderStatus = () => {
        if(sliderStatus != null) sliderStatus.innerText = `${activeSlideIdx+1}/${sliderElementsWrappers.length}`;
    }

    jQuery( function( $ ){
        let trigger = $('#hamburger'),
            bg = $('.header-prompt'),
            loginModal = $('.modal-login-wrapper'),
            logo = $('#logo'),
            body = $('body'),
            isClosed = true;

        $('.modal-background').click(function() {
            $(loginModal).fadeOut();
        })

        $('.modal-content-header-close').click(function() {
            $(loginModal).fadeOut();
        })

        $('#btn-lk').click(function() {
            $(loginModal).fadeIn();
        });
        trigger.click(burgerTime);

        function burgerTime() {
            if (isClosed == true) {
                trigger.removeClass('is-open');
                trigger.addClass('is-closed');
                bg.removeClass('show-prompt')
                body.css({overflow: 'unset'})
                logo.css({opacity: '1'})
                isClosed = false;
            } else {
                trigger.removeClass('is-closed');
                trigger.addClass('is-open');
                bg.addClass('show-prompt')
                body.css({overflow: 'hidden'})
                logo.css({opacity: '0'})
                isClosed = true;
            }
        }

        $('#form-email').submit(function(e) {
            e.preventDefault();

            const form = $(this);
            $.ajax({
                action: 'send_email',
                url : form.attr('action'), // обработчик
                data : form.serialize()+'&action=send_email', // данные
                type : form.attr('method'), // тип запроса
                success : function( data ){
                    alert('Вы успешно отправили свой вопрос!');
                }
            });
        })
        $( '#filter' ).submit(function(e){
            e.preventDefault();
            setPage(1);
            var filter = $(this);
            $.ajax({
                url : filter.attr('action'), // обработчик
                data : filter.serialize(), // данные
                type : 'POST', // тип запроса
                success : function( data ){
                    $( '.news-wrapper' ).html(data);
                }
            });
            return false;
        });

        let paginationInited = false;
        requestNews();

        function requestNews() {
            $.ajax({
                url : $( '#filter' ).attr('action'), // обработчик
                data : $( '#filter' ).serialize(), // данные
                type : 'POST', // тип запроса
                success : function( data ){
                    $( '.news-wrapper' ).html(data);
                    if(!paginationInited) initPagination();
                }
            });
        }

        function initPagination() {
            paginationInited = true;

            for(const idx in paginationBtns) {
                const btn = paginationBtns[idx];
                if(btn && btn.addEventListener) {
                    btn.addEventListener('click', (e) => {
                        e.preventDefault();
                        const page = Number(btn.innerHTML)
                        if(!isNaN(page)) {
                            setPage(page)
                            requestNews();
                        }
                    })                    
                }
            }
        }

        function setPage(page) {
            const pageElement = document.getElementById('paged');
            let prev = pageElement.getAttribute('value');
            pageElement.setAttribute('value', page);

            for(const idx in paginationBtns) {
                const btn = paginationBtns[idx];
                if(btn) {
                    if(btn.innerHTML == prev) {
                        btn.classList.remove('current');
                    } else if(btn.innerHTML == page) {
                        btn.classList.add('current');
                    }
                }
            }
        }
    });
    
    updateSliderStatus();
})