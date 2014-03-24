          </div>
        </div>

        <!-- sidebar -->
        <div class="col-xs-4">
          <?php get_sidebar(); ?>
        </div>
        <!-- end sidebar -->
      </div>
    </div>

    <div id="footer">
    </div>

    <!-- Page generated:
      <?php timer_stop(1); ?> s,
      <?php echo get_num_queries(); ?> queries
    -->

    <?php wp_footer(); ?>

    <script>
    (function() {
      $('.rff-widget-title').each(function(i, el) {
        var span = $(el);
        var li = span.parents('.widget');
        span.remove().removeClass('rff-widget-title');
        li.addClass(span.attr('class'));
      });
    })();
    </script>
  </body>
</html>
