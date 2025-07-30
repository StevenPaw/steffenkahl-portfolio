<% if $Button %>
    <a <% if $Button.OpenInNew %> target="_blank"<% end_if %> href="$Button.URL" class="portfolio-card swiper-slide">
        <div class="portfolio-card_inner">
            <div class="portfolio-card_image">
                <% if $Image %>
                    <img class="background" src="$Image.AbsoluteLink"/>
                <% end_if %>
            </div>
            <h4>$Year</h4>
            <h3>$Title</h3>
            <div class="section_description">
                $Description
            </div>
        </div>
    </a>
<% else %>
    <div class="portfolio-card swiper-slide">
        <div class="portfolio-card_inner">
            <div class="portfolio-card_image">
                <% if $Image %>
                    <img class="background" src="$Image.AbsoluteLink"/>
                <% end_if %>
            </div>
            <h4>$Year</h4>
            <h3>$Title</h3>
            <div class="section_description">
                $Description
            </div>
        </div>
    </div>
<% end_if %>
