       
       lightGallery(document.getElementById('gallery'), {
        selector: '.item'
    });

    $('#gallery').justifiedGallery(
        {    
            rowHeight : 400,
            margins : 4,
            lastRow : 'justify',
            cssAnimation : false,
            imagesAnimationDuration	: 500
        }
    ).on("jg.complete", function() {
        $('.item').lightGallery();
    });

