const $btn = document.querySelector('#btn'),
    $checkbox = document.querySelector('#input');
if ($btn != null)
{
    $btn.style.backgroundColor = '#adb6a2';

    $checkbox.addEventListener('change', () => {
        if ($checkbox.checked) {
            $btn.disabled = false;
            $btn.style.backgroundColor = '#9AD351';
            $btn.style.borderColor = '#7E9E55'
        } else {
            $btn.disabled = true;
            $btn.style.backgroundColor = '#adb6a2';
            $btn.style.borderColor = '#83897D'
        }
    });

}

const $footerBtn = document.querySelector('#footerBtn'),
    $footerCheckbox = document.querySelector('#footerCheckbox');

$footerBtn.style.backgroundColor = '#adb6a2';

$footerCheckbox.addEventListener('change', () => {
    if ($footerCheckbox.checked) {
        $footerBtn.disabled = false;
        $footerBtn.style.backgroundColor = '#9AD351';
        $footerBtn.style.borderColor = '#7E9E55'
        $footerBtn.addEventListener('mouseover', () => {
            $footerBtn.style.backgroundColor = '#282828';
            $footerBtn.style.color = '#fff';
        })
        $footerBtn.addEventListener('mouseout', () => {
            $footerBtn.style.backgroundColor = '#9AD351';
            $footerBtn.style.color = '#282828';
        })
    } else {
        $footerBtn.disabled = true;
        $footerBtn.style.backgroundColor = '#adb6a2';
        $footerBtn.style.borderColor = '#83897D'
    }
});
