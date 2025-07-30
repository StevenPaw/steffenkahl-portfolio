<section class="section section--PortfolioPage">
    <div class="section_content">
        <h1 class="portfolio_title">$Title</h1>
        
        <div class="portfolio_description">
            <p>$Description</p>
        </div>

        <div class="portfolio_items">
            <% loop $Entries %>
                <% include PortfolioCard %>
            <% end_loop %>
        </div>
    </div>
</section>
