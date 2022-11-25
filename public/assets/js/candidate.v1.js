const mainContainerInvitation = document.querySelector('.invitation');
const formPersonalData = document.querySelector('.personal-data');

$(document).ready(function () {
    $('#personal-data').on('submit', function (e) {
            let formData = new FormData(this);
            e.preventDefault();

            if (window.FormData === undefined) {
                alert('В вашем браузере FormData не поддерживается')
            } else
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'POST',
                    url: '/newCandidate',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function (data) {
                        if (data.errors) {
                            jQuery.each(data.errors, function (key, value) {
                                jQuery('.' + String(key) + '_error').text(value[0]);
                                $('.' + String(key)).addClass('error');
                            });
                        } else {
                            const formHtml = formPersonalData.innerHTML;
                            mainContainerHtml = mainContainerInvitation.innerHTML;
                            mainContainerInvitation.innerHTML =
                                `
                                <div class="wrapper">
                                    <h1 class="title">Спасибо за обращение!</h1>
                                    <p>Мы обрабатываем вашу анкету. В ближайшее время наш аккаунт-менеджер свяжется с вами. Хорошего дня!</p>
                                </div>
                                `
                            ;
                            formPersonalData.innerHTML = ``;
                            const resetBtn = document.createElement('button');
                            resetBtn.className = 'reset-button';
                            resetBtn.innerText = 'Отправить повторно';
                            resetBtn.style.marginTop = '200px';
                            formPersonalData.appendChild(resetBtn);

                            resetBtn.addEventListener('click', (e) => {
                                e.preventDefault();
                                mainContainerInvitation.innerHTML = mainContainerHtml;
                                formPersonalData.innerHTML = formHtml;
                                document.location.reload(true);
                            });
                        }
                    },
                });
        }
    )
    ;
});


jQuery(function ($) {
    $('#tel').on('input', function () {
        $('.tel_error').text('');
        $('.telegram_error').text('');
        $(this).removeClass('error');
        $('.telegram').removeClass('error');
    });
});

jQuery(function ($) {
    $('#telegram').on('input', function () {
        $('.tel_error').text('');
        $('.telegram_error').text('');
        $(this).removeClass('error');
        $('.telegram').removeClass('error');
    });
});

jQuery(function ($) {
    $('#email').on('input', function () {
        $('.email_error').text('');
        $(this).removeClass('error');
        $('.email').removeClass('error');
    });
});
