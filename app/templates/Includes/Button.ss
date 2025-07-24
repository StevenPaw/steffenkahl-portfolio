<% if $Button %>
    <% with $Button %>
        <span class="button_wrap">
            <a href="$Url" <% if $Button.OpenInNew %> target="_blank"<% end_if %> class="link--button">$Title</a>
        </span>
    <% end_with %>
<% end_if %>
