$(document).ready(function() {
    function DoubleSlider(container) {
        this.sliderOne = $(container).find("#slider-1");
        this.sliderTwo = $(container).find("#slider-2");
        this.displayValOne = $(container).find("#range1");
        this.displayValTwo = $(container).find("#range2");
        this.sliderTrack = $(container).find(".slider-track");
        this.sliderMaxValue = parseInt(this.sliderOne.attr('max'));
        this.minGap = 0;

        this.initSlider = function() {
            this.slideOne();
            this.slideTwo();

            this.sliderOne.on("input", this.slideOne.bind(this));
            this.sliderTwo.on("input", this.slideTwo.bind(this));
        };

        this.slideOne = function() {
            if (parseInt(this.sliderTwo.val()) - parseInt(this.sliderOne.val()) <= this.minGap) {
                this.sliderOne.val(parseInt(this.sliderTwo.val()) - this.minGap);
            }
            this.displayValOne.text(this.sliderOne.val());
            this.fillColor();
        };

        this.slideTwo = function() {
            if (parseInt(this.sliderTwo.val()) - parseInt(this.sliderOne.val()) <= this.minGap) {
                this.sliderTwo.val(parseInt(this.sliderOne.val()) + this.minGap);
            }
            this.displayValTwo.text(this.sliderTwo.val());
            this.fillColor();
        };

        this.fillColor = function() {
            const percent1 = (this.sliderOne.val() / this.sliderMaxValue) * 100;
            const percent2 = (this.sliderTwo.val() / this.sliderMaxValue) * 100;
            this.sliderTrack.css('background', `linear-gradient(to right, #dadae5 ${percent1}% , #01E45C ${percent1}% , #01E45C ${percent2}%, #dadae5 ${percent2}%)`);
        };

        this.initSlider();
    }

    $(".double-slider").each(function() {
        new DoubleSlider(this);
    });

     function handleDropdown($dropDown) {
        if ($dropDown.hasClass('click-dropdown')) {
            $dropDown.on('click', function(e) {
                e.preventDefault();

                let $parent = $(this).parent();
                let $dropdownMenu = $(this).next();

                if ($dropdownMenu.hasClass('dropdown-active')) {
                    $parent.removeClass('dropdown-open');
                    $dropdownMenu.removeClass('dropdown-active');
                } else {
                    closeDropdown();

                    $parent.addClass('dropdown-open');
                    $dropdownMenu.addClass('dropdown-active');
                }
            });
        }

        if ($dropDown.hasClass('hover-dropdown')) {
            $dropDown.hover(
                function() {
                    closeDropdown();

                    $(this).parent().addClass('dropdown-open');
                    $(this).next().addClass('dropdown-active');
                },
                function() {
                }
            );
        }
    }

    $('.dropdown-toggle').each(function() {
        handleDropdown($(this));
    });

    $(document).on('click', function(e) {
        if (!$(e.target).closest('.dropdown-container').length) {
            closeDropdown();
        }
    });

    function closeDropdown() {
        $('.dropdown-container').removeClass('dropdown-open');
        $('.dropdown-menu').removeClass('dropdown-active');
    }

    $('.dropdown-menu').on('mouseleave', function() {
        closeDropdown();
    });


        $('.achievements__row-cards').slick({
            horizontal: true,
            infinity: true,
            slidesToShow: 4,
            slidesToScroll: 4,
            prevArrow: $('.achievements-arrow-left'),
            nextArrow: $('.achievements-arrow'),
            variableWidth: true,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });


});



