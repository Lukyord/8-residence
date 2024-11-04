<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="index-main" class="index">
    <div id="index-marquee">
        <div class="index-marquee-wrapper animate fadeIn ease-out-cubic" data-wow-duration="0.5s">
            <div class="index-marquee">
                <?php
                for ($i = 0; $i < 3; $i++) {
                ?>
                    <div class="marquee-item">
                        <p class="marquee-text">Grand opening sale up to 400,000 THB* Meet us at 8 Residence <a href="#outer" class="cta c-gold">click</a></p>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>

    <section id="index-hero" class="sc index-hero">
        <div class="swiper">
            <div class="swiper-wrapper">
                <?php
                for ($i = 0; $i < 3; $i++) {
                ?>
                    <div class="swiper-slide">
                        <div class="image">
                            <?php
                            $cover = './assets/img/design/index-hero-image' . ($i + 1) . '.jpg';
                            $cover_m = './assets/img/design/index-hero-m-image1.jpg';
                            ?>
                            <picture class="object blurred-media">
                                <source media="(min-width:992px)" srcset="<?php echo $cover ?>">
                                <source media="(min-width:0px)" srcset="<?php echo $cover_m ?>">
                                <img
                                    src="<?php echo $cover; ?>"
                                    alt="Index Hero Image"
                                    data-animation="matrixZoomOut"
                                    class="inside-animation ease-out-cubic"
                                    data-wow-duration="1s"
                                    draggable="false">
                            </picture>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
            <div class="index-hero-swiper-button-prev swiper-button-prev"></div>
            <div class="index-hero-swiper-button-next swiper-button-next"></div>
        </div>

        <div class="disclaimer">
            <p class="disclaimer-text size-description c-white">Computer generated image</p>
        </div>
    </section>

    <section id="index-slogan" class="sc index-slogan">
        <div class="wrapper">
            <div class="line line-1">
                <h2 class="slogan-main animate fadeInUp">LUXURY LIVING</h2>
                <h2 class="slogan-main animate fadeInUp show-md" data-wow-delay="0.15s">WITH</h2>
            </div>
            <div class="line line-2">
                <h2 class="slogan-main animate fadeInUp hidden-device-md" data-wow-delay="0.15s">WITH</h2>
                <h2 class="slogan-main animate fadeInUp" data-wow-delay="0.3s">ULTIMATE</h2>
                <p class="slogan-sub animate fadeInUp show-md" data-wow-delay="1s">Positioned at Sukhumvit 39, one of Bangkok's most upscale areas, with swift access to three malls in the EM district, Michelin-starred restaurants, and Samitivej Sukhumvit Hospital.</p>
            </div>
            <div class="line line-3">
                <p class="slogan-sub animate fadeInUp show-md" data-wow-delay="1s">With only 10 units within the 7-ﬂoor low-rise building, 8 Residence oﬀers unparalleled privacy.</p>
                <h2 class="slogan-main animate fadeInUp" data-wow-delay="0.45s">PRIVACY</h2>
            </div>

            <div class="mobile-slogan-sub animate fadeInUp hidden-device-md" data-wow-delay="1s">
                <p>Positioned at Sukhumvit 39, one of Bangkok's most upscale areas, with swift access to three malls in the EM district, Michelin-starred restaurants, and Samitivej Sukhumvit Hospital.</p>
                <p>With only 10 units within the 7-ﬂoor low-rise building, 8 Residence oﬀers unparalleled privacy.</p>
            </div>
        </div>
    </section>

    <section id="register-form" class="register-form">
        <div class="border-wrapper">
            <div class="left-border animation-border"></div>
            <div class="top-border animation-border"></div>
            <div class="right-border animation-border" style="animation-delay: 1s;"></div>
            <div class="bottom-border animation-border" style="animation-delay: 1s;"></div>

            <div class="wrapper animate fadeInUp" data-wow-delay="0.5s">
                <p class="form-direction size-h2 a-center font-heading uppercase">Please enter your registration details
                    <br class="show-md">in the corresponding fields.
                </p>
                <div class="entry-form">
                    <form class="wpcf7-form" action="javascript:;">
                        <div class="fields">

                            <!-- First Name -->
                            <div class="field half-width">
                                <div class="input">
                                    <label class="label anim fixed" for="firstname">First Name*</label>
                                    <span class="wpcf7-form-control-wrap" data-name="firstname">
                                        <input type="text" name="firstname" id="firstname" autocomplete="first-name" required>
                                        <span class="wpcf7-not-valid-tip" aria-hidden="true">*Required</span>
                                    </span>
                                </div>
                            </div>

                            <!-- Last Name -->
                            <div class="field half-width">
                                <div class="input">
                                    <label class="label anim fixed" for="lastname">Last Name*</label>
                                    <span class="wpcf7-form-control-wrap" data-name="lastname">
                                        <input type="text" name="lastname" id="lastname" autocomplete="family-name" required>
                                        <span class="wpcf7-not-valid-tip" aria-hidden="true">*Required</span>
                                    </span>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="field half-width">
                                <div class="input">
                                    <label class="label anim fixed" for="email">Email*</label>
                                    <span class="wpcf7-form-control-wrap" data-name="lastname">
                                        <input type="email" name="email" id="email" autocomplete="email" required>
                                        <span class="wpcf7-not-valid-tip" aria-hidden="true">*Required</span>
                                    </span>
                                </div>
                            </div>

                            <!-- Phone Number -->
                            <div class="field half-width">
                                <div class="input">
                                    <label class="label anim fixed" for="tel">Phone Number*</label>
                                    <span class="wpcf7-form-control-wrap" data-name="lastname">
                                        <input type="tel" name="tel" id="tel" autocomplete="tel" required>
                                        <span class="wpcf7-not-valid-tip" aria-hidden="true">*Required</span>
                                    </span>
                                </div>
                            </div>

                            <!-- Country/Region -->
                            <div class="field half-width">
                                <div class="input with-select">
                                    <label class="label anim fixed" for="country">Country/Region of Residence</label>
                                    <div class="select">
                                        <select class="select2" data-placeholder="" name="country" id="country">
                                            <option value=""></option>
                                            <option value="Option1">Country 1</option>
                                            <option value="Option2">Country 2</option>
                                            <option value="Option3">Country 3</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Budget -->
                            <div class="field half-width">
                                <div class="input with-select">
                                    <label class="label anim fixed" for="budget">Budget</label>
                                    <div class="select">
                                        <select class="select2" data-placeholder="" name="budget" id="budget">
                                            <option value=""></option>
                                            <option value="Option1">30-79 MB</option>
                                            <option value="Option2">80-149 MB</option>
                                            <option value="Option3">150+ MB</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Information -->
                            <div class="field animate fadeIn">
                                <div class="input textarea">
                                    <label class="label anim fixed" for="information">Please specify the information</label>
                                    <textarea name="information" id="text" autocomplete="off" required></textarea>
                                </div>
                            </div>

                            <!-- Form Footer -->
                            <div class="form-footer">
                                <div class="input checkbox border-none">
                                    <span class="wpcf7-form-control-wrap" data-name="terms">
                                        <input type="checkbox" name="terms" id="terms" autocomplete="off" class="checkbox" required>
                                        <span class="wpcf7-not-valid-tip" aria-hidden="true">*Required</span>
                                    </span>
                                    <label class="label size-subtitle1" for="terms">
                                        I agree to the collection, processing and use of my personal information by PP ASSET DEVELOPMENT and its subsidiaries in accordance with the law. For more details and purpose of use, please click here to check the Privacy Notice of PP ASSET DEVELOPMENT.
                                    </label>
                                </div>

                                <button type="submit" class="button light-bg">Submit</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section id="index-location" class="index-location border-wrapper">
        <div class="left-border animation-border"></div>
        <div class="top-border animation-border"></div>
        <div class="right-border animation-border"></div>
        <div class="bottom-border animation-border" style="animation-delay: 1s;"></div>

        <div class="wrapper">
            <div class="map">
                <div class="media-container blurred-media">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11200.675829730526!2d-75.6876061!3d45.42609535!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cce04ff4fe494ef%3A0x26bb54f60c29f6e!2sParliament+Hill!5e0!3m2!1sen!2sca!4v1528808935681" title="mock iframe"></iframe>
                    <!-- <img src="./assets/img/design/map.jpg" alt="Map" loading="lazy" draggable="false"> -->
                    <img src="./assets/img/design/pin.png" alt="Pin" class="pin" style="top: 50%; left: 50%" loading="lazy" draggable="false">
                </div>
                <div class="right-border animation-border show-md"></div>
            </div>
            <div class="address">
                <div class="content">
                    <p class="size-overline">LOACTION</p>
                    <address class="size-h2 font-heading">
                        8 RESIDENCE<br>
                        SUKHUMVIT 39,<br>
                        KLONGTON NUA,<br>
                        WATTANA, BANGKOK
                        <br><br>
                        <a href="tel:+66910678949">TEL. 091-067-8949</a>
                    </address>
                    <div class="buttons">
                        <div class="google-map">
                            <a href="#google-map" class="button light-bg">GOOGLE MAP</a>
                        </div>
                        <div class="graphic-map">
                            <a href="#graphic-map" class="button light-bg open-popup-modal">GRAPHIC MAP</a>
                            <div id="graphic-map" class="graphic-map-popup mfp-hide">
                                <?php
                                $cover = './assets/img/design/graphic-map.png';
                                $cover_m = './assets/img/design/graphic-map-m.png';
                                ?>
                                <div class="image">
                                    <picture class="object">
                                        <source media="(min-width:992px)" srcset="<?php echo $cover ?>">
                                        <source media="(min-width:0px)" srcset="<?php echo $cover_m ?>">
                                        <img
                                            src="<?php echo $cover; ?>"
                                            alt="Graphic Map"
                                            draggable="false">

                                    </picture>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="tab-container">
                <ul class="tab-links">
                    <div class="top-border animation-border horizontalWidthPadding animate"></div>

                    <li class="tab">
                        <a href="#tab-1" class="tab-link active">Lifestyle</a>
                        <div class="right-border animation-border verticalHeight animate show-md"></div>
                    </li>
                    <li class="tab">
                        <a href="#tab-2" class="tab-link">Education</a>
                        <div class="right-border animation-border verticalHeight animate show-md"></div>
                    </li>
                    <li class="tab">
                        <a href="#tab-3" class="tab-link">Hospital</a>
                    </li>

                    <div class="bottom-border animation-border horizontalWidthPadding animate show-md"></div>
                </ul>

                <div class="tab-contents">
                    <div class="tab-content active" id="tab-1">
                        <div class="location-list">
                            <?php
                            $locations = [
                                ["name" => "EM District", "distance" => "1 km"],
                                ["name" => "J Avenue", "distance" => "1.5 km"],
                                ["name" => "Marketplace", "distance" => "1.5 km"]
                            ];
                            foreach ($locations as $location) : ?>
                                <div class="location-item">
                                    <p><?php echo htmlspecialchars($location["name"]); ?></p>
                                    <p><?php echo htmlspecialchars($location["distance"]); ?></p>
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <div class="right-border animation-border verticalHeight animate show-md"></div>
                    </div>
                    <div class="tab-content" id="tab-2">
                        <div class="location-list">
                            <?php
                            $locations = [
                                ["name" => "The American School of Bangkok", "distance" => "1 km"],
                                ["name" => "ELC International Kindergarten", "distance" => "1.5 km"],
                                ["name" => "Bangkok Prep School", "distance" => "2 km"],
                                ["name" => "Wells International School", "distance" => "2.4 km"]
                            ];
                            foreach ($locations as $location) : ?>
                                <div class="location-item">
                                    <p><?php echo htmlspecialchars($location["name"]); ?></p>
                                    <p><?php echo htmlspecialchars($location["distance"]); ?></p>
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <div class="right-border animation-border verticalHeight animate show-md"></div>
                    </div>
                    <div class="tab-content" id="tab-3">
                        <div class="location-list">
                            <?php
                            $locations = [
                                ["name" => "Samitivej Hospital", "distance" => "1 km"],
                            ];
                            foreach ($locations as $location) : ?>
                                <div class="location-item">
                                    <p><?php echo htmlspecialchars($location["name"]); ?></p>
                                    <p><?php echo htmlspecialchars($location["distance"]); ?></p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>