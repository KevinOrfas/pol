

  <footer class="footer cf" role="contentinfo">

    <div class="copyright">
      <?php echo $site->copyright()->kirbytext() ?>
    </div>

  </footer>
</div><!-- .viewport end -->

<?php snippet('photoswipe') ?>

<script data-main="<?php echo url('assets/js/main') ?>" src="<?php echo url('assets/js/lib/require.js') ?>"></script>
</body>
</html>
