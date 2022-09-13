@extends('layouts.main')

@section('container')

<!-- home section starts  -->

<section class="home" id="home">

    <div class="swiper home-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="box" style="background: url(images/home-bg-1.jpg) no-repeat;">
                    <div class="content">
                        <span>Never Stop</span>
                        <h3>Exploring</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit unde ex molestias soluta consequatur saepe aliquam, excepturi delectus consequuntur minus!</p>
                        <a href="#" class="btn">get started</a>
                    </div>
                </div>
            </div>
 
            <div class="swiper-slide">
                <div class="box second" style="background: url(images/baru2.jpg) no-repeat;">
                    <div class="content-white">
                        <span>Make Tour</span>
                        <h3>Amazing</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit unde ex molestias soluta consequatur saepe aliquam, excepturi delectus consequuntur minus!</p>
                        <a href="#" class="btn">get started</a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box second" style="background: url(images/baru1.jpg) no-repeat;">
                    <div class="content-white">
                        <span>Explore The</span>
                        <h3>New World</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit unde ex molestias soluta consequatur saepe aliquam, excepturi delectus consequuntur minus!</p>
                        <a href="#" class="btn">get started</a>
                    </div>
                </div>
            </div>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>

<!-- home section ends -->

<!-- category section starts  -->

<section class="category">

    <h1 class="heading">{{ __('popular') }}</h1>

    <div class="box-container">

        <div class="box">
            <img src="images/bromo.gif" alt="">
            <h3>Mount Bromo</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum, id.</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="images/ijem.gif" alt="">
            <h3>Mount Ijen</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum, id.</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="images/malang.gif" alt="">
            <h3>Malang</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum, id.</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="images/surabaya.gif" alt="">
            <h3>Surabaya</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum, id.</p>
            <a href="#" class="btn">read more</a>
        </div>

    </div>

</section>

<!-- category section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <div class="image">
        <img src="images/about-img.jpg" alt="">
    </div>

    <div class="content">
        <h3>memorable outdoor experiences</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque voluptates corrupti natus necessitatibus beatae voluptatibus, deserunt quo soluta minima libero laborum, corporis error esse vitae placeat blanditiis reiciendis vel? Minima.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident dicta doloremque placeat porro, ipsam quia at beatae atque odit iste?</p>
        <a href="#" class="btn">read more</a>
    </div>

</section>

<!-- about section ends -->

<!-- reviews section starts  -->

<section class="reviews" id="reviews">

    <h1 class="heading">client's reviews</h1>

    <div class="swiper review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia quidem laborum pariatur alias, culpa illum quaerat, aliquid laboriosam voluptatem nisi repellat obcaecati, adipisci esse ab delectus dolorum ut recusandae ipsam?</p>
                <div class="user">
                    <img src="images/pic-1.png" alt="">
                    <div class="info">
                        <h3>john deo</h3>
                        <span>designer</span>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia quidem laborum pariatur alias, culpa illum quaerat, aliquid laboriosam voluptatem nisi repellat obcaecati, adipisci esse ab delectus dolorum ut recusandae ipsam?</p>
                <div class="user">
                    <img src="images/pic-2.png" alt="">
                    <div class="info">
                        <h3>john deo</h3>
                        <span>designer</span>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia quidem laborum pariatur alias, culpa illum quaerat, aliquid laboriosam voluptatem nisi repellat obcaecati, adipisci esse ab delectus dolorum ut recusandae ipsam?</p>
                <div class="user">
                    <img src="images/pic-3.png" alt="">
                    <div class="info">
                        <h3>john deo</h3>
                        <span>designer</span>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia quidem laborum pariatur alias, culpa illum quaerat, aliquid laboriosam voluptatem nisi repellat obcaecati, adipisci esse ab delectus dolorum ut recusandae ipsam?</p>
                <div class="user">
                    <img src="images/pic-4.png" alt="">
                    <div class="info">
                        <h3>john deo</h3>
                        <span>designer</span>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia quidem laborum pariatur alias, culpa illum quaerat, aliquid laboriosam voluptatem nisi repellat obcaecati, adipisci esse ab delectus dolorum ut recusandae ipsam?</p>
                <div class="user">
                    <img src="images/pic-5.png" alt="">
                    <div class="info">
                        <h3>john deo</h3>
                        <span>designer</span>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia quidem laborum pariatur alias, culpa illum quaerat, aliquid laboriosam voluptatem nisi repellat obcaecati, adipisci esse ab delectus dolorum ut recusandae ipsam?</p>
                <div class="user">
                    <img src="images/pic-6.png" alt="">
                    <div class="info">
                        <h3>john deo</h3>
                        <span>designer</span>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section>

<!-- reviews section ends -->

<!-- packages section starts  -->

