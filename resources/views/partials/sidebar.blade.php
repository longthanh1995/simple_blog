<!-- Start Sidebar -->
<aside class="col-md-3 sidebar">
    <div class="widget widget_stats">
        <div class="ul_list ul_list-icon-ok">
            <ul>
                <li><i class="icon-picture"></i>Total Posts ( <span>{!! $posts->count() !!}</span> )</li>
            </ul>
        </div>
    </div>
    <div class="widget widget_stats">
        <h3 class="widget_title">Facebook Page</h3>
        <div class="ul_list ul_list-icon-ok">
            <div class="fb-page" 
            data-href="https://www.facebook.com/Laravelcodedemo/" 
            data-width="259" 
            data-height="206" 
            data-small-header="false" 
            data-adapt-container-width="true" 
            data-hide-cover="false" 
            data-show-facepile="true">
                <blockquote cite="https://www.facebook.com/Laravelcodedemo/" class="fb-xfbml-parse-ignore">
                    <a href="https://www.facebook.com/Laravelcodedemo/">Laravelcode</a>
                </blockquote>
            </div>
        </div>
    </div>

    <div class="widget widget_tag_cloud">
        <h3 class="widget_title">Categories</h3>
        @foreach($categories as $cat)
        <a href="{!! route('category.show',strtolower($cat->name)) !!}">{!! $cat->name !!}</a>
        @endforeach
    </div>

    <div class="widget">
        <h3 class="widget_title">Recent Questions</h3>
        <ul class="related-posts">
          <li class="related-item">
                   <h3><a href="http://laravelcode.com/post/ajax-crud-example-in-laravel-55-application">Ajax CRUD example in Laravel 5.5 application</a></h3>
                   <p>
                    Hello, everyone in this post we are share with you how to make simple .....
                </p>
                <div class="clear"></div><span>October 26, 2017</span>
            </li>
            <li class="related-item">
                <h3><a href="http://laravelcode.com/post/laravel-55-how-to-make-curl-http-request-example">Laravel 5.5 - How To Make cURL HTTP Request Example</a></h3>
                <p>
                    Today, we are share with you how to make cURL HTTPs request in your la.....
                </p>
                <div class="clear"></div><span>October 17, 2017</span>
            </li>
        </ul>   
    </div>
    <div class="clearfix"></div>
</aside>            <!-- End Sidebar -->

