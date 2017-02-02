(function() {

    var ns = faulancer.namespace('tools');

    var domElems = {
        slideContainer: null,
        images: []
    };

    var fields = {
        counter: 0
    };

    var handler = {

        slideImages: function() {

            setTimeout(function() {

                var previous = domElems.images[fields.counter - 1];

                if (fields.counter === domElems.images.length) {
                    fields.counter = 0;
                    previous = domElems.images[domElems.images.length - 1];
                }

                var current = domElems.images[fields.counter];

                current.style.display = 'block';

                var image = new Image();
                image.src = current.dataset.src;

                image.onload = function() {

                    current.style.backgroundImage = 'url(' + current.dataset.src + ')';
                    current.classList.remove('fadeOut');
                    current.classList.add('fadeIn');

                    previous.classList.add('fadeOut');

                    current.style.zIndex = 1;
                    previous.style.zIndex = 0;

                    fields.counter++;

                    handler.slideImages();

                };

            }, 8000);

        }

    };

    ns.slider = {

        init: function() {

            domElems.slideContainer = document.getElementById('slideContainer');

            var images = domElems.slideContainer.childNodes;

            images.forEach(function(value) {

                if (!value.classList) {
                    return;
                }

                if (!value.classList.contains('image')) {
                    return;
                }

                domElems.images.push(value);

            });

            domElems.images[0].style.display = 'block';
            domElems.images[0].style.backgroundImage = 'url(' + domElems.images[0].dataset.src + ')';
            domElems.images[0].style.transitionDuration = '0s';
            domElems.images[0].style.opacity = 1;

            fields.counter = 1;
            handler.slideImages();

            domElems.images[0].style.transitionDuration = '5s';

        }

    };

    window.addEventListener('load', ns.slider.init);

})();