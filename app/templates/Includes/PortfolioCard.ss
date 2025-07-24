<% if $Button %>
    <a <% if $Button.OpenInNew %> target="_blank"<% end_if %> href="$Button.URL" class="wd_example_wrap swiper-slide">
        <div class="wd_example">
            <img class="background" src="$Image.AbsoluteLink"/>
            <h4>$Year</h4>
            <h3>$Title</h3>
            <div class="section_description">
                $Description
            </div>
        </div>
    </a>
<% else %>
    <div class="wd_example_wrap swiper-slide">
        <div class="wd_example">
            <img class="background" src="$Image.AbsoluteLink"/>
            <h4>$Year</h4>
            <h3>$Title</h3>
            <div class="section_description">
                $Description
            </div>
        </div>
    </div>
<% end_if %>
