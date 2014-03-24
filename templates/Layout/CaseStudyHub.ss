<% include SideBar %>

<div class="content-container <% if $Menu(2) %>unit-75<% end_if %>">
    <article>
        <h1>$Title</h1>
        <div class="content">$Content</div>

        <% if $Children.exists %>
            <div class="units-row case-studies"><% loop $Children %>
                <p class="unit-33">
                    <a href="{$Link}">
                        <% if $SummaryImage %>
                            $SummaryImage.CroppedImage(256,256)
                        <% else_if $Images.exists() %>
                            $Images.sort('SortOrder').first().CroppedImage(256,256)
                        <% end_if %>

                        <br/>

                        <strong>$Title</strong>
                    </a>
                </p>

                <% if MultipleOf(3) %></div><div class="units-row case-studies"><% end_if %>
            <% end_loop %></div>
        <% end_if %>

    </article>
        $Form
        $PageComments
</div>
