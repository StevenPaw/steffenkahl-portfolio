<div class="section section--PortfolioElement" id="$LinkAnchor">
    <div class="section_content">
        <h2>Web Development</h2>
        <div class="description">
            <div class="text">
                $Text
            </div>
            <% include Button Button=$Button %>
        </div>
        <div class="portfolio-entries portfolio_swiper">
            <div class="swiper-wrapper">
                <% loop $PortfolioEntries %>
                    <% include PortfolioCard %>
                <% end_loop %>
            </div>
            <div class="swiper-actions">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
</div>
