<?php get_header()?>

<section class="updates">
    <div class="container">
    <div class="updates__wrapper">
        <div class="updates__title">
            <sh2> LATEST TRENDS </sh2>
            <p>Lorem ipsum dolor sit amet consectetur.</p>
        </div>
        <div class="updatesseparate">
            <div class="updatesleft">
                <?php $trends = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => 2, 
                    'order' => 'ASC'
                ))?>
                <?php if($trends->have_posts()) : while($trends->have_posts()) : $trends->the_post();?>

                <div class="updatescard">
                    <div class="updatescard__img">
                        <?php if(has_post_thumbnail()) {the_post_thumbnail();}?>
                    </div>
                    <div class="updatescard--text">
                        <div class="updatescard__tags">
                        <table>
                            <tr>
                            <td>
                                <a href=""><i class="fa-solid fa-user"></i></a>
                            </td>
                            <td><?php echo get_the_author_meta('first_name')?></td>
                            <td>
                                <a href=""
                                ><i class="fa-solid fa-calendar-days"></i
                                ></a>
                            </td>
                            <td><?php echo get_the_date("M j, Y")?></td>
                            <td>
                                <a href=""><i class="fa-solid fa-tags"></i></a>
                            </td>
                            <td><?php $tags = get_the_tags();
                                if($tags) {
                                    foreach($tags as $tag) {
                                        echo $tag->name;
                                    }
                                }
                            ?></td>
                            </tr>
                        </table>
                        </div>
                        <h3><?php the_title()?></h3>
                        <p><?php echo get_the_excerpt()?></p>
                        <a href="">Read more...</a>
                    </div>
                </div>

                <?php endwhile;
                    else : 
                        echo "no menu";
                    endif;
                    wp_reset_postdata();
                ?>

            </div>
            <div class="updateright">
                <div class="categories">
                <h3>CATEGORIES</h3>
                <table>
                    <tr>
                    <td>Web Design</td>
                    <td>(2)</td>
                    </tr>
                    <tr>
                    <td>Web Development</td>
                    <td>(3)</td>
                    </tr>
                    <tr>
                    <td>Web Frame</td>
                    <td>(1)</td>
                    </tr>
                    <tr>
                    <td>Vector & Logo</td>
                    <td>(5)</td>
                    </tr>
                    <tr>
                    <td>Social edia</td>
                    <td>(2)</td>
                    </tr>
                </table>
                </div>
                <div class="recent">
                <h3>RECENT POST</h3>
                <div class="recentcard">
                    <div class="recent__img">
                    <img src="./img/tech/5.jpg" alt="" />
                    </div>
                    <div class="recenttext">
                    <h4>Lorem ipsum dolor sit amet consectetur.</h4>
                    <p>August 06, 2024</p>
                    </div>
                </div>
                <div class="recentcard">
                    <div class="recent__img">
                    <img src="./img/tech/5.jpg" alt="" />
                    </div>
                    <div class="recenttext">
                    <h4>Lorem ipsum dolor sit amet consectetur.</h4>
                    <p>August 06, 2024</p>
                    </div>
                </div>
                <div class="recentcard">
                    <div class="recent__img">
                    <img src="./img/tech/5.jpg" alt="" />
                    </div>
                    <div class="recenttext">
                    <h4>Lorem ipsum dolor sit amet consectetur.</h4>
                    <p>August 06, 2024</p>
                    </div>
                </div>
                </div>
                <div class="tags">
                <h3>TAGS</h3>
                <div class="tabbuttons">
                    <a href="" class="btn bg-light">WEB DESIGN</a>
                    <a href="" class="btn bg-light">WIRE FRAME</a>
                    <a href="" class="btn bg-dark">WEB DEVELOPMENT</a>
                    <a href="" class="btn bg-light">LOGO</a>
                    <a href="" class="btn bg-light">VECTOR</a>
                    <a href="" class="btn bg-light">SOCIAL MEDIA</a>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<?php get_footer()?>