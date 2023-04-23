window.addEventListener('DOMContentLoaded', () => {
    function sizes(){
      const contentWidth = [...document.body.children].reduce((a, el) => Math.max(a, el.getBoundingClientRect().right), 0) - document.body.getBoundingClientRect().x;

      return {
        windowWidth:  document.documentElement.clientWidth,
        windowHeight: document.documentElement.clientHeight,
        pageWidth:    Math.min(document.body.scrollWidth, contentWidth),
        pageHeight:   document.body.scrollHeight,
        screenWidth:  window.screen.width,
        screenHeight: window.screen.height,
        pageX:        document.body.getBoundingClientRect().x,
        pageY:        document.body.getBoundingClientRect().y,
        screenX:     -window.screenX,
        screenY:     -window.screenY - (window.outerHeight-window.innerHeight),
      }}

      const togglers = document.querySelectorAll('.tab-toggle-btn');
      const hidden = document.querySelectorAll('.invisible')
      
   

    

    function initTabs() {
      
      const tabs = document.querySelectorAll('.tab-container');
      tabs.forEach((parent) => {
       parent.addEventListener("click", (e) => {
        
        
       
    // Проверяем, на каком элементе произошел клик
    if (e.target.closest('.tab__visible-part')) {
     
      e.target.closest('.tab-container').querySelector('.tab-toggle-btn').querySelector('.toggle-src').classList.toggle('rotate');
       e.target.closest('.tab-container').querySelectorAll('.invisible').forEach((hidden) => {
        
        e.target.closest('.tabs-item').classList.toggle('tabs-item__expanded');
        hidden.classList.toggle('but-not-now');
       });
    } else 
    if (e.target.closest('.hidden-part-container')) {
      e.target.closest('.hidden-part-container').querySelector('.tab-toggle-btn').querySelector('.toggle-src').classList.toggle('rotate');
      e.target.closest('.hidden-part-container').querySelectorAll('.invisible').forEach((hidden) => {
      
       hidden.classList.toggle('but-not-now');
      });
   }
      });
    }
);


         
         };
      

    
      
      // Вызываем функцию при загрузке страницы, чтобы добавить обработчики событий на все кнопки
      window.addEventListener("load", initTabs);

    const showBtn = document.querySelector('.btn-show');
    if (showBtn) showBtn.addEventListener('click', showProjects);

    function showProjects() {
        const hiddenCases = document.querySelectorAll('.cases-item:nth-child(n + 5)');
        showBtn.style.display = 'none';
        hiddenCases.forEach((hidCase) => {
            hidCase.style.display = 'block';
        });
    }

    

   // получаем все элементы с классом .glow

    
/***
* 2022.11.17
* 
* create function resize viewport and redesin .wrapper class css
* 
* @ahilespelid
*/
 //    let screen = sizes(), coef = screen.screenHeight / screen.windowHeight;
 //    //let _zoom = window.devicePixelRatio || window.screen.availWidth / document.documentElement.clientWidth, _height = window.innerHeight;
 //    let banner = $('section.banner'), 
 //        banner_title = $('.banner-title'),
 //        seo_banner_top = $('.seo-banner-top'),
 //        seo_banner_section = $('.seo-banner-section'), 
 //        banner_description_item = $('.banner-description-item'),
 //        banner_description_list = $('.banner-description-list');
        
 //    let fontSizeBannerTitle = (coef > 1) ? parseFloat(banner_title.css('font-size')) / coef : parseFloat(banner_title.css('font-size')) * coef,
 //        lineHeighteBannerTitle = (coef > 1) ? parseFloat(banner_title.css('line-height')) / coef : parseFloat(banner_title.css('line-height')) * coef,
 //        fontSizeBannerDeskItem = (coef > 1) ? parseFloat(banner_description_item.css('font-size')) / coef : parseFloat(banner_description_item.css('font-size')) * coef,
 //        lineHeighteBannerDeskItem = (coef > 1) ? parseFloat(banner_description_item.css('line-height')) / coef : parseFloat(banner_description_item.css('line-height')) * coef,
 //        gapBannerDeskList = (coef > 1) ? parseFloat(banner_description_list.css('gap')) / coef : parseFloat(banner_description_list.css('gap')) * coef;
 //        //console.log(coef);     

 //    function sectionBanner(coef=1){
 //        seo_banner_section.css('margin-top',  banner_title.css('margin-top'));
 //        seo_banner_top.css('margin-bottom',  banner_title.css('margin-bottom'));
 //        banner_title.css('font-size', 'calc('+fontSizeBannerTitle+'px / '+(coef/1.3)+')').css('line-height', 'calc('+lineHeighteBannerTitle+'px / '+(coef/1.3)+')');
 //        banner_description_item.css('font-size', 'calc('+fontSizeBannerDeskItem+'px / '+(coef/1.5)+')').css('line-height', 'calc('+lineHeighteBannerDeskItem+'px / '+(coef/1.5)+')');
 //        banner_description_list.css('gap', 'calc('+gapBannerDeskList+'px / '+(coef/1.5)+')');
 //    }

 //    sectionBanner(coef);

 //    $(window).resize(function(){let screenResize = sizes(), coefResize = screenResize.screenHeight / screenResize.windowHeight; sectionBanner(coefResize);});
 })

