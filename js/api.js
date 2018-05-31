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
               $sourceSpan.html(', ' + quoteSource);
            } else {
               $sourceSpan.text('');
            }

            //update the URL
            history.pushState(null,null,url);

         });
      });
   });
 
})(jQuery);

        
