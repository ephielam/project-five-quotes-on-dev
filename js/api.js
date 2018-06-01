(function($) {

/**
* Ajax-based random post fetching
**/

   $(function randomQuote() {

      //fetch a new quote
      $('#new-quote').on('click', function(event) {
      event.preventDefault();

         $.ajax({
            method: 'get',
            url: api_vars.root_url + 'wp/v2/posts?filter[orderby]=rand&filter[posts_per_page]=1',
            cache:false  
         }).done( function(data) {
            //get the first and only array
            var post = data.shift(), 
            $sourceSpan = $('.source'),
            quoteSource = post._qod_quote_source,
            quoteSourceUrl = post._qod_quote_source_url,
            slug = post.slug,
            url = api_vars.home_url + '/' + slug + '/';

            //updates the quote content and name of the quoted person4
            $('.entry-content').html(post.content.rendered);
            $('.entry-title').html(post.title.rendered);

            //display the quote if available   
            if (quoteSource.length && quoteSourceUrl.length) {
               $sourceSpan.html(', <a href="' + quoteSourceUrl + '">' + quoteSource + '</a>');
            } else if (quoteSource.length) {
              $sourceSpan.html(', ' + quoteSource);
            } else {
               $sourceSpan.text('');
            }

            //update the URL
            history.pushState(null,null,url);

         });
      });
   });


   /**
   * Ajax-based front-end post submissions.
   */
  $(function() {
    $('#quote-submission-form').on('submit', function(event) {
      event.preventDefault();

      var title = $('#quote-author').val(),
        content = $('#quote-content').val(),
        quoteSource = $('#quote-source').val(),
        quoteSourceUrl = $('#quote-source-url').val();

      var data = {
        title: title,
        content: content,
        _qod_quote_source: quoteSource,
        _qod_quote_source_url: quoteSourceUrl,
        post_status: 'pending'
      };

      $.ajax({
        method: 'post',
        url: api_vars.root_url + 'wp/v2/posts',
        data: data,
        beforeSend: function(xhr) {
          xhr.setRequestHeader('X-WP-Nonce', api_vars.nonce);
        }
      })
        .done(function() {
          // clear the form fields and hide the form
          $('#quote-submission-form')
            .slideUp()
            .find('input[type="text"], input[type="url"], textarea')
            .val('');
          // show success message
          $('.submit-success-message')
            .text(api_vars.success)
            .slideDown('slow');
        })
        .fail(function() {
          alert(api_vars.failure);
        });
    });
  });

})(jQuery);



