<section class="section section--skills" id="$LinkAnchor">
    <div class="section_content">
        <h2>$Title</h2>
        <div class="description">
            $Text
        </div>
        
        <% loop $SkillCategories %>
            <div class="skillset">
                <h3 class="skillset_headline" data-behaviour="showhide">$Title</h3>
                <div class="skillset_content">
                    <% loop $Skills %>
                        <div class="skill">
                            <p>$Title</p>
                            <div class="skill_container">
                                <div class="skill_entry_spacer"><span></span><span></span><span></span><span></span><span></span></div>
                                <div class="skill_entry width$Value">$ValueText</div>
                            </div>
                        </div>
                    <% end_loop %>
                </div>
            </div>
        <% end_loop %>
    </div>
</section>
