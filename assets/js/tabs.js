const togglers = document.querySelectorAll('.tab-toggle-btn');
const hidden = document.querySelectorAll('.invisible')

togglers.forEach((toggler) => {
    toggler.addEventListener('click', (e) => {
        
        e.target.classList.toggle('rotate');
        console.log(e.target.parentNode.parentNode.querySelector('.invisible').classList.contains('invisible'));
        console.log(e.target.parentNode.parentNode.parentNode);
        console.log(e.target.parentNode.parentNode.querySelectorAll('.invisible'));
        
        // e.target.parentNode.parentNode.classList.toggle('toggled')
        if (e.target.parentNode.parentNode.querySelector('.invisible').classList.contains('invisible')) {
            // e.target.parentNode.parentNode.querySelector('.invisible').classList.toggle('but-not-now');
            if ( e.target.parentNode.parentNode.parentNode.classList.contains('tab-container')) {

           
            e.target.parentNode.parentNode.parentNode.classList.toggle('tabs-item__expanded');
        } if (e.target.parentNode.parentNode.parentNode.classList.contains('tab-container')) {
            e.target.parentNode.parentNode.parentNode.querySelectorAll('.invisible').forEach((enigma) => {
                enigma.classList.toggle('but-not-now');
            }) } else {
                e.target.parentNode.parentNode.querySelectorAll('.invisible').forEach((enigma) => {
                    enigma.classList.toggle('but-not-now');
            })}
            
        } else {
            e.target.parentNode.parentNode.querySelector('.hidden-content').classList.remove('active');
        }
    })
});

// crossBtn.addEventListener('click', function() {
//     this.querySelector('.toggle-src').classList.toggle('rotate');
//     console.log('toggled');
// });