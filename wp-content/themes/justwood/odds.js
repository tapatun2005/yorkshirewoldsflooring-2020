var $j = jQuery.noConflict();

$j(function(){
    // $j('#cycleright').cycle({
		// fx: 'fade' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
    // });
    // $j('#cycleleft').cycle({
		// fx: 'fade' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
    // });

    
    var galleryRight = document.querySelector('#cycleright')
    var galleryLeft = document.querySelector('#cycleleft')

    function setGallery(selector) {
      var imgs = selector.querySelectorAll('img')
      var length = imgs.length - 1

      var count = 0

      setInterval(function(){
          for(var i = 0; i < imgs.length; i++) {
            imgs[i].classList.add('is-remove')
          }
          imgs[count].classList.add('is-active')

          if (count === length) {
            count = 0
          } else {
            count += 1
          }
          
      }, 5000)

    } 

    if (galleryRight) {
      setTimeout(function(){
        setGallery(galleryRight)
      }, 250)
    }

    if (galleryLeft) {
      setGallery(galleryLeft)
    }

});
