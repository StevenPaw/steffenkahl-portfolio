<div class="section section--introduction">
    <div class="background">
        <img src="images/parallax/parallax_layer7.png" data-behaviour="parallax" data-speed="0.9"/>
        <img class="tilting" src="images/parallax/parallax_layer6.png" data-behaviour="parallax" data-speed="0.7"/>
        <img class="glowing" src="images/parallax/parallax_layer5.png" data-behaviour="parallax" data-speed="0.5"/>
        <img src="images/parallax/parallax_layer4.png" data-behaviour="parallax" data-speed="0.3"/>
        <img src="images/parallax/parallax_layer3.png" data-behaviour="parallax" data-speed="0.2"/>
        <img class="sliding" src="images/parallax/parallax_layer2.png" data-behaviour="parallax" data-speed="0.1"/>
        <img class="slidingslow" src="images/parallax/parallax_layer1.png" data-behaviour="parallax" data-speed="0.05"/>
        <img src="images/parallax/parallax_layer0.png" data-behaviour="parallax" data-speed="0.03"/>
    </div>
    <div class="section_content">
        <h1 class="introduction_title">$Title</h1>
        
        <div class="professions_list">
            <% loop $Categories %>
                <a href="./#$AnchorLink" class="professions_entry">
                    <p class="professions_title">$ShortTitle1</p>
                    <p class="professions_title">$ShortTitle2</p>
                    <img class="professions_border" src="images/professions/Profession-Border.svg"/>
                </a>
            <% end_loop %>
        </div>
    </div>
</div>
