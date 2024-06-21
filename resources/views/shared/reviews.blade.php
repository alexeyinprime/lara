@php
    $Testimonials = [
        [
            'title'=>'Nice Guys',
            'review' => 'Все сделали как надо и не наебали!',
            'image' => 'person_1.jpg',
            'name' => 'John Doe',
            'rate' => 5,
        ],
        [
            'title' => 'Вполне приличные ребята',
            'review' => 'Рожи славянские, взяли не дорого. Смело рекомендую',
            'image' => 'person_2.jpg',
            'name' => 'Яшка цыган',
            'rate' => 4,
        ],
];

    @endphp

<!-- ======= Testimonials Section ======= -->
<section class="section border-top border-bottom">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-4">
                <h2 class="section-heading">Review From Our Users</h2>
            </div>
        </div>
        <div class="row justify-content-center text-center">
            <div class="col-md-7">

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
@foreach($Testimonials as $t)
                            <div class="swiper-slide">
                                <div class="review text-center">
                                   <x-stars :count="5" :rate="$t['rate']" />
                                    <h3>{{ $t['title'] }}</h3>
                                    <blockquote>
                                        <p>{{ $t['review'] }}</p>
                                    </blockquote>

                                    <p class="review-user">
                                        <img src="assets/img/{{ $t['image'] }}" alt="Image" class="img-fluid rounded-circle mb-3">
                                        <span class="d-block"></span>
                                        <span class="text-black">{{ $t['name'] }}</span>
                                    </p>

                                </div>
                            </div><!-- End testimonial item -->

@endforeach

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Testimonials Section -->
