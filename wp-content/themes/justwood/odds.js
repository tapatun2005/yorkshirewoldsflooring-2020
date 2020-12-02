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
      imgs[0].classList.add('is-active')
      var count = 1

      setInterval(function(){
          for(var i = 0; i < imgs.length; i++) {
            imgs[i].classList.remove('is-active')
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

    var toggleNav = document.querySelector('.nav-toggle');
    var mainNav = document.querySelector('.main-nav')
    var isNavActive = false

    toggleNav.addEventListener('click', function(){
      isNavActive = !isNavActive
      this.classList[isNavActive ? 'add' : 'remove']('is-active')
      mainNav.classList[isNavActive ? 'add' : 'remove']('is-active')
    })



    // Toggle home page

    var homepageBoxes = document.querySelectorAll('.hp-box')
    console.log(homepageBoxes)

    if (homepageBoxes.length) {
      for (var i = 0; i < homepageBoxes.length; i++) {

        var toggle = homepageBoxes[i].querySelector('._toggle')

        toggle.addEventListener('click', function(){
          var isActive = this.className.indexOf('is-active') === -1
          this.classList[isActive ? 'add' : 'remove']('is-active')
          this.parentNode.querySelector('._content').classList[isActive ? 'add' : 'remove']('is-active')
        })


        homepageBoxes[i].addEventListener('click', function(){
          if (window.innerWidth > 480) {
            window.location = this.dataset.href
          }
        })

      }
    }


});
