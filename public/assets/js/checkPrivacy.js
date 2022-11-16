const $btn = document.querySelector('#btn'),
    $checkbox = document.querySelector('#input');
if ($btn != null)
{
    $btn.style.backgroundColor = '#adb6a2';

    $checkbox.addEventListener('change', () => {
        if ($checkbox.checked) {
            $btn.disabled = false;
            $btn.style.backgroundColor = '#9AD351';
            $btn.style.borderColor = '#9AD351'
        } else {
            $btn.disabled = true;
            $btn.style.backgroundColor = '#adb6a2';
            $btn.style.borderColor = '#83897D'
        }
    });
}