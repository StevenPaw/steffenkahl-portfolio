<section class="section section--contact" id="$LinkAnchor">
    <div class="section_content">
        <h2>$Title</h2>
        $Text
        <% loop $Buttons %>
            <% include Button Button=$Me %>
        <% end_loop %>
        <div class="links">
            <% loop $SocialMediaLinks %>
                <% include SocialIcon %>
            <% end_loop %>
        </div>
    </div>
</section>
