const fileBtn = document.querySelector('.file-button');
const fileBtnText = document.querySelector('.file-button-text');
const fileInput = document.querySelector('.file-input');
const mainContainer = document.querySelector('.main_container');
const form = document.querySelector('.newProject_form');

if (fileInput) {
    fileInput.addEventListener('change', updateButton);
}

function updateButton() {
    let curFile = fileInput.files;
    const cancelBtn = document.createElement('div');
    cancelBtn.className = 'fileCancel-button';
    const stroke1 = document.createElement('div');
    stroke1.className = 'fileCancel-button_stroke1';
    const stroke2 = document.createElement('div');
    stroke2.className = 'fileCancel-button_stroke2';
    cancelBtn.appendChild(stroke1);
    cancelBtn.appendChild(stroke2);
    fileInput.style.pointerEvents = 'none';
    fileBtn.style.border = '1px solid rgba(118, 118, 118, 0.3)';
    fileBtn.style.fontSize = '13px';
    fileBtn.style.background = '#fff';
    fileBtn.style.justifyContent = 'space-between';
    fileBtnText.textContent = curFile[0].name;
    fileBtn.appendChild(cancelBtn);

    cancelBtn.addEventListener('click', deleteFile);

    function deleteFile() {
        fileInput.value = '';
        fileInput.style.pointerEvents = 'auto';
        fileBtn.removeChild(cancelBtn);
        fileBtn.style.border = '1px solid #9AD351';
        fileBtn.style.fontSize = '16px';
        fileBtn.style.background = '';
        fileBtn.style.justifyContent = 'center';
        fileBtnText.textContent = 'Прикрепить файл';

        cancelBtn.removeEventListener('click', deleteFile);
    }
}

// TODO: когда будем отправлять запрос на сервер, переделать.

$(document).ready(function () {
    $('#form').on('submit', function (e) {
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
                    url: '/newOrder',
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
                            const formHtml = form.innerHTML;
                            mainContainerHtml = mainContainer.innerHTML;
                            mainContainer.innerHTML =
                                `<h1 class="title">Спасибо за обращение!</h1>
                                <p>Мы обрабатываем вашу заявку. В ближайшее время наш аккаунт-менеджер свяжется с вами. Хорошего дня!</p>`;
                            form.innerHTML = ``;
                            const resetBtn = document.createElement('button');
                            resetBtn.className = 'reset-button';
                            resetBtn.innerText = 'Отправить повторно';
                            resetBtn.style.marginTop = '200px';
                            form.appendChild(resetBtn);

                            resetBtn.addEventListener('click', (e) => {
                                e.preventDefault();
                                mainContainer.innerHTML = mainContainerHtml;
                                form.innerHTML = formHtml;
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
    $('.tel').on('input', function () {
        $('.tel_error').text('');
        $('.telegram_error').text('');
        $(this).removeClass('error');
        $('.telegram').removeClass('error');
    });
});

jQuery(function ($) {
    $('.telegram').on('input', function () {
        $('.tel_error').text('');
        $('.telegram_error').text('');
        $(this).removeClass('error');
        $('.telegram').removeClass('error');
    });
});

if (this.window.location.pathname === '/new-project') {
    this.document.querySelector('.header').style.background = '#282828'
}


