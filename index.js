let carousel = document.getElementById('carouselImages');

let montandoOl = '';
for (let i = 0; i <= 49; i++) {
    montandoOl += `<li data-target="#myCarousel" data-slide-to="${i}" ${i == 0 ? 'class="active"' : ''}></li>`;
}

let montandoItems = '';
for (let i = 0; i <= 49; i++) {
    montandoItems += `<div class="carousel-item ${i == 0 ? 'active' : ''}">
                        <div class="container">
                            <div class="carousel-caption">
                                <div class="row">
                                    <div class="img_box">
                                        <figure><img src="images/slide/${i}.jpg" style="border-radius: 10px;"></figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>`;
}

carousel.innerHTML = `
    <div id="myCarousel" class="carousel slide testimonial_Carousel " data-ride="carousel">
        <ol class="carousel-indicators">
            ${montandoOl}
        </ol>
        <div class="carousel-inner">
            ${montandoItems}
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev" style="justify-content: left;">
            <span style="color: #000; font-size: 50px; margin-left: 15px; font-weight: bold;"> < </span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next" style="justify-content: right;">
            <span style="color: #000; font-size: 50px; margin-right: 15px; font-weight: bold;"> > </span>
        </a>
    </div>
`;