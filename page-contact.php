<?php get_header()?>




<section class="contact">
    <div class="container">
    <div class="contact__wrapper">
        <div class="contact__title">
        <sh2> CONTACT </sh2>
        </div>
        <div class="contact__content">
        <div class="contact__info">
            <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi,
            voluptatum?
            </p>
            <table>
            <tr>
                <td>
                <a href=""><i class="fa-solid fa-phone-flip"></i></a>
                </td>
                <td><?php echo get_post_meta(get_the_ID(), "Phone", true)?></td>
            </tr>
            <tr>
                <td>
                <a href=""><i class="fa-solid fa-envelope"></i></a>
                </td>
                <td><?php echo get_post_meta(get_the_ID(), "Email", true)?></td>
            </tr>
            <tr>
                <td>
                <a href=""><i class="fa-solid fa-location-dot"></i></a>
                </td>
                <td>
                <?php echo get_post_meta(get_the_ID(), "Address", true)?>
                </td>
            </tr>
            </table>
            <ul>
            <li>
                <a href="<?php echo get_post_meta(get_the_ID(), "Facebook", true)?>"><i class="fa-brands fa-square-facebook"></i></a>
            </li>
            <li>
                <a href="<?php echo get_post_meta(get_the_ID(), "Twitter", true)?>"><i class="fa-brands fa-square-x-twitter"></i></a>
            </li>
            <li>
                <a href="<?php echo get_post_meta(get_the_ID(), "Instagram", true)?>"><i class="fa-brands fa-square-instagram"></i></a>
            </li>
            <li>
                <a href="<?php echo get_post_meta(get_the_ID(), "Youtube", true)?>"><i class="fa-brands fa-youtube"></i></a>
            </li>
            </ul>
        </div>
        <div class="contact__entry">
            <form action="">
            <input type="text" placeholder="Name" />
            <input type="text" placeholder="Email Address" />
            <textarea type="text" placeholder="Message"></textarea>
            <a href="" class="btn bg-primary">SEND MESSAGE</a>
            </form>
        </div>
        </div>
    </div>
    </div>
</section>











<?php get_footer()?>