$(document).ready(function() {
    let mySlider,mySlider2
    $('.product_info-buttons-select').click(function(e) {

        e.preventDefault();
        if (mySlider || mySlider2) return;
        let answer = prompt('Выберите меню от 0 до 3');
        console.log(answer, typeof answer);

        $('.product_service').show();
        $(`#product_service${answer}`).show();

        mySlider = new rSlider({
            target: '#slider',
            values: [0, 5, 10, 15, 25, 50, 100, 1000],
            range: false, // range slider
            set:    null, // an array of preselected values
            scale:    true,
            labels:   true,
            tooltip:  false,
            width: `${$('.rank-slider').width() - 30}px`,
            onChange: updateSlider // callback
        });

        mySlider2 = new rSlider({
            target: '#slider2',
            values: ['Silver 1>5', 'Nova 1>5', 'MGL', 'Global', 'Boost 1>5', 'Nova 1>555', 'Nova 1>5', 'Nova 1>5', 'SGL 55', 'SGL'],
            range: true, // range slider
            set:    null, // an array of preselected values
            scale:    false,
            labels:   true,
            tooltip:  false,
            width: `${$('.rank-slider2').width() - 40}px`,
            onChange: updateSlider // callback
        });



    });

    $('.service_type-close').click(function(e) {

        $('.product_service').hide();
        $(`#product_service0`).hide();
    });
    $('.service_type_rank-close').click(function(e) {
       let id = $(this).attr('itemid');
       console.log(id)
        $('.product_service').hide();
        $(`#product_service${id}`).hide();
        mySlider.destroy()
        mySlider2.destroy()
        mySlider = null;
        mySlider2 = null;

    });




     let imgCount = $('.gallery img').length;

     for (let i = 0; i < imgCount; i++) {
         let pointElement = $('<span class="gallery_footer-point"></span>');
         $('.gallery_footer').append(pointElement);
     }

     $('.gallery_footer-point:first').addClass('point-active');

     $('.gallery_footer-point').on('click', function() {
        $('.gallery_footer-point').removeClass('point-active');

        $(this).addClass('point-active');

        let index = $(this).index();

        let $firstImage = $('.gallery img:first');

        if (index > 0) {
            $firstImage.appendTo('.gallery');
        } else {
            $firstImage.prependTo('.gallery');
        }
    });

    $('.gallery-previous').on('click', function() {
        let $firstImage = $('.gallery img:last');
        $firstImage.prependTo('.gallery');
        updatePoint(-1);
    });

    $('.gallery-next').on('click', function() {
        let $firstImage = $('.gallery img:first');
        $firstImage.appendTo('.gallery');
        updatePoint(1);
    });

    function updatePoint(at) {
        let activePoint = $('.gallery_footer-point.point-active');
        let currentIndex = activePoint.index();
        $('.gallery_footer-point').removeClass('point-active');
        let newIndex = currentIndex + at;

        if (newIndex >= imgCount) {
            newIndex = 0;
        }

        $('.gallery_footer-point').eq(newIndex).addClass('point-active');
    }
    $('#burger-btn').click(function() {
        $('.nav_burger-menu').toggle();
    });
    $('.mobile-filter').click(function(e) {
        e.preventDefault();

        $('.product_list-filters').show();
        $('.filter').toggle();
    });



    // Начальная настройка - скрыть email и изменить текст кнопки
    $('#emailInput').addClass('hidden');
    $('#submitButton').text('Войти');



    $('#loginLink').click(function(e) {
        e.preventDefault();
        $(this).addClass('active');
        $('#signupLink').removeClass('active');

        $('#emailInput').addClass('hidden');
        $('#submitButton').text('Войти');
        $('.password-recovery').show();
        $('.password-container').removeClass('hidden');

    });

    $('#signupLink').click(function(e) {
        e.preventDefault();

        $(this).addClass('active');
        $('#loginLink').removeClass('active');

        $('#emailInput').removeClass('hidden');
        $('#submitButton').text('Создать');
        $('.password-recovery').hide();
        $('.password-container').removeClass('hidden');

    });

    $('#password-recovery').click(function(e) {
        e.preventDefault();


        $('#emailInput').addClass('hidden');
        $('.password-container').addClass('hidden');

        $('#submitButton').text('Восстановить');
        $('.password-recovery').hide();

    });

    $('#togglePassword').click(function() {
        const passwordInput = $('#passwordInput');
        const type = passwordInput.attr('type') === 'password' ? 'text' : 'password';
        passwordInput.attr('type', type);
    });

function handleTogglePassword($toggleButton) {
    $toggleButton.on('click', function(e) {
        const $passwordInput = $(this).siblings('.newPassword');

        const type = $passwordInput.attr('type') === 'password' ? 'text' : 'password';
        $passwordInput.attr('type', type);
    });
}

$('.toggle-password').each(function() {
    handleTogglePassword($(this));
});

     $('#profileData').click(function() {
        $('.profile_settings').hide();
        $('.profile_history').hide();
        $('.profile_support').hide();
        $('.profile_settings').show();

        $('.profile_side-span').removeClass('active-tab');
        $(this).addClass('active-tab');
    });

    $('#purchaseHistory').click(function() {
        $('.profile_settings').hide();
        $('.profile_history').hide();
        $('.profile_support').hide();
        $('.profile_history').show();
        $('.profile_side-span').removeClass('active-tab');
        $(this).addClass('active-tab');
    });

    $('#profileMessage').click(function() {
        $('.profile_settings').hide();
        $('.profile_history').hide();
        $('.profile_support').hide();
        $('.profile_support').show();
        $('.profile_side-span').removeClass('active-tab');
        $(this).addClass('active-tab');
    });

    // $('.chat.profile_chat').hide();


    // Функция для проверки ширины окна и скрытия/отображения элемента
    function toggleChatVisibility() {
        let windowWidth = $(window).width();

        if (windowWidth < 1200) {
            $('.chat.profile_chat').hide();
        } else {
            $('.chat.profile_chat').show();
        }
    }
    toggleChatVisibility(); // Вызываем изначально

    $(window).resize(function() {
        toggleChatVisibility();
    });

    $('.chat_list-item').click(function(e) {
        e.preventDefault();
       $('.chat_list').hide();
       $('.chat.profile_chat').show();
    });

    $('.arrow-back').click(function(e) {
        e.preventDefault();
        $('.chat.profile_chat').hide();
        $('.chat_list').fadeIn();
        $('.profile_support .chat.profile_chat').fadeIn();
        $('.chat_list-item').show();
    });

    $('#supportOpen').click(function(e) {
        e.preventDefault();
        $('.help_center').show();
    });

    $('.help_center_header-close').click(function(e) {
        e.preventDefault();
        $('.help_center').hide();
        $('.help_center-success').hide();
    });


    $('.help_center_main-form-submit').click(function(e) {
        e.preventDefault();
        $('.help_center').hide();
        $('.help_center-success').show();
    });

$('#add-favourite').click(function(e) {
    e.preventDefault();

    $(this).toggleClass('add-favourite');
});




// Обработчик клика на элемент "Оставить отзыв"
$('#sendFeedback').click(function() {

    $(this).addClass('active');
    $(this).next().removeClass('active');
    $('#sendReview').text('Оставить отзыв')
});



// Обработчик клика на элемент "Задать вопрос"
$('#sendQuestion').click(function() {
    $(this).addClass('active');
    $(this).prev().removeClass('active');
    $('#sendReview').text('Задать вопрос')
});

// Обработчик клика на иконку "закрыть"
$('.review_container_header-close').click(function() {
    $('.review_container').hide();
});


$('#ratePicker svg').click(function() {
    let starIndex = $(this).index();
    $('#ratePicker svg').removeClass('selected');

    for (let i = 0; i <= starIndex; i++) $('#ratePicker svg:eq(' + i + ')').addClass('selected');
});

$('.feedback_container_reviews-send').click(function(e) {
    e.preventDefault();
    $('.review_container').show();
});





$( ".item_status-update" ).click(function() {
    if (  $( this ).css( "transform" ) == 'none' ){
    $(this).css("transform","rotate(360deg)");
    } else {
        $(this).css("transform","" );
    }

});
let item_information = null;

    // Показать .item_information при клике на .item_status.success
    $('.item_status .success').click(function(e) {
        e.preventDefault();

        if (item_information) {
            $(item_information).hide();
        }

        item_information = $(this).siblings('.item_information');
        $(item_information).show();
    });

    $('.item_information-close').click(function(e) {
        e.preventDefault();

        $(item_information).hide();
        item_information = null;
    });

    $('.language_selector-search input').on('input', function() {
        let searchText = $(this).val().toLowerCase();

        $('.language_selector_list-item').each(function() {
            let itemText = $(this).text().toLowerCase();

            if (itemText.includes(searchText)) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    });

    $('.profile_settings-item-language').click(function(e) {
        e.preventDefault();
        $('.language_selector').toggle()
    })
    $('#changePassword').click(function(e) {
        e.preventDefault();
        $('.password_change').toggle()
    })


  let valueDisplay = $('.input-value');

  $('.decrement').click(function() {
      let currentValue = valueDisplay.val();
      let minValue = 0;

      if (currentValue > minValue) {
          let newValue = currentValue - 1;
          valueDisplay.val(newValue);
      }
  });

  $('.increment').click(function() {
      let currentValue = valueDisplay.val();
      let maxValue = 1000;

      if (currentValue < maxValue) {
          let newValue = Number(currentValue) + 1;
          valueDisplay.val(newValue);
      }
  });



    const updateSlider = () => {

        valueDisplay.val(mySlider.getValue());
    };




});


// Обработчик для рейтинга
const ratePicker = document.getElementById('ratePicker');
const rateStars = ratePicker.getElementsByClassName('rate-star');
const ratingInput = document.getElementById('rating');
const submitLink = document.getElementById('sendReview');
const myForm = document.getElementById('myFormId');

let selectedRating = 0;

for (let i = 0; i < rateStars.length; i++) {
    rateStars[i].addEventListener('click', () => {
        selectedRating = i + 1;
        ratingInput.value = selectedRating;
        updateStarColors();
    });
}

submitLink.addEventListener('click', () => {
    myForm.submit();
});

function updateStarColors() {
    for (let i = 0; i < rateStars.length; i++) {
        if (i < selectedRating) {
            rateStars[i].style.fill = '#F44E51';
        } else {
            rateStars[i].style.fill = 'none';
        }
    }
}
