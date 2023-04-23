function onMarqueEntry(entry) {
  entry.forEach(change => {
    if (change.isIntersecting) {
      console.log(хуй);
      console.log(change);
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
    
      console.log(change);
    if (change.isIntersecting) {
      if(change.target.querySelectorAll('.glow').length>0) {
        const glowElements = document.querySelectorAll('.glow');
        console.log(glowElements);
        const ledObserver = new IntersectionObserver(entries => {
          let timeOutRate = 1000;
          entries.forEach(entry => {
  
            // если элемент в зоне видимости и его свойство display равно none
            if (entry.target.classList.contains('glow')) {
              // изменяем свойство display на block
             setTimeout( () => {entry.target.style.display = 'block'},timeOutRate);
             timeOutRate = timeOutRate + 1000;
            }
          });
        });
        glowElements.forEach(element => {
            ledObserver.observe(element);
          });
      }
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
//   

// // создаем объект наблюдателя за изменением видимости элементов
// 
//   
//   // для каждого элемента в списке заметок, который пересекается с видимой областью

// });

// // добавляем каждый элемент в список наблюдаемых элементов
// 
