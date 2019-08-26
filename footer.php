<footer>
        <!-- Add copy with automatic changed year + site title -->
        <p>Copyright &copy;<?php echo date('Y'); ?> - <?php bloginfo('name') ;?>. Wszelkie prawa zastrzeżone.</p>
    </footer>


<!-- Addding footer with np. javascript files  -->
<?php wp_footer(); ?>

<!-- Always have wp_footer() just before the closing </body>
tag of your theme, or you will break many plugins, which
generally use this hook to reference JavaScript files. -->

</body>
</html>