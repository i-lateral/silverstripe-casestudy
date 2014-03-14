<% include SideBar %>

<div class="content-container <% if $Menu(2) %>unit-75<% end_if %>">
    <article>
        <h1>$Title</h1>


        <% if $SummaryImage %>
            <div
                class="summaryimage"
                style="width: 100%; height: 20em; background: url({$SummaryImage.CroppedImage(817,300).URL}) no-repeat 50% 50%;"
            ></div>
        <% end_if %>

        <div class="content">
            $Content
        </div>

    </article>

        $Form
        $PageComments
</div>
