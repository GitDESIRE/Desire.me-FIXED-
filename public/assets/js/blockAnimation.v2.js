function onMarqueEntry(entry) {
  entry.forEach(change => {
    if (change.isIntersecting) {
      change.target.classList.add('marque-show');
    }
  });
}
let options = { threshold: [0.3] };
let observer = new IntersectionObserver(onMarqueEntry, options);
let elements = document.querySelectorAll('.marque-animation');
for (let elm of elements) {
  observer.observe(elm);
}

function onBlockEntry(blockEntry) {
  blockEntry.forEach(change => {
    if (change.isIntersecting) {
      change.target.classList.add('block-show');
      $('.block-show').each(function(index){
        $(this).css({
          'transition-delay' : 0.1*(0.3 + index / 2) + 's' 
        });
      });
    }
  });
}
let blockOptions = { threshold: [0.1] };
let blocksObserver = new IntersectionObserver(onBlockEntry, blockOptions);
let blockElements = document.querySelectorAll('.block-animation');
for (let elm of blockElements) {
  blocksObserver.observe(elm);
}