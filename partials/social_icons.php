<?php

            $obj_id = get_queried_object_id();
            $actual_link = get_permalink( $obj_id );

            $pageTitle = urlencode(get_the_title());

            ?>
            <div class="col-12 col-md-4 social-media-icons"  data-aos="fade-up" data-aos-duration="1000"  data-aos-delay="1500">

                    <a id="facebook" href="http://www.facebook.com/sharer.php?u=<?php echo $actual_link ?>&t=<?php print($pageTitle); ?>"
                        class="b-social-media-icons" target="_blank">
                        <i class="fab fa-facebook-f"></i></a>
                    <a id="twitter"
                        href="https://twitter.com/share?url=<?php echo $actual_link ?>&amp;text=<?php print($pageTitle); ?>"
                        class="b-social-media-icons" target="_blank">
                        <i class="fab fa-twitter"></i></a>

                    <a id="email" class="b-social-media-icon" target="_blank"
                        href="mailto:?subject=<?php print($pageTitle); ?>&body=<?php print($pageTitle); ?>%20<?php echo $actual_link ?>">
                        <i class="fas fa-envelope"></i></a>

            </div>