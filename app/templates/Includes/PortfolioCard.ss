
<% if $Button %><a  href="$Button.URL" <% if $Button.OpenInNew %> target="_blank"<% end_if %><% else %><div <% end_if %>class="portfolio-card swiper-slide">
    <div class="portfolio-card_foreground">
        $PopoutImage
    </div>
    <div class="portfolio-card_inner">
        <div class="portfolio-card_image">
            <% if $Image %>
                <img class="background" src="$Image.AbsoluteLink"/>
            <% end_if %>
        </div>
        <h4>$Year</h4>
        <h3>$Title</h3>
        <% if $Description %>
            <div class="section_description">
                $Description
            </div>
        <% end_if %>
        <% if $Skillsets.Count > 0 %>
            <div class="section_skillsets">
                <% loop $Skillsets %>
                    <p class="skillset">$Title</p>
                <% end_loop %>
            </div>
        <% end_if %>
    </div>
<% if $Button %></a><% else %></div> <% end_if %>