<section class="packages" id="packages">

    <h1 class="heading">popular packages</h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="images/img-1.jpg" alt="">
            </div>
            <div class="content">
                <h3>featured tour package</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, eos.</p>
                <div class="price">$250 - $450</div>
                <a href="#" class="btn">explore now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/img-2.jpg" alt="">
            </div>
            <div class="content">
                <h3>featured tour package</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, eos.</p>
                <div class="price">$250 - $450</div>
                <a href="#" class="btn">explore now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/img-3.jpg" alt="">
            </div>
            <div class="content">
                <h3>featured tour package</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, eos.</p>
                <div class="price">$250 - $450</div>
                <a href="#" class="btn">explore now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/img-4.jpg" alt="">
            </div>
            <div class="content">
                <h3>featured tour package</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, eos.</p>
                <div class="price">$250 - $450</div>
                <a href="#" class="btn">explore now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/img-5.jpg" alt="">
            </div>
            <div class="content">
                <h3>featured tour package</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, eos.</p>
                <div class="price">$250 - $450</div>
                <a href="#" class="btn">explore now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/img-6.jpg" alt="">
            </div>
            <div class="content">
                <h3>featured tour package</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, eos.</p>
                <div class="price">$250 - $450</div>
                <a href="#" class="btn">explore now</a>
            </div>
        </div>

    </div>

</section>

<!-- packages section ends -->


<section class="blogs" id="blogs">

    <h1 class="heading"> our daily posts </h1>

    <div class="swiper blogs-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <img src="images/img-1.jpg" alt="">
                <div class="icons">
                    <a href="#"> <i class="fas fa-calendar"></i> 21st may, 2021 </a>
                    <a href="#"> <i class="fas fa-user"></i> by admin </a>
                </div>
                <h3>blog title goes here.</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, deserunt.</p>
                <a href="#" class="btn">read more</a>
            </div>

            <div class="swiper-slide slide">
                <img src="images/img-2.jpg" alt="">
                <div class="icons">
                    <a href="#"> <i class="fas fa-calendar"></i> 21st may, 2021 </a>
                    <a href="#"> <i class="fas fa-user"></i> by admin </a>
                </div>
                <h3>blog title goes here.</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, deserunt.</p>
                <a href="#" class="btn">read more</a>
            </div>

            <div class="swiper-slide slide">
                <img src="images/img-3.jpg" alt="">
                <div class="icons">
                    <a href="#"> <i class="fas fa-calendar"></i> 21st may, 2021 </a>
                    <a href="#"> <i class="fas fa-user"></i> by admin </a>
                </div>
                <h3>blog title goes here.</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, deserunt.</p>
                <a href="#" class="btn">read more</a>
            </div>

            <div class="swiper-slide slide">
                <img src="images/img-4.jpg" alt="">
                <div class="icons">
                    <a href="#"> <i class="fas fa-calendar"></i> 21st may, 2021 </a>
                    <a href="#"> <i class="fas fa-user"></i> by admin </a>
                </div>
                <h3>blog title goes here.</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, deserunt.</p>
                <a href="#" class="btn">read more</a>
            </div>

            <div class="swiper-slide slide">
                <img src="images/img-5.jpg" alt="">
                <div class="icons">
                    <a href="#"> <i class="fas fa-calendar"></i> 21st may, 2021 </a>
                    <a href="#"> <i class="fas fa-user"></i> by admin </a>
                </div>
                <h3>blog title goes here.</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, deserunt.</p>
                <a href="#" class="btn">read more</a>
            </div>

            <div class="swiper-slide slide">
                <img src="images/img-6.jpg" alt="">
                <div class="icons">
                    <a href="#"> <i class="fas fa-calendar"></i> 21st may, 2021 </a>
                    <a href="#"> <i class="fas fa-user"></i> by admin </a>
                </div>
                <h3>blog title goes here.</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, deserunt.</p>
                <a href="#" class="btn">read more</a>
            </div>

        </div>

    </div>

</section>

<!-- blogs section ends -->

<!-- newsletter section  -->

<section class="newsletter">

    <div class="content">
        <h1 class="heading">subscirbe now</h1>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam ipsam repellat nostrum esse officiis unde quisquam corporis doloremque adipisci similique!</p>
        <form action="">
            <input type="email" name="" placeholder="enter your email" id="" class="email">
            <input type="submit" value="subscirbe" class="btn">
        </form>
    </div>

</section>

<!-- newsletter section Ends -->

<section class="clients">

    <div class="swiper clients-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide silde"><img src="images/client-logo-1.png" alt=""></div>
            <div class="swiper-slide silde"><img src="images/client-logo-2.png" alt=""></div>
            <div class="swiper-slide silde"><img src="images/client-logo-3.png" alt=""></div>
            <div class="swiper-slide silde"><img src="images/client-logo-4.png" alt=""></div>
        </div>
    </div>

</section>


@endsection