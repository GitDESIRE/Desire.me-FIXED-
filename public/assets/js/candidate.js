const mainContainer = document.querySelector('.invitation');
const form = document.querySelector('.personal-data');

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
                            });
                        } else {
                            const formHtml = form.innerHTML;
                            mainContainerHtml = mainContainer.innerHTML;
                            mainContainer.innerHTML =
                                `<h1 class="title">Спасибо за обращение!</h1>
                         <p>Мы обрабатываем вашу анкету. В ближайшее время наш аккаунт-менеджер свяжется с вами. Хорошего дня!</p>`;
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
