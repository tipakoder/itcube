//$('.header-slider').slick();

$(".dropdown-trigger").dropdown();
const elem = document.querySelector('.modal');
const instances = M.Modal.init(elem);


$(document).ready(function() {
    $('.carousel').carousel({
        numVisible: 3,
    });
});
$('.about-image-item').click(function() {
    const href = this.dataset.img;
    const modal = document.getElementById('image_modal').querySelector('img');
    modal.src = href;
    instances.open();
});
$('select').formSelect();
$('.about-image').slick({
    infinite: true,
    nextArrow: $('.prev'),
    dots: true,
    prevArrow: $('.next')
});

$('.partners-slider').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 4,

    responsive: [{
            breakpoint: 800,
            settings: {
                slidesToShow: 3,
            }
        },
        {
            breakpoint: 650,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 500,
            settings: {
                slidesToShow: 1,
            }
        },
    ]

})

window.onresize = resizing;

function resizing() {
    //if ()


    if ($(document).width() < 994) {
        document.getElementById('mobile-demo').classList.remove('hide-on-med-and-down')
        document.getElementById('mobile-demo').classList.add('sidenav');
        document.getElementById('mobile-demo').style = '';
    } else {
        document.getElementById('mobile-demo').style = '';
        document.getElementById('mobile-demo').classList.add('hide-on-med-and-down')
        document.getElementById('mobile-demo').classList.remove('sidenav');
    }
}

$('.question').click(function() {
    $(this).parent().find('.answer').slideToggle('slow');
})

// $('.header-slider').slick({
//     infinite: true,
// });
$('.mobile-demo li').click(function(e) {
    sideInstance
})

const side = document.querySelector('.sidenav');
const sideInstance = M.Sidenav.init(side);

$('.sidenav').sidenav();
$('.dir-href').click(function() {
    console.log(0)
    const dir = this.dataset.dir;
    $('.selected-direction').removeClass('selected-direction');
    $(this).addClass('selected-direction');
    $('.dir-current').addClass('dir-hide').removeClass('dir-current');
    $('.direction' + dir).addClass('dir-current').removeClass('dir-hide');
    if (this.dataset.steps === 'true') {
        $('.htgd').fadeOut(300);
        setTimeout(() => {
            $('.requisition').fadeOut(300, () => {
                $('.how-to-get-dir-' + dir).fadeIn(300);
                $('.how-to-get').fadeIn(300)
            })
        }, 301)

    } else {
        $('.how-to-get').fadeOut(300, () => $('.requisition').fadeIn());
        $('.htgd').fadeOut();
        //$('.requisition').fadeIn();

        //$('.get-it-now').fadeIn();

    }
})
$('.our-team').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3,
    nextArrow: $('.prev-team'),
    dots: true,
    prevArrow: $('.next-team')
});
$('.materialboxed').materialbox();
// const elem = document.querySelector('');
// let flkty;
// flkty = new Flickity( elem, {
//     // options
//     cellAlign: 'left',
//     contain: true,
//     wrapAround: true
// });

$('.header-slider-container button').click(function() {
    document.getElementById('info').appendChild(createBlock(info[this.dataset.name]));
    document.getElementById('info').style.display = 'block';
    setTimeout(() => {
            document.getElementById('info').style.opacity = '1';
        }, 0)
        //if (!this.parentElement.parentElement.classList.contains('selected-page')) {
        //    this.parentElement.parentElement.classList.add('selected-page');
        //    $('.header-slider').addClass('selected-slide');
        //    $('.header-slider-item').addClass('hidden-slide');
        //    $('.flickity-slider').css({transform: 'none'});
        //    setTimeout(function () {
        //        flkty.destroy()
        //    }, 320)
        //}
});

$(document).ready(function() {
    $("a").click(function() {
        var elementClick = $(this).attr("href")
        var destination = $(elementClick).offset().top;
        jQuery("html:not(:animated),body:not(:animated)").animate({
            scrollTop: destination
        }, 800);
        return false;
    });
});

function createBlock(data) {
    return;
    const div = document.createElement('div');
    let images = '';
    data.slider.forEach(i => { images += `<div class="slide-image">
                                    <img style="opacity: 0; width: 100%;" src="${i}" alt="">
                                </div>` });

    div.className = 'info-item';
    div.innerHTML = `
         <div class="container" style="height: 100%">
            <div class="row info-item-row">
                <div class="col-md-6 info-text">
                    <div class="close" onclick="closeInfoBlock()">
                    <svg enable-background="new 0 0 512.001 512.001" fill="#333" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><path d="m284.29 256 221.86-221.86c7.811-7.811 7.811-20.475 0-28.285s-20.475-7.811-28.285 0l-221.86 221.86-221.86-221.86c-7.811-7.811-20.475-7.811-28.285 0s-7.811 20.475 0 28.285l221.86 221.86-221.86 221.86c-7.811 7.811-7.811 20.475 0 28.285 3.905 3.905 9.024 5.857 14.143 5.857s10.237-1.952 14.143-5.857l221.86-221.86 221.86 221.86c3.905 3.905 9.024 5.857 14.143 5.857s10.237-1.952 14.143-5.857c7.811-7.811 7.811-20.475 0-28.285l-221.86-221.86z"/>
</div>
                    <div class="info-text-container">
                        <h3 class="header-info">${data.name}</h3>
                        <div class="info-partner">${data.partner}</div>
                        <div class="info-main">
                         <p>
                            ${data.description}
                         </p>
                        </div>
                        <a class="primary-btn modal-trigger slider-button" href="#directions">Подать заявку</a>
                        
                    </div>
                </div>
                <div class="col-md-6 info-image" style="">
                    <div class="info-slider">
                        ${images}
                    </div>
                </div>
            </div>
        </div>
    `;

    return div;
}
resizing();

function closeInfoBlock() {
    document.getElementById('info').style.opacity = '0';
    setTimeout(() => {
        document.getElementById('info').innerHTML = '';
        document.getElementById('info').style.display = 'none';
    }, 300);

